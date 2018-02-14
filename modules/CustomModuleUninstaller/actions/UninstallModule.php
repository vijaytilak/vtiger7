<?php
/*+***********************************************************************************
 * The Initial Developer of the Original Code is Abzum (www.abzum.com).
 * All Rights Reserved.
 *************************************************************************************/

class CustomModuleUninstaller_UninstallModule_Action extends Vtiger_Action_Controller {

	public $result = array();

	public function __construct() {
		parent::__construct();
	}

	public function checkPermission( Vtiger_Request $request ) {
		$currentUserModel = Users_Record_Model::getCurrentUserModel();
		if ( ! $currentUserModel->isAdminUser() ) {
			throw new AppException( vtranslate( 'LBL_PERMISSION_DENIED', 'CustomModuleUninstaller' ) );
		}
	}

	public function process( Vtiger_Request $request ) {
		$result        = array();
		$delModuleName = $request->get( 'delModuleName' );
		$delModule     = Vtiger_Module::getInstance( $delModuleName );
		if ( $delModule ) {
			$vtigerStandardModules = array(
				'Accounts',
				'Assets',
				'Calendar',
				'Campaigns',
				'Contacts',
				'CustomerPortal',
				'Dashboard',
				'Emails',
				'EmailTemplates',
				'Events',
				'ExtensionStore',
				'Faq',
				'Google',
				'HelpDesk',
				'Home',
				'Import',
				'Invoice',
				'Leads',
				'MailManager',
				'Mobile',
				'ModComments',
				'ModTracker',
				'PBXManager',
				'Portal',
				'Potentials',
				'PriceBooks',
				'Products',
				'Project',
				'ProjectMilestone',
				'ProjectTask',
				'PurchaseOrder',
				'Quotes',
				'RecycleBin',
				'Reports',
				'Rss',
				'SalesOrder',
				'ServiceContracts',
				'Services',
				'SMSNotifier',
				'Users',
				'Vendors',
				'Webforms',
				'Webmails',
				'WSAPP'
			);

			//Check if it is a standard module
			if ( in_array( strtolower( $delModuleName ), array_map( "strtolower", $vtigerStandardModules ) ) ) {
				$this->result[] = $this->displayMessage( $delModuleName, 'Module', 0 );
			} else {
				$this->result[] = $this->deleteModule( $delModuleName, $delModule );
			}
		} else {
			$this->result[] = $this->displayMessage( $delModuleName, 'Module', 2 );
		}

		//JSON Encoded
		$response = new Vtiger_Response();
		$response->setEmitType( Vtiger_Response::$EMIT_JSON );
		$response->setResult( $this->result );
		$response->emit();
	}

	protected function deleteModule( $delModuleName, $delModule ) {
		$this->delTree( 'modules/' . $delModuleName );
		$this->delTree( 'languages/en_us/' . $delModuleName . '.php' );
		$this->delTree( 'layouts/vlayout/modules/' . $delModuleName );
		$this->delTree( 'layouts/v7/modules/' . $delModuleName );
		$this->delTree( 'cron/modules/' . $delModuleName );
		$delModule->delete();

		//Delete Tables
		$db = PearDatabase::getInstance();
		$sql = "SELECT CONCAT('DROP TABLE ', TABLE_SCHEMA, '.', TABLE_NAME, ';') AS query FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_NAME LIKE 'vtiger_".strtolower($delModuleName)."%' AND TABLE_SCHEMA = 'vtiger7';";
		$result = $db->pquery($sql,array());
		$rowCount = $db->num_rows($result);
		while ($row = $db->fetch_array($result)) {
			PearDatabase::getInstance()->pquery($row['query'],array());
			$this->result[] = $this->displayMessage( $row['query'], 'DB Table', '1' );
		}
	}

	//Delete a File or (Directory with Files)
	protected function delTree( $path ) {
		if ( is_dir( $path ) ) {
			$files = array_diff( scandir( $path ), array( '.', '..' ) );
			foreach ( $files as $file ) {
				if ( is_dir( "$path/$file" ) ) {
					$this->delTree( "$path/$file" );
				} else {
					$status         = unlink( "$path/$file" );
					$this->result[] = $this->displayMessage( "$path/$file", 'File', $status );
				}
			}
			$status         = rmdir( $path );
			$this->result[] = $this->displayMessage( $path, 'Folder', $status );

			return;
		} elseif ( is_file( $path ) ) {
			$status         = unlink( "$path" );
			$this->result[] = $this->displayMessage( $path, 'File', $status );
		} else {
			$this->result[] = $this->displayMessage( $path, 'File/Folder', 2 );
		}
	}

	//Display Messages
	protected function displayMessage( $path, $type, $status ) {
		switch ( $status ) {
			case 0:
				return "<li>$path : <font color='red'> [$type] cannot be removed!</font></li>";
				break;

			case 1:
				return "<li>$path : <font color='green'> [$type] has been removed!</font></li>";
				break;

			case 2:
				return "<li>$path : <font color='grey'> [$type] is not Found!</font></li>";
				break;
		}
	}
}