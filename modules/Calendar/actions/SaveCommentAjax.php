<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
/*Vijay*/

class Calendar_SaveCommentAjax_Action extends Calendar_SaveAjax_Action {

	public function checkPermission(Vtiger_Request $request) {
		$moduleName = $request->getModule();
		$record = $request->get('record');

		$actionName = ($record && $request->getMode() != 'createCommentEvent') ? 'EditView' : 'CreateView';
		if(!Users_Privileges_Model::isPermitted($moduleName, $actionName, $record)) {
			throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
		}

		if(!Users_Privileges_Model::isPermitted($moduleName, 'Save', $record)) {
			throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
		}

		if ($record) {
			$activityModulesList = array('Calendar', 'Events');
			$recordEntityName = getSalesEntityType($record);
			if (!in_array($recordEntityName, $activityModulesList) || !in_array($moduleName, $activityModulesList)) {
				throw new AppException(vtranslate('LBL_PERMISSION_DENIED'));
			}
		}
	}

    function __construct() {
        $this->exposeMethod('createCommentEvent');
    }
    
    public function process(Vtiger_Request $request) {  
		$mode = $request->getMode();
		if(!empty($mode) && $this->isMethodExposed($mode)) {
			$this->invokeExposedMethod($mode, $request);
			return;
		}
	}
    
    public function createCommentEvent(Vtiger_Request $request) {
        $moduleName = $request->getModule();
        $recordId = $request->get('record');
        $recordModel = Vtiger_Record_Model::getInstanceById($recordId,$moduleName);
        $recordModel->set('mode','edit');
        $activityType = $recordModel->get('activitytype');
        $response = new Vtiger_Response();

	    $comment = $request->get('comment');
	    $description = $recordModel->get('description');
	    $recordModel->set('description',$description." [".$comment."]");
	    $result = array("valid"=>TRUE,"created"=>TRUE,"activitytype"=>$activityType);

		$_REQUEST['mode'] = 'edit';
        $recordModel->save();
        $response->setResult($result);
        $response->emit();
    }
}
