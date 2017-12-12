<?php
/*+***********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 *************************************************************************************/
//Vijay

class Potentials_Config_Model {

	public $processName;
	public $processList;
	public $currentProcess;
	public $previousProcessStage;
	public $currentProcessStage;
	public $nextProcessStage;

	public $process;


	function __construct() {
		$this->set_process_view_config();
	}

	function getConfig($methodName,$requestParams) {
		call_user_func_array(array($this,$methodName), array($requestParams));
	}

	/**
	 * Config : Process View
	 */
	function set_process_view_config() {

		$this->processList = array();

		/**GENERAL PROCESS**/
		$processName = 'Generic';
		$processStageList =  array(
			'0' => 'Opportunity Created',
			'1' => 'FSV Arranged',
			'2' => 'FSV Held',
			'3' => 'Quote Prepared',
			'4' => 'Quote Delivered',
			'5' => 'Quote Follow Up',
			'6' => 'Quote Accepted',
			'7' => 'SO Approved',
			'8' => 'FSM Done',
			'9' => 'Project Initiated',
			'10' => 'Project In Progress',
			'11' => 'Project Completed',
			'12' => 'Job Invoiced',
			'13' => 'Final Payment Received',
			'14' => 'Feedback Received',
			'15' => 'Closed Won',
		);
		$processExitStageList = array(
			'0' => 'Closed Lost',
			'1' => 'Closed Won',
		);

		$this->processName = $processName;
		$this->processList[$processName] = array();
		$this->processList[$processName]['processStageList'] = $processStageList;
		$this->processList[$processName]['processExitStageList'] = $processExitStageList;
		/**END GENERAL PROCESS**/

		//Set Default Process
		if(!$this->currentProcess) {
			$this->currentProcess = 'Generic';
		}
	}

	/**
	 * @param $currentSalesStage
	 */
	function setProcessStages($currentSalesStage) {
		$this->currentProcessStage = $currentSalesStage;
		$processStageList = $this->processList[$this->currentProcess]['processStageList'];

		$currentProcessStageKey = array_search($this->currentProcessStage, $processStageList);
		$this->previousProcessStage = $processStageList[$currentProcessStageKey-1];
		$this->nextProcessStage = $processStageList[$currentProcessStageKey+1];
		return;
	}


	/**
	 * Config : Opportunity Created
	 */
	function process_opportunity_created() {


		$this->process[] = array(
			'processType' => 'field',
			'refId' => 1,
			'dependancyOn' => NULL,
			'mandatory' => false,
			'fieldName' => 'contact_id'
		);
		$this->process[] = array(
			'processType' => 'field',
			'refId' => 2,
			'dependancyOn' => NULL,
			'mandatory' => true,
			'fieldName' => 'amount'
		);
		$this->process[] = array(
			'processType' => 'field',
			'refId' => 3,
			'dependancyOn' => NULL,
			'mandatory' => true,
			'fieldName' => 'opportunity_type'
		);
		$this->process[] = array(
			'processType' => 'field',
			'refId' => 4,
			'dependancyOn' => NULL,
			'mandatory' => true,
			'fieldName' => 'nextstep'
		);
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 5,
			'relatedModule' => 'Events',
			'count' => 1,
			'dependancyOn' => NULL,
			'mandatory' => true,
			'activityType' => 'Call',
			'subject' => 'Arrange First Site Visit',
			'statusFieldName' => 'eventstatus',
			'status' => ['Planned','Held'],
		);
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 6,
			'relatedModule' => 'Events',
			'count' => 1,
			'dependancyOn' => 5,
			'mandatory' => true,
			'activityType' => 'Meeting',
			'subject' => 'First Site Visit',
			'statusFieldName' => 'eventstatus',
			'status' => ['Held'],
		);
		$this->process[] = array(
			'processType' => 'relatedRecord',
			'refId' => 7,
			'relatedModule' => 'Quotes',
			'count' => 2,
			'dependancyOn' => 6,
			'dependancyCondition' => 'function::::checkToShowCreateQuoteBtn, array()',
			'mandatory' => true,
			'statusFieldName' => 'quotestage',
			'status' => ['Delivered'],
		);
		$this->process[] = array(
			'processType' => 'relatedRecord',
			'refId' => 8,
			'relatedModule' => 'SalesOrder',
			'count' => 1,
			'dependancyOn' => 7,
			'dependancyCondition' => 'function::::isQuoteStageAccepted, array("count" => 1)',
			'mandatory' => true,
			'statusFieldName' => 'sostatus',
			'status' => ['Approved'],
		);

	}

	/**
	 * Config : FSV Arranged
	 */
	function process_fsv_arranged() {

		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 6,
			'relatedModule' => 'Events',
			'count' => 1,
			'dependancyOn' => 5,
			'mandatory' => true,
			'activityType' => 'Meeting',
			'subject' => 'First Site Visit',
			'statusFieldName' => 'eventstatus',
			'status' => ['Planned','Held'],
		);
	}

	/**
	 * Config : FSV Held
	 */
	function process_fsv_held() {

		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 1,
			'relatedModule' => 'Calendar',
			'count' => 1,
			'dependancyOn' => NULL,
			'mandatory' => false,
			'activityType' => 'Todo',
			'subject' => 'Get Tech Support',
			'statusFieldName' => 'status',
			'status' => ['Planned','Completed'],
		);
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 2,
			'relatedModule' => 'Calendar',
			'count' => 1,
			'dependancyOn' => NULL,
			'mandatory' => true,
			'activityType' => 'Todo',
			'subject' => 'Prepare Quote',
			'statusFieldName' => 'status',
			'status' => ['Planned','Completed'],
		);
	}


	function filterAllFieldsFromConfig($process) {
		return ($process['processType']=='field');
	}

	function filterMandatoryFieldsFromConfig($process) {
		return (($process['processType']=='field')&&($process['mandatory']));
	}

	function filterAllActivitiesFromConfig($process) {
		return ($process['processType']=='relatedActivity');
	}

	function filterMandatoryActivitiesFromConfig($process) {
		return (($process['processType']=='relatedActivity')&&($process['mandatory']));
	}

	function filterAllRelatedRecordsFromConfig($process) {
		return ($process['processType']=='relatedRecord');
	}

	function filterMandatoryRelatedRecordsFromConfig($process) {
		return (($process['processType']=='relatedRecord')&&($process['mandatory']));
	}


	function  mapFieldName($process) {
		return $process['fieldName'];
	}

	function  mapSubject($process) {
		return $process['subject'];
	}


	function getAllProcessStageFields() {
		return array_map(array($this, 'mapFieldName'), array_filter($this->process,array($this, 'filterAllFieldsFromConfig')));
	}

	function getMandatoryProcessStageFields() {
		return array_map(array($this, 'mapFieldName'), array_filter($this->process,array($this, 'filterMandatoryFieldsFromConfig')));
	}

	function getMandatoryProcessStageActivities() {
		return array_filter($this->process,array($this, 'filterMandatoryActivitiesFromConfig'));
	}

	function getAllProcessStageActivities() {
		return array_filter($this->process,array($this, 'filterAllActivitiesFromConfig'));
	}

	function getMandatoryProcessStageRelatedRecords() {
		//return array_map(array($this, 'mapSubject'), array_filter($this->process,array($this, 'filterMandatoryRelatedRecordsFromConfig')));
		return array_filter($this->process,array($this, 'filterMandatoryRelatedRecordsFromConfig'));
	}

	function getAllProcessStageRelatedRecords() {
		return array_filter($this->process,array($this, 'filterAllRelatedRecordsFromConfig'));
	}
}