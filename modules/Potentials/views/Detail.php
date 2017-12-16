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

	public $recordId;
	public $moduleName;
	public $detailViewModel;
	public $recordModel;
	public $detailRecordStructureModel;
	public $summaryRecordStrucureModel;
	public $moduleModel;
	public $currentUserModel;
	public $picklistDependencyDatasource;
	public $salesStageProcessFunctionName;


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
	 * Added By Vijay - for Process View
	 *
	 * Function shows the entire detail for the record
	 * @param Vtiger_Request $request
	 * @return <type>
	 */
	function showProcessView(Vtiger_Request $request){

		$this->recordId = $request->get('record');
		$this->moduleName = $request->getModule();
		$this->detailViewModel = Vtiger_DetailView_Model::getInstance($this->moduleName, $this->recordId);
		$this->recordModel = $this->detailViewModel->getRecord();
		$this->detailRecordStructureModel = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($this->recordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_DETAIL);
		$this->summaryRecordStrucureModel = Vtiger_RecordStructure_Model::getInstanceFromRecordModel($this->recordModel, Vtiger_RecordStructure_Model::RECORD_STRUCTURE_MODE_SUMMARY);
		$this->moduleModel = $this->recordModel->getModule();
		$this->currentUserModel = Users_Record_Model::getCurrentUserModel();
		$this->picklistDependencyDatasource = Vtiger_DependencyPicklist::getPicklistDependencyDatasource($this->moduleName);
		$this->salesStageProcessFunctionName = 'process_'.strtolower(str_ireplace(" ","_",$this->recordModel->get('sales_stage')));

		//Call User Method
		if(method_exists($this, $this->salesStageProcessFunctionName)){
			call_user_func_array(array($this,$this->salesStageProcessFunctionName), array($request));
		}else{

			/*********************************CONFIG*******************************/
			$configModel = new Potentials_Config_Model;
			$configModel->setProcessStages($this->recordModel->get('sales_stage'));
			call_user_func_array(array($configModel,$this->salesStageProcessFunctionName), array());
			/*********************************END CONFIG*****************************/

			$viewer = $this->getViewer($request);
			$viewer->assign('RECORD', $this->recordModel);
			$viewer->assign('DETAIL_RECORD_STRUCTURE', $this->detailRecordStructureModel->getStructure());
			$viewer->assign('SUMMARY_RECORD_STRUCTURE',  $this->summaryRecordStrucureModel->getStructure());
			$viewer->assign('BLOCK_LIST', $this->moduleModel->getBlocks());
			$viewer->assign('USER_MODEL', $this->currentUserModel);
			$viewer->assign('MODULE_NAME', $this->moduleName);
			$viewer->assign('IS_AJAX_ENABLED', $this->isAjaxEnabled($this->recordModel));
			$viewer->assign('MODULE_MODEL', $this->moduleModel);
			$viewer->assign('PICKIST_DEPENDENCY_DATASOURCE', Vtiger_Functions::jsonEncode($this->picklistDependencyDatasource));

			$viewer->assign('PROCESS_STAGE_FIELDS', $configModel->getAllProcessStageFields());
			$viewer->assign('PROCESS_NAME', $configModel->processName);
			$viewer->assign('PROCESS_LIST', $configModel->processList);
			$viewer->assign('PROCESSES', $configModel->process);
			$viewer->assign('CONFIG_MODEL', $configModel);
			$viewer->assign('CURRENT_PROCESS', $configModel->currentProcess);
			$viewer->assign('PREVIOUS_PROCESS_STAGE', $configModel->previousProcessStage);
			$viewer->assign('CURRENT_PROCESS_STAGE', $configModel->currentProcessStage);
			$viewer->assign('NEXT_PROCESS_STAGE', $configModel->nextProcessStage);

			//Missing Processes
			$missingProcesses = Potentials_BasicAjax_Action::checkProcessStageCompletion($request, TRUE);
			$missingMandatoryProcesses = array_merge($missingProcesses['missingActivities'],$missingProcesses['missingRelatedRecords']);
			$minRefId=FALSE;
			$highlightProcess=array();
			foreach ($missingMandatoryProcesses as $key => $process) {
				if((!$minRefId)||($minRefId && ($process['refId']<$minRefId))) {
					$minRefId = $process['refId'];
					$highlightProcess = $process;
				}
			}
			if (false !== $key = array_search($highlightProcess, $missingProcesses['missingActivities'])) {
				$missingProcesses['missingActivities'][$key]['highlight']=TRUE;
			}
			if (false !== $key = array_search($highlightProcess, $missingProcesses['missingRelatedRecords'])) {
				$missingProcesses['missingRelatedRecords'][$key]['highlight']=TRUE;
			}
			$viewer->assign('MISSING_PROCESSES', $missingProcesses);

			//Related Quotes waiting to be Sent
			$getParams = array(
				'module' => $this->moduleName,
				'record' => $this->recordId,
				'relatedModule' => 'Quotes',
				'page' => '1',
				'limit' => '40',
				'status' => ['Prepared'],
				'statusField' => 'quotestage'
			);
			$getRequest = new Vtiger_Request($getParams);
			$models = $this->getRelatedRecords($getRequest);
			$quotesPrepared = $models['records'];
			$recordCount = count($quotesPrepared);
			$viewer->assign('QUOTES_PREPARED', $quotesPrepared);

			//Related Quotes Accepted
			$getParams = array(
				'module' => $this->moduleName,
				'record' => $this->recordId,
				'relatedModule' => 'Quotes',
				'page' => '1',
				'limit' => '40',
				'status' => ['Accepted'],
				'statusField' => 'quotestage'
			);
			$getRequest = new Vtiger_Request($getParams);
			$models = $this->getRelatedRecords($getRequest);
			$quotesAccepted = $models['records'];
			$recordCount = count($quotesAccepted);
			$viewer->assign('QUOTES_ACCEPTED', $quotesAccepted);

			$templateName = $this->salesStageProcessFunctionName.'.tpl';
			if( $viewer->template_exists($templateName) ){
				echo $viewer->view($templateName, $this->moduleName, true);
				$this->displayNextActivityDetail($request,$this->recordModel->get('id'),$this->moduleName);
			} else {
				echo $viewer->view('process_view.tpl', $this->moduleName, true);
				$this->displayNextActivityDetail($request,$this->recordModel->get('id'),$this->moduleName);
			}

			/*echo "<span style='background: #ffcc88'>The Process View for sales stage : '".$this->recordModel->get('sales_stage')."' is not properly configured. Method '".$this->salesStageProcessFunctionName."' does not exist in modules/Potentials/views/Detail.php. Please contact Fresco Admin :)</span>";*/
		}

	}


	/**
	 * Vijay
	 * @param Vtiger_Request $request
	 * @param string $sourceRecord
	 * @param string $sourceModule
	 */
	function displayNextActivityDetail(Vtiger_Request $request, $sourceRecord='', $sourceModule='') {
		$statusList = array('Planned');
		$plannedActivityRecords = $this->getActivityRecords($request, $statusList);
		$plannedActivityRecordCount = count($plannedActivityRecords);

		$sourceModule = $request->getModule();
		$sourceRecord = $request->get('record');
		foreach ($plannedActivityRecords as $activityRecordModel) {

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

			//Get OverDue Status
			$date = new DateTime(Vtiger_Util_Helper::convertDateTimeIntoUsersDisplayFormat($activityRecordModel->get('date_start').' '.$activityRecordModel->get('time_start')));
			$now = new DateTime(Vtiger_Util_Helper::convertDateTimeIntoUsersDisplayFormat());

			if($date < $now) {
				$activityOverDueStatus = 'Overdue';
			} else if($date == $now) {
				$activityOverDueStatus = 'Due Today';
			} else {
				$activityOverDueStatus = 'Upcoming';
			}
			$activityDateDiff = Vtiger_Util_Helper::formatDateDiffInStrings($activityRecordModel->get('date_start').' '.$activityRecordModel->get('time_start'));

			//Related Contact
			$relatedContactId = $this->recordModel->get('contact_id');

			$viewer = $this->getViewer($request);
			$viewer->assign('RECORD', $activityRecordModel);
			$viewer->assign('RECORD_STRUCTURE', $activityStructuredValues);
			$viewer->assign('BLOCK_LIST', $activityModuleModel->getBlocks());
			$viewer->assign('USER_MODEL', Users_Record_Model::getCurrentUserModel());
			$viewer->assign('MODULE_NAME', $activityModuleName);
			$viewer->assign('IS_AJAX_ENABLED', $this->isAjaxEnabled($activityRecordModel));
			$viewer->assign('MODULE', $activityModuleName);
			$viewer->assign('MODULE_MODEL', $activityModuleModel);
			$viewer->assign('ACTIVITY_STATUS', $activityRecordModel->get('status'));
			$viewer->assign('SOURCE_MODULE', $sourceModule);
			$viewer->assign('SOURCE_RECORD', $sourceRecord);
			$viewer->assign('ACTIVITY_OVERDUE_STATUS', $activityOverDueStatus);
			$viewer->assign('ACTIVITY_DATE_DIFF', $activityDateDiff);
			$viewer->assign('CONTACT_ID', $relatedContactId);
			$viewer->assign('COLS', round(12/$plannedActivityRecordCount));

			echo $viewer->view('ShowActivityDetail.tpl', $this->moduleName, true);
		}

	}


	/**
	 * @param Vtiger_Request $request
	 * @param array $statusList
	 * @param string $subject
	 * @param string $type
	 *
	 * @return array
	 */
	function getActivityRecords(Vtiger_Request $request, $statusList=array(), $subject='', $type='') {
		$moduleName = $request->getModule();
		$recordId = $request->get('record');
		$recordModel = Vtiger_Record_Model::getInstanceById($recordId,$moduleName);
		$moduleModel = $recordModel->getModule();

		$pagingModel = new Vtiger_Paging_Model();
		$pagingModel->set('page', 1);
		$pagingModel->set('limit', 50);

		$relatedActivities = $moduleModel->getAllCalendarActivities('', $pagingModel, 'all', $recordId);

		$relatedActivityList = array_filter($relatedActivities, function ($activityRecord) use ($statusList,$subject,$type) {
			$activityStatus = $activityRecord->get('activitytype')== 'Task' ? $activityRecord->get('status') : $activityRecord->get('eventstatus');
			$checkFilterByStatus = function() use ($activityStatus,$statusList) {
				return empty($statusList) ? true : in_array($activityStatus, $statusList);
			};

			$activitySubject = $activityRecord->get('subject');
			$checkFilterBySubject = function() use ($activitySubject,$subject) {
				return empty($subject) ? true :  (stripos($activitySubject,$subject) !== false ? true : false);
			};

			$activityType = $activityRecord->get('activitytype');
			$checkFilterByActivityType = function() use ($activityType,$type) {
				return empty($type) ? true : ($activityType==$type ? true : false);
			};

			return ($checkFilterByStatus() && $checkFilterBySubject() && $checkFilterByActivityType());
		});

		return $relatedActivityList;
	}

	/**
	 * Vijay
	 * @param Vtiger_Request $request
	 *
	 * @return array
	 */
	function getRelatedRecords(Vtiger_Request $request) {
		$parentId = $request->get('record');
		$pageNumber = $request->get('page');
		$limit = $request->get('limit');
		$relatedModuleName = $request->get('relatedModule');
		$orderBy = $request->get('orderby');
		$sortOrder = $request->get('sortorder');
		$whereCondition = $request->get('whereCondition');
		$moduleName = $request->getModule();
		//$relatedModuleInstance = Vtiger_Module_Model::getInstance($relatedModuleName);

		$parentRecordModel = Vtiger_Record_Model::getInstanceById($parentId, $moduleName);
		$relationListView = Vtiger_RelationListView_Model::getInstance($parentRecordModel, $relatedModuleName);
		$relationModel = $relationListView->getRelationModel();
		//$relatedModuleModel = $relationListView->getRelationModel()->getRelationModuleModel();

		if(!empty($orderBy)) {
			$relationListView->set('orderby', $orderBy);
			$relationListView->set('sortorder', $sortOrder);
		}

		if(empty($pageNumber)) {
			$pageNumber = 1;
		}

		$pagingModel = new Vtiger_Paging_Model();
		$pagingModel->set('page', $pageNumber);
		if(!empty($limit)) {
			$pagingModel->set('limit', $limit);
		}

		if ($whereCondition) {
			$relationListView->set('whereCondition', $whereCondition);
		}

		$models = $relationListView->getEntries($pagingModel);
		$header = $relationListView->getHeaders();

		$relatedRecords = array();
		if($request->get('statusField') && $request->get('status')) {
			foreach($models as $record) {
				if(in_array($record->get($request->get('statusField')),$request->get('status'))) {
					$relatedRecords[] = $record;
				}
			}
		} else {
			$relatedRecords = $models;
		}

		return array('records'=>$relatedRecords,'header'=>$header);
	}


}
