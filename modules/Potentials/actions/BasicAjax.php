<?php
/*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************/
//Vijay

class Potentials_BasicAjax_Action extends Vtiger_Action_Controller {

	function checkPermission(Vtiger_Request $request) {
		return;
	}

	function __construct() {
		$this->exposeMethod('updateSalesStage');
		$this->exposeMethod('checkProcessStageCompletion');
	}

	public function process(Vtiger_Request $request) {
		$mode = $request->getMode();
		if(!empty($mode) && $this->isMethodExposed($mode)) {
			$this->invokeExposedMethod($mode, $request);
			return;
		}

	}

	/** Vijay
	 * @param Vtiger_Request $request
	 */
	public function updateSalesStage(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$recordId = $request->get('record');
		$recordModel = Vtiger_Record_Model::getInstanceById($recordId,$moduleName);
		$recordModel->set('mode','edit');

		$oldSalesStage = $recordModel->get('sales_stage');
		$newSalesStage = $request->get('newSalesStage');

		$response = new Vtiger_Response();
		$recordModel->set('sales_stage',$newSalesStage);
		$result = array("valid"=>TRUE,"updatedSalesStage"=>TRUE,"oldSalesStage"=>$oldSalesStage,"newSalesStage"=>$newSalesStage);

		$_REQUEST['mode'] = 'edit';
		$recordModel->save();
		$response->setResult($result);
		$response->emit();
	}


	/**
	 * Vijay
	 * @param Vtiger_Request $request
	 *
	 * @throws Exception
	 */
	public function checkProcessStageCompletion(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$recordId = $request->get('record');
		$recordModel = Vtiger_Record_Model::getInstanceById($recordId,$moduleName);
		$moduleModel = $recordModel->getModule();
		$currentSalesStage = $recordModel->get('sales_stage');
		$salesStageProcessFunctionName = 'process_'.strtolower(str_ireplace(" ","_",$currentSalesStage));

		/*********************************READ CONFIG*******************************/
		$configModel = new Potentials_Config_Model;
		$configModel->setProcessStages($recordModel->get('sales_stage'));
		call_user_func_array(array($configModel,$salesStageProcessFunctionName), array());
		/*********************************END CONFIG*****************************/

		//Check if Mandatory Fields are Filled in
		$missingMandatoryFields = array();
		foreach ($configModel->getMandatoryProcessStageFields() as $key => $fieldName) {
			$fieldModel = $moduleModel->getField($fieldName);
			if(($fieldModel->get('uitype') == '71') && ($recordModel->get($fieldName)==0)) {
				//Currency Field
				$missingMandatoryFields[] = $fieldModel->get('label');
			} elseif(!$recordModel->get($fieldName)) {
				//All Other Field Types
				$missingMandatoryFields[] = $fieldModel->get('label');
			}
		}

		//Check if Mandatory Activities are held
		$missingMandatoryActivities = array();
		foreach ($configModel->getMandatoryProcessStageActivities() as $key => $process) {
			$relatedActivities = Potentials_Detail_View::getActivityRecords($request, $process['status'], $process['subject'], $process['activityType']);
			$recordCount = count($relatedActivities);
			if($recordCount!=$process['count']) {
				$process['missingCount'] = $process['count']-$recordCount;
				$missingMandatoryActivities[] = $process;
			}
		}


		$response = new Vtiger_Response();
		$result = array(
			"checked"=>TRUE,
		    "missingMandatoryFields"=>$missingMandatoryFields,
			"missingMandatoryActivities"=>$missingMandatoryActivities,
			"getMandatoryProcessStageActivities"=>$configModel->getMandatoryProcessStageActivities()
		);

		$response->setResult($result);
		$response->emit();
	}

	/**
	 * @param Vtiger_Request $request
	 *
	 * @return mixed
	 * @throws AppException
	 */
	function showRelatedRecords(Vtiger_Request $request) {
		$parentId = $request->get('record');
		$pageNumber = $request->get('page');
		$limit = $request->get('limit');
		$relatedModuleName = $request->get('relatedModule');
		$moduleName = $request->getModule();

		if(empty($pageNumber)) {
			$pageNumber = 1;
		}

		$pagingModel = new Vtiger_Paging_Model();
		$pagingModel->set('page', $pageNumber);
		if(!empty($limit)) {
			$pagingModel->set('limit', $limit);
		}

		$parentRecordModel = Vtiger_Record_Model::getInstanceById($parentId, $moduleName);
		$relationListView = Vtiger_RelationListView_Model::getInstance($parentRecordModel, $relatedModuleName);
		$models = $relationListView->getEntries($pagingModel);
		$header = $relationListView->getHeaders();

		$viewer = $this->getViewer($request);
		$viewer->assign('MODULE' , $moduleName);
		$viewer->assign('RELATED_RECORDS' , $models);
		$viewer->assign('RELATED_HEADERS', $header);
		$viewer->assign('RELATED_MODULE' , $relatedModuleName);
		$viewer->assign('PAGING_MODEL', $pagingModel);

		return $viewer->view('SummaryWidgets.tpl', $moduleName, 'true');
	}

}
