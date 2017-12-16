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
			'5' => 'Quote Accepted',
			'6' => 'SO Approved',
			'7' => 'FSM Done',
			'8' => 'Project Initiated',
			'9' => 'Project In Progress',
			'10' => 'Project Completed',
			'11' => 'Job Invoiced',
			'12' => 'Final Payment Received',
			'13' => 'Feedback Received',
			'14' => 'Closed Won',
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
			'mandatory' => false,
			'activityType' => 'Call',
			'subject' => 'Arrange First Site Visit',
			'statusFieldName' => 'eventstatus',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Held'],
			),
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
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Held'],
			),
		);
		$this->process[] = array(
			'processType' => 'relatedRecord',
			'refId' => 7,
			'relatedModule' => 'Quotes',
			'count' => 2,
			'dependancyOn' => 6,
			'dependancyCondition' => '',
			'mandatory' => true,
			'statusFieldName' => 'quotestage',
			'status' => array(
				'onCreate' => ['Created'],
				'inProgress' => ['Prepared'],
				'onCompletion' => ['Delivered'],
			),
		);
		$this->process[] = array(
			'processType' => 'relatedRecord',
			'refId' => 8,
			'relatedModule' => 'SalesOrder',
			'count' => 1,
			'dependancyOn' => 7,
			'dependancyCondition' => '',
			'mandatory' => true,
			'statusFieldName' => 'sostatus',
			'status' => array(
				'onCreate' => ['Created'],
				'inProgress' => ['Created'],
				'onCompletion' => ['Approved'],
			),
		);

	}

	/**
	 * Config : FSV Arranged
	 */
	function process_fsv_arranged() {

		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 1,
			'relatedModule' => 'Events',
			'count' => 1,
			'dependancyOn' => 5,
			'mandatory' => true,
			'activityType' => 'Meeting',
			'subject' => 'First Site Visit',
			'statusFieldName' => 'eventstatus',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Held'],
			),
		);
	}

	/**
	 * Config : FSV Held
	 */
	function process_fsv_held() {
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 3,
			'relatedModule' => 'Calendar',
			'count' => 1,
			'dependancyOn' => NULL,
			'mandatory' => false,
			'activityType' => 'Todo',
			'subject' => 'Get Tech Support',
			'statusFieldName' => 'status',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Completed'],
			),
		);
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 1,
			'relatedModule' => 'Calendar',
			'count' => 1,
			'dependancyOn' => NULL,
			'mandatory' => true,
			'activityType' => 'Todo',
			'subject' => 'Prepare a Quote',
			'statusFieldName' => 'status',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Completed'],
			),
		);
		$this->process[] = array(
			'processType' => 'relatedRecord',
			'refId' => 2,
			'relatedModule' => 'Quotes',
			'count' => 2,
			'dependancyOn' => 6,
			'dependancyCondition' => '',
			'mandatory' => true,
			'statusFieldName' => 'quotestage',
			'status' => array(
				'onCreate' => ['Created'],
				'inProgress' => [],
				'onCompletion' => ['Prepared','Delivered','Accepted'],
			),
		);

	}

	/**
	 * Config : Quote Prepared
	 */
	function process_quote_prepared() {
		$this->process[] = array(
			'processType' => 'field',
			'refId' => 1,
			'dependancyOn' => NULL,
			'mandatory' => true,
			'fieldName' => 'cf_891'
		);
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 2,
			'relatedModule' => 'Events',
			'count' => 1,
			'dependancyOn' => 1,
			'dependancyCondition' => 'function::::isQuoteDeliveryMethodPresentation, array()',
			'mandatory' => false,
			'activityType' => 'Call',
			'subject' => 'Arrange Quote Presentation',
			'statusFieldName' => 'eventstatus',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Held'],
			),
		);
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 3,
			'relatedModule' => 'Events',
			'count' => 1,
			'dependancyOn' => 1,
			'mandatory' => false,
			'activityType' => 'Meeting',
			'subject' => 'Quote Presentation',
			'statusFieldName' => 'eventstatus',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Held'],
			),
		);
		$this->process[] = array(
			'processType' => 'relatedRecord',
			'refId' => 4,
			'relatedModule' => 'Quotes',
			'count' => 1,
			'dependancyOn' => 6,
			'dependancyCondition' => '',
			'mandatory' => true,
			'statusFieldName' => 'quotestage',
			'status' => array(
				'onCreate' => ['Created'],
				'inProgress' => [],
				'onCompletion' => ['Delivered'],
			),
		);

	}

	/**
	 * Config : Quote Delivered
	 */
	function process_quote_delivered() {
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 1,
			'relatedModule' => 'Events',
			'count' => 1,
			'dependancyOn' => NULL,
			'dependancyCondition' => '',
			'mandatory' => false,
			'activityType' => 'Call',
			'subject' => 'Quote Follow Up',
			'statusFieldName' => 'eventstatus',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Held'],
			),
		);
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 2,
			'relatedModule' => 'Events',
			'count' => 1,
			'dependancyOn' => 1,
			'mandatory' => false,
			'activityType' => 'Meeting',
			'subject' => 'Quote Follow Up',
			'statusFieldName' => 'eventstatus',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Held'],
			),
		);
		$this->process[] = array(
			'processType' => 'relatedRecord',
			'refId' => 3,
			'relatedModule' => 'Quotes',
			'count' => 1,
			'dependancyOn' => 6,
			'dependancyCondition' => '',
			'mandatory' => true,
			'statusFieldName' => 'quotestage',
			'status' => array(
				'onCreate' => ['Created'],
				'inProgress' => [],
				'onCompletion' => ['Accepted'],
			),
		);

	}

	/**
	 * Config : Quote Accepted
	 */
	function process_quote_accepted() {
		$this->process[] = array(
			'processType' => 'field',
			'refId' => 1,
			'dependancyOn' => NULL,
			'mandatory' => true,
			'fieldName' => 'cf_893'
		);
		$this->process[] = array(
			'processType' => 'relatedRecord',
			'refId' => 2,
			'relatedModule' => 'SalesOrder',
			'count' => 1,
			'dependancyOn' => NULL,
			'dependancyCondition' => '',
			'mandatory' => true,
			'statusFieldName' => 'sostatus',
			'status' => array(
				'onCreate' => ['Created'],
				'inProgress' => ['Created'],
				'onCompletion' => ['Approved'],
			),
		);

	}

	/**
	 * Config : SO Approved
	 */
	function process_so_approved() {
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 3,
			'relatedModule' => 'Calendar',
			'count' => 1,
			'dependancyOn' => NULL,
			'mandatory' => false,
			'activityType' => 'Todo',
			'subject' => 'Get Tech Support',
			'statusFieldName' => 'status',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Completed'],
			),
		);
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 1,
			'relatedModule' => 'Events',
			'count' => 1,
			'dependancyOn' => NULL,
			'mandatory' => false,
			'activityType' => 'Call',
			'subject' => 'Arrange Final Site Measurement',
			'statusFieldName' => 'eventstatus',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Held'],
			),
		);
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 2,
			'relatedModule' => 'Events',
			'count' => 1,
			'dependancyOn' => 5,
			'mandatory' => true,
			'activityType' => 'Meeting',
			'subject' => 'Final Site Measurement',
			'statusFieldName' => 'eventstatus',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Held'],
			),
		);

	}

	/**
	 * Config : SO Approved
	 */
	function process_fsm_done() {
		$this->process[] = array(
			'processType' => 'relatedActivity',
			'refId' => 3,
			'relatedModule' => 'Calendar',
			'count' => 1,
			'dependancyOn' => NULL,
			'mandatory' => false,
			'activityType' => 'Todo',
			'subject' => 'Write Up Job',
			'statusFieldName' => 'status',
			'status' => array(
				'onCreate' => ['Planned'],
				'inProgress' => ['Planned'],
				'onCompletion' => ['Completed'],
			),
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