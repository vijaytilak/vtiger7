{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*************************************************************************************}

{strip}vijayyyyyyyyyyyyyyy111
    <form id="headerForm" method="POST">
        {assign var=FIELDS_MODELS_LIST value=$MODULE_MODEL->getFields()}

        {assign var=STATUS_FIELD_MODEL value=$MODULE_MODEL->getField('sales_stage')}
        {print_r($STATUS_FIELD_MODEL->getPicklistColors())}

        {assign var=RELATEDLINK_URL value="index.php?view=Detail&mode=showProcessView&page=1&module="|cat:$MODULE_NAME|cat:"&record="|cat:$RECORD->getId()}
        {*{assign var=RELATEDLINK_URL value="index.php?view=Detail&mode=showProcessView&page=1&module="|cat:$MODULE_NAME|cat:"&record="|cat:$RECORD->getId()}*}
        {*{assign var=RELATEDLINK_URL1 value="index.php?module=Potentials&relatedModule=Contacts&view=Detail&record=6&mode=showRelatedList&relationId=31&tab_label=Contacts&app=Sales"}*}
        {assign var=RELATEDLINK_URL1 value="index.php?module=Calendar&relatedModule=Contacts&view=Edit&record=26&displayMode=overlay&relationId=31&tab_label=Contacts&app=Sales"}


        {assign var=RELATEDLINK_LABEL value="ProcessView"}
        {assign var=RELATED_TAB_LABEL value="LBL_HISTORY"}

        {assign var=CALENDAR_MODEL value = Vtiger_Module_Model::getInstance('Calendar')}
        <div class="pull-right" style="margin-top: -5px;">
            {if $CALENDAR_MODEL->isPermitted('CreateView')}
                <button data-next-action-type="Tech Support" class="btn addButton btn-sm btn-default createActivity toDotask textOverflowEllipsis max-width-100" title="{vtranslate('LBL_ADD_TASK',$MODULE_NAME)}" type="button" href="javascript:void(0)" data-url="sourceModule={$RECORD->getModuleName()}&sourceRecord={$RECORD->getId()}&relationOperation=true" >
                    <i class="fa fa-plus"></i>&nbsp;&nbsp;{vtranslate('LBL_ADD_TASK',$MODULE_NAME)}
                </button>&nbsp;&nbsp;
                <button data-next-action-type="Final Site Visit" class="btn addButton btn-sm btn-default createActivity textOverflowEllipsis max-width-100" title="{vtranslate('LBL_ADD_EVENT',$MODULE_NAME)}" data-name="Events"
                        data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)" type="button">
                    <i class="fa fa-plus"></i>&nbsp;&nbsp;{vtranslate('LBL_ADD_EVENT',$MODULE_NAME)}
                </button>

            {/if}
        </div>


        <div class="">
            <button class="btn addButton createActivity" type="button" data-next-action-type="First Site Visit" data-url="sourceModule={$RECORD->getModuleName()}&sourceRecord={$RECORD->getId()}&relationOperation=true">
                <strong>{vtranslate('LBL_ADD',$MODULE_NAME)}</strong>
            </button>
        </div>

        <div class="container-fluid padding0px margin0px">
            <div class='related-tabs row'>
                <div class="col-md-12 padding0px">
                    <ul class="crumbs">
                        <li class="tab-item step active" style="margin-right: 4px"
                            data-url="{$RELATEDLINK_URL}&tab_label={$RELATED_TAB_LABEL}&app=Sales"
                            data-label-key="{$RELATEDLINK_LABEL}" data-link-key="process">
                            <a href="{$RELATEDLINK_URL}&tab_label={$RELATEDLINK_LABEL}&app=Sales"
                               class="textOverflowEllipsis">
                                <span class="tab-label" style="display: inline-block"><strong>nahh</strong></span>
                                <span class="tag" style="display: inline-block; float: right">1</span>
                            </a>
                        </li>
                        <li class="tab-item step" style="margin-right: 4px"
                            data-url="{$RELATEDLINK_URL1}&tab_label={$RELATED_TAB_LABEL}&app=Sales"
                            data-label-key="{$RELATEDLINK_LABEL}" data-link-key="process">
                            <a href="{$RELATEDLINK_URL}&tab_label={$RELATEDLINK_LABEL}&app=Sales"
                               class="textOverflowEllipsis">
                                <span class="tab-label"><strong>nahh1</strong></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-md-12 processDetails"></div>
                </div>
            </div>

        </div>

    </form>
{/strip}