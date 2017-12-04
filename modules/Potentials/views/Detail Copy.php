<?php

/* +***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 * *********************************************************************************** */

class Potentials_Detail_View extends Vtiger_Detail_View {

	function __construct() {
		parent::__construct();
		$this->exposeMethod('showRelatedRecords');
		$this->exposeMethod('showProcessView');
	}
	/**
	 * Function to get activities
	 * @param Vtiger_Request $request
	 * @return <List of activity models>
	 */
	public function getActivities(Vtiger_Request $request) {
		$moduleName = 'Calendar';
		$moduleModel = Vtiger_Module_Model::getInstance($moduleName);

		$currentUserPriviligesModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
		if($currentUserPriviligesModel->hasModulePermission($moduleModel->getId())) {
			$moduleName = $request->getModule();
			$recordId = $request->get('record');

			$pageNumber = $request->get('page');
			if(empty ($pageNumber)) {
				$pageNumber = 1;
			}
			$pagingModel = new Vtiger_Paging_Model();
			$pagingModel->set('page', $pageNumber);
			$pagingModel->set('limit', 10);

			if(!$this->record) {
				$this->record = Vtiger_DetailView_Model::getInstance($moduleName, $recordId);
			}
			$recordModel = $this->record->getRecord();
			$moduleModel = $recordModel->getModule();

			$relatedActivities = $moduleModel->getCalendarActivities('', $pagingModel, 'all', $recordId);

			$viewer = $this->getViewer($request);
			$viewer->assign('RECORD', $recordModel);
			$viewer->assign('MODULE_NAME', $moduleName);
			$viewer->assign('PAGING_MODEL', $pagingModel);
			$viewer->assign('PAGE_NUMBER', $pageNumber);
			$viewer->assign('ACTIVITIES', $relatedActivities);

			return $viewer->view('RelatedActivities.tpl', $moduleName, true);
		}
	}


	/**
	 * Added By Vijay - for Process
	 *
	 * Function shows the entire detail for the record
	 * @param Vtiger_Request $request
	 * @return <type>
	 */
	function showProcessView(Vtiger_Request $request){

		$moduleName = $request->getModule();

		//get Next Planned Activity
		$activityRecordModel = $this->getRecordForNextActivity($request);

		$activityRecordStructure = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($activityRecordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_DETAIL);
		$activityStructuredValues = $activityRecordStructure->getStructure();

		//Handle Events & Tasks
		if($activityRecordModel->get('activitytype') == 'Task') {
			$activityModuleName = $activityRecordModel->getModuleName();
			$activityModuleModel = $activityRecordModel->getModule();
		} else {
			$activityModuleName = 'Events';
			$activityModuleModel = Vtiger_Module_Model::getInstance($activityModuleName);
		}

		echo $activityRecordModel->get('status');
		//$activityStatus = $activityRecordModel->getField('eventstatus');
		//echo '<tt><pre>' . var_export($activityStatus->get('fieldvalue'), TRUE) . '</pre></tt>'; //fieldvalue
		//echo '<tt><pre>' . var_export($activityRecord->getModule()->getField('eventstatus')->get('fieldvalue'), TRUE) . '</pre></tt>';
		$viewer = $this->getViewer($request);
		$viewer->assign('RECORD', $activityRecordModel);
		$viewer->assign('RECORD_STRUCTURE', $activityStructuredValues);
		$viewer->assign('BLOCK_LIST', $activityModuleModel->getBlocks());
		$viewer->assign('USER_MODEL', Users_Record_Model::getCurrentUserModel());
		$viewer->assign('MODULE_NAME', $activityModuleName);
		$viewer->assign('IS_AJAX_ENABLED', $this->isAjaxEnabled($activityRecordModel));
		$viewer->assign('MODULE', $activityModuleName);
		$viewer->assign('MODULE_MODEL', $activityModuleModel);

		$viewer = $this->getViewer($request);
		echo $viewer->view('ProcessViewContents.tpl', $moduleName, true);



		//============================
				$recordId = $request->get('record');
				$moduleName = $request->getModule();

				if(!$this->record){
					$this->record = Vtiger_DetailView_Model::getInstance($moduleName, $recordId);
				}
				$recordModel = $this->record->getRecord();
				$recordStructure = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($recordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_DETAIL);
				$structuredValues = $recordStructure->getStructure();

				$moduleModel = $recordModel->getModule();

				$salesstage = $moduleModel->getFieldByColumn('sales_stage');
				echo '<tt><pre>' . var_export($salesstage->get('label'), TRUE) . '</pre></tt>'; //fieldvalue


		$viewer = $this->getViewer($request);
		$viewer->assign('RECORD', $recordModel);
		$viewer->assign('RECORD_STRUCTURE', $structuredValues);
		$viewer->assign('BLOCK_LIST', $moduleModel->getBlocks());
		$viewer->assign('USER_MODEL', Users_Record_Model::getCurrentUserModel());
		$viewer->assign('MODULE_NAME', $moduleName);
		$viewer->assign('IS_AJAX_ENABLED', $this->isAjaxEnabled($recordModel));
		$viewer->assign('MODULE', $moduleName);
		$viewer->assign('MODULE_MODEL', $moduleModel);
		$viewer->assign('MODULE_STATUS', $salesstage);

		$viewer = $this->getViewer($request);
		echo $viewer->view('ProcessViewContents.tpl', $moduleName, true);
	}


	function getRecordForNextActivity(Vtiger_Request $request) {
		$moduleName = 'Calendar';
		$moduleModel = Vtiger_Module_Model::getInstance($moduleName);

		$currentUserPriviligesModel = Users_Privileges_Model::getCurrentUserPrivilegesModel();
		if ($currentUserPriviligesModel->hasModulePermission($moduleModel->getId())) {
			$moduleName = $request->getModule();
			$recordId = $request->get('record');

			$pageNumber = $request->get('page');
			if (empty($pageNumber)) {
				$pageNumber = 1;
			}
			$pagingModel = new Vtiger_Paging_Model();
			$pagingModel->set('page', $pageNumber);
			$pagingModel->set('limit', 10);

			if (!$this->record) {
				$this->record = Vtiger_DetailView_Model::getInstance($moduleName, $recordId);
			}
			$recordModel = $this->record->getRecord();
			$moduleModel = $recordModel->getModule();

			$relatedActivities = $moduleModel->getCalendarActivities('upcoming', $pagingModel, 'all', $recordId);

			foreach($relatedActivities as $activityRecord) {
				$NextActivity=$activityRecord;
				break;
			}

			return $NextActivity;
		}
	}

}
