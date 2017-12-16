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
	 * @param bool $returnOption
	 *
	 * @return array
	 * @throws Exception
	 */
	public function checkProcessStageCompletion(Vtiger_Request $request, $returnOption=FALSE) {
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

		//Missing Mandatory Activities
		$missingMandatoryActivities = array();
		foreach ($configModel->getMandatoryProcessStageActivities() as $key => $process) {
			$relatedActivities = Potentials_Detail_View::getActivityRecords($request, $process['status']['onCompletion'], $process['subject'], $process['activityType']);
			$recordCount = count($relatedActivities);
			if($recordCount!=$process['count']) {
				$process['missingCount'] = $process['count']-$recordCount;
				$missingMandatoryActivities[] = $process;
			}
		}
		//Missing Activities
		$missingActivities = array();
		foreach ($configModel->getAllProcessStageActivities() as $key => $process) {
			$relatedActivities = Potentials_Detail_View::getActivityRecords($request, array_merge($process['status']['inProgress'],$process['status']['onCompletion']), $process['subject'], $process['activityType']);
			$recordCount = count($relatedActivities);
			if($recordCount!=$process['count']) {
				$process['missingCount'] = $process['count']-$recordCount;
				$missingActivities[] = $process;
			}
		}

		//Missing Mandatory Related Records
		$missingMandatoryRelatedRecords = array();
		foreach ($configModel->getMandatoryProcessStageRelatedRecords() as $key => $process) {
			$getParams = array(
				'module' => $moduleName,
				'record' => $recordId,
				'relatedModule' => $process['relatedModule'],
				'page' => '1',
				'limit' => '40',
				'status' =>  $process['status']['onCompletion'],
				'statusField' => $process['statusFieldName']
			);
			$getRequest = new Vtiger_Request($getParams);
			$models = Potentials_Detail_View::getRelatedRecords($getRequest);
			$relatedRecords = $models['records'];
			$recordCount = count($relatedRecords);
			if($recordCount!=$process['count']) {
				$process['missingCount'] = $process['count']-$recordCount;
				$missingMandatoryRelatedRecords[] = $process;
			}
		}
		//Missing Related Records
		$missingRelatedRecords = array();
		foreach ($configModel->getAllProcessStageRelatedRecords() as $key => $process) {
			$getParams = array(
				'module' => $moduleName,
				'record' => $recordId,
				'relatedModule' => $process['relatedModule'],
				'page' => '1',
				'limit' => '40',
				'status' => array_merge($process['status']['inProgress'],$process['status']['onCompletion']),
				'statusField' => $process['statusFieldName']
			);
			$getRequest = new Vtiger_Request($getParams);
			$models = Potentials_Detail_View::getRelatedRecords($getRequest);
			$relatedRecords = $models['records'];
			$recordCount = count($relatedRecords);
			if($recordCount!=$process['count']) {
				$process['missingCount'] = $process['count']-$recordCount;
				$missingRelatedRecords[] = $process;
			}
		}

		$result = array(
			"missingMandatoryFields"=>$missingMandatoryFields,
			"missingMandatoryActivities"=>$missingMandatoryActivities,
			"missingMandatoryRelatedRecords"=>$missingMandatoryRelatedRecords,
			"missingActivities"=>$missingActivities,
			"missingRelatedRecords"=>$missingRelatedRecords,
		);

		if($returnOption) {
			return $result;
		} else {
			$response = new Vtiger_Response();
			$response->setResult($result);
			$response->emit();
		}

	}


}
