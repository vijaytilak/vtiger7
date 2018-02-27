<?php
/**
 * Created by PhpStorm.
 * User: Vijay
 * Date: 19/02/2018
 * Time: 12:37 PM
 */
require_once 'libraries/google-api-php-client-2.2.1/vendor/autoload.php';

class Google_CreateOpportunityFolder_Action extends Vtiger_BasicAjax_Action {

	function __construct() {
		$this->exposeMethod('buildService');
		$this->exposeMethod('createFolder');
		$this->exposeMethod('moveFolderToTD');
	}

	function process(Vtiger_Request $request) {
		$request->set('sourcemodule', 'Drive');
		$sourceModule = $request->get('sourcemodule');
		$oauth2 = new Google_Oauth2_Connector($sourceModule);
		if ($oauth2->hasStoredToken()) {
			//Stored Token exists
			$oauth2->authorize();
			$service = $this->buildService($oauth2);
			$createdFolderId = $this->createFolder($request, $service);
			return;
		} else {
			//No Stored Token
			if($request->get('code')) {
				$authCode = $_REQUEST['code'];
				$token = $oauth2->exchangeCodeForToken($authCode);
				$oauth2->storeToken($token);
				echo "<br><div style='background:#ADD8E6; text-align:center; font-family:Arial;'>Team Drive Connection Established! <br><br><h2>Click 'Create Team Drive Folder' button again to create the folder!</h2></div>";
				//echo "<script>window.opener.document.getElementById('createTeamDriveBtn').style.display = 'none';</script>";
				echo "<br><div style='background:#f0f0f0; font:Arial; text-align:center;'>(This window will close automatically in 5 seconds)</div>";
				echo "<script>setTimeout('self.close()',4000);</script>";
			} else {
				$oauth2->authorize();
			}
		}
	}

	function buildService($oauth2) {
		//Build Service
		$client = new Google_Client();
		$client->setClientId($oauth2->getClientId());
		$client->setClientSecret($oauth2->getClientSecret());
		$client->setRedirectUri($oauth2->getRedirectUri());
		$client->setScopes($oauth2->getScope());
		$client->setAccessToken($oauth2->getAccessToken());

		if ($client->getAccessToken()) {
			$service = new Google_Service_Drive($client);
			return $service;
		}
	}

	function createFolder(Vtiger_Request $request, $service) {
		$db = PearDatabase::getInstance();

		$parent = "0ACuhCJyBlm01Uk9PVA"; //Opportunity Teamdrive ID

		$opportunityId = $request->get('record');
		if(!$opportunityId) {
			exit('Missing Opportunity ID!');
		}

		$moduleName = 'Potentials';
		$recordId = $request->get('record');
		$recordModel = Vtiger_Record_Model::getInstanceById($recordId,$moduleName);
		$recordModel->set('mode','edit');

		$opportunityNo= $recordModel->get('potential_no');
		$contactId = $recordModel->get('contact_id');
		$query_result1 = $db->pquery("SELECT firstname,lastname FROM vtiger_contactdetails WHERE contactid = ?", array($contactId));
		$CustomerFirstName = $db->query_result($query_result1, 0, 'firstname');
		$CustomerLastName = $db->query_result($query_result1, 0, 'lastname');

		$fileName = 'Q_'.$opportunityNo.'_'.$CustomerFirstName.'_'.$CustomerLastName;
		$fileDescription = 'vtiger opportunity folder';

		//Create new folder
		$file = new Google_Service_Drive_DriveFile(array(
			'name' => $fileName,
			'description' => $fileDescription,
			'mimeType' => 'application/vnd.google-apps.folder',
			'teamDriveId' => $parent,
			'parents' => array($parent)
		));

		$optParams = array(
			'fields' => 'id',
			'supportsTeamDrives' => true,
		);

		$createdFile = $service->files->create($file, $optParams);

		//Create sub folder - Sales Folder
		$file = new Google_Service_Drive_DriveFile(array(
			'name' => 'Sales',
			'mimeType' => 'application/vnd.google-apps.folder',
			'teamDriveId' => $parent,
			'parents' => array($createdFile->id)
		));

		$optParams = array(
			'fields' => 'id',
			'supportsTeamDrives' => true,
		);
		$service->files->create($file, $optParams);

		//Create sub folder - Project Folder
		$file = new Google_Service_Drive_DriveFile(array(
			'name' => 'Project',
			'mimeType' => 'application/vnd.google-apps.folder',
			'teamDriveId' => $parent,
			'parents' => array($createdFile->id)
		));

		$optParams = array(
			'fields' => 'id',
			'supportsTeamDrives' => true,
		);
		$service->files->create($file, $optParams);

		//Create sub folder - Installation Folder
		$file = new Google_Service_Drive_DriveFile(array(
			'name' => 'Installation',
			'mimeType' => 'application/vnd.google-apps.folder',
			'teamDriveId' => $parent,
			'parents' => array($createdFile->id)
		));

		$optParams = array(
			'fields' => 'id',
			'supportsTeamDrives' => true,
		);
		$service->files->create($file, $optParams);

		$date_today = date("Y-m-d");
		if($createdFile->id) {
			//Update Team Drive Folder ID and Created Time in Opportunity
			$query_result =  $db->pquery("UPDATE `vtiger_potentialscf` SET `cf_1528`='".$createdFile->id."',`cf_1530`='".$date_today."' WHERE `potentialid`='".$recordId."'");

			//Display Message
			echo "<br><br><br><div style='background:#CEF6CE;font-family:Arial;'>Team Drive Folder ".$createdFile->title." created Successfully!<br>Created Folder ID : (".$createdFile->id.")</div>";
			echo "<script>window.opener.location.reload(false);</script>";
			echo "<br><br><br><div style='background:#f0f0f0;font-family:Arial;text-align:center;'>(This window will close automatically in 5 seconds)</div>";
			echo "<br><br><div style='text-align:center'><button class='btn btn-success' align='center' style='width:200px; text-align:center' onclick='window.close()'>Close Window</button><div>";
			echo "<script>setTimeout('self.close()',4000);</script>";
		}

		return $createdFile->id;
	}

	function moveFolderToTD($service) {
		//Vijay - Todo
		ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
		try {
			$fileId = '1a_d93lwfPYzRP5g76TGHG-EepBPmr7sd';
			$folderId = '1baGHToigYZuHJbDB-fAlwa4pqO21RBiI';
			$file = $service->files->get($fileId);
			echo $file->id;
			echo $file->alternateLink;
			echo $file->webViewLink;
			echo '<tt><pre>' . var_export($file, TRUE) . '</pre></tt>';
			exit('mee');
			$fileMetadata = new Google_Service_Drive_DriveFile(array(
				'name' => 'Invoices',
				'teamDriveId' => '0ACuhCJyBlm01Uk9PVA',

				));
// Retrieve the existing parents to remove
			$file = $service->files->get($fileId, array('fields' => 'parents'));
			$previousParents = join(',', $file->parents);
// Move the file to the new folder
			$file = $service->files->update($fileId, $fileMetadata, array(
				'addParents' => $folderId,
				'removeParents' => $previousParents,
				'fields' => 'id, parents',
				'supportsTeamDrives' => true,
			));


		} catch (Exception $e) {
			echo "<br>An error occurred: " . $e->getMessage();
			return(0);
		}
	}

}