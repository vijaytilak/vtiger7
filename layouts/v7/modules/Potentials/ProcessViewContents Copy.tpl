{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}
{strip}
    {*    <div class="summaryWidgetContainer" style="background: #fcfcfc" id="ActivityDetailHeader">
        {assign var=FIELDS_MODELS_LIST value=$MODULE_MODEL->getFields()}

        {foreach item=FIELD_MODEL from=$FIELDS_MODELS_LIST}
            {assign var=FIELD_DATA_TYPE value=$FIELD_MODEL->getFieldDataType()}
            {assign var=FIELD_NAME value={$FIELD_MODEL->getName()}}

            {if ($FIELD_MODEL->isSummaryField() || $FIELD_MODEL->isHeaderField()) && $FIELD_MODEL->isActiveField() && $RECORD->get($FIELD_NAME) && $FIELD_MODEL->isViewable()}
                {assign var=FIELD_MODEL value=$FIELD_MODEL->set('fieldvalue', $RECORD->get({$FIELD_NAME}))}
                <div class="info-row row headerAjaxEdit td">
                    <div class="col-md-6">
                        {assign var=DISPLAY_VALUE value="{$FIELD_MODEL->getDisplayValue($RECORD->get($FIELD_NAME))}"}
                        <span><label class="muted textOverflowEllipsis"
                                     title="{$FIELD_NAME}">{vtranslate($FIELD_MODEL->get('label'),$MODULE)}</label></span>
                    </div>
                    <div class="col-md-6 padding0px margin0px">
                        <div class="fieldLabel">
                    <span class="{$FIELD_NAME} value"
                          title="{vtranslate($FIELD_MODEL->get('label'),$MODULE)} : {strip_tags($DISPLAY_VALUE)}">
                        {include file=$FIELD_MODEL->getUITypeModel()->getDetailViewTemplateName()|@vtemplate_path:$MODULE_NAME FIELD_MODEL=$FIELD_MODEL MODULE=$MODULE_NAME RECORD=$RECORD}
                    </span>
                            {if $FIELD_MODEL->isEditable() eq 'true' && $LIST_PREVIEW neq 'true' && $IS_AJAX_ENABLED eq 'true'}
                                <span class="hide edit">
                            {if $FIELD_DATA_TYPE eq 'multipicklist'}
                                <input type="hidden" class="fieldBasicData" data-name='{$FIELD_MODEL->get('name')}[]'
                                       data-type="{$FIELD_MODEL->getFieldDataType()}"
                                       data-displayvalue='{Vtiger_Util_Helper::toSafeHTML($FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue')))}'
                                       data-value="{$FIELD_MODEL->get('fieldvalue')}"/>
                            {else}
                                <input type="hidden" class="fieldBasicData" data-name='{$FIELD_MODEL->get('name')}'
                                       data-type="{$FIELD_MODEL->getFieldDataType()}"
                                       data-displayvalue='{Vtiger_Util_Helper::toSafeHTML($FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue')))}'
                                       data-value="{$FIELD_MODEL->get('fieldvalue')}"/>
                            {/if}
                        </span>
                                <span class="action">
                            <a href="#" onclick="return false;" class="editAction fa fa-pencil"></a>
                        </span>
                            {/if}
                        </div>
                    </div>
                </div>
            {/if}
        {/foreach}

        <div id="headerButtonControl" style="text-align: center">
            <button data-next-action-type="Mark as Complete"
                    class="btn addButton btn-success btn-sm btn-default markAsCompleteBtn textOverflowEllipsis max-width-100"
                    moduleName="{$RECORD->getModuleName()}" recordId="{$RECORD->getId()}" type="button" sourceModule="{$SOURCE_MODULE}" sourceRecord="{$SOURCE_RECORD}"
                    href="javascript:void(0)" onclick='Vtiger_Detail_Js.markAsCompleteFromHeader(this);'>
                <i class="fa fa-check"></i>&nbsp;&nbsp;MARK AS COMPLETE
            </button>
            *}{*<button name="relationEdit" data-next-action-type="Edit" class="btn addButton btn-sm btn-default textOverflowEllipsis max-width-100" title="Edit" type="button" href="javascript:void(0)" data-url="index.php?module={$RECORD->getModuleName()}&view=Edit&record={$RECORD->getId()}&sourceModule={$SOURCE_MODULE}&sourceRecord={$SOURCE_RECORD}&relationOperation=true" >
                    <i title="Edit" class="fa fa-pencil"></i>&nbsp;&nbsp;Edit Activity
                </button>*}{*
            <button class="btn addButton btn-sm btn-default textOverflowEllipsis max-width-100" title="Edit" type="button"
                    onclick="window.open('index.php?module={$RECORD->getModuleName()}&view=Edit&record={$RECORD->getId()}&sourceModule={$SOURCE_MODULE}&sourceRecord={$SOURCE_RECORD}&relationOperation=true','_SELF')">
                <i title="Edit" class="fa fa-pencil"></i>&nbsp;&nbsp;Edit Activity
            </button>
        </div>
    </div>*}

    <button data-next-action-type="Mark as Complete" class="btn addButton btn-sm btn-default markAsCompleteBtn textOverflowEllipsis max-width-100" moduleName="{$RECORD->getModuleName()}" recordId="{$RECORD->getId()}" type="button" href="javascript:void(0)" onclick='Vtiger_Detail_Js.markAsCompleteFromHeader(this);' >
        <i class="fa fa-plus"></i>&nbsp;&nbsp;MARK AS COMPLETE
    </button>
    <button name="relationEdit" data-next-action-type="Edit" class="btn addButton btn-sm btn-default textOverflowEllipsis max-width-100" title="Edit" type="button" href="javascript:void(0)" data-url="index.php?module={$RECORD->getModuleName()}&view=Edit&record={$RECORD->getId()}" >
        <i title="Edit" class="fa fa-pencil"></i>&nbsp;&nbsp;Edit Activity
    </button>&nbsp;&nbsp;

    {assign var=FIELDS_MODELS_LIST value=$MODULE_MODEL->getFields()}

    {foreach item=FIELD_MODEL from=$FIELDS_MODELS_LIST}
        {assign var=FIELD_DATA_TYPE value=$FIELD_MODEL->getFieldDataType()}
        {assign var=FIELD_NAME value={$FIELD_MODEL->getName()}}

        {if ($FIELD_MODEL->isSummaryField() || $FIELD_MODEL->isHeaderField()) && $FIELD_MODEL->isActiveField() && $RECORD->get($FIELD_NAME) && $FIELD_MODEL->isViewable()}
            {assign var=FIELD_MODEL value=$FIELD_MODEL->set('fieldvalue', $RECORD->get({$FIELD_NAME}))}

            <div class="info-row row headerAjaxEdit td">
                <div class="col-md-6">
                    {assign var=DISPLAY_VALUE value="{$FIELD_MODEL->getDisplayValue($RECORD->get($FIELD_NAME))}"}
                    <span><label class="muted textOverflowEllipsis"
                                 title="{$FIELD_NAME}">{vtranslate($FIELD_MODEL->get('label'),$MODULE)}</label></span>
                </div>
                <div class="col-md-6 padding0px margin0px">
                    <div class="fieldLabel">
                    <span class="{$FIELD_NAME} value"
                          title="{vtranslate($FIELD_MODEL->get('label'),$MODULE)} : {strip_tags($DISPLAY_VALUE)}">
                        {include file=$FIELD_MODEL->getUITypeModel()->getDetailViewTemplateName()|@vtemplate_path:$MODULE_NAME FIELD_MODEL=$FIELD_MODEL MODULE=$MODULE_NAME RECORD=$RECORD}
                    </span>
                        {if $FIELD_MODEL->isEditable() eq 'true' && $LIST_PREVIEW neq 'true' && $IS_AJAX_ENABLED eq 'true'}
                            <span class="hide edit">
                            {if $FIELD_DATA_TYPE eq 'multipicklist'}
                                <input type="hidden" class="fieldBasicData" data-name='{$FIELD_MODEL->get('name')}[]'
                                       data-type="{$FIELD_MODEL->getFieldDataType()}"
                                       data-displayvalue='{Vtiger_Util_Helper::toSafeHTML($FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue')))}'
                                       data-value="{$FIELD_MODEL->get('fieldvalue')}"/>

                            {else}

                                <input type="hidden" class="fieldBasicData" data-name='{$FIELD_MODEL->get('name')}'
                                       data-type="{$FIELD_MODEL->getFieldDataType()}"
                                       data-displayvalue='{Vtiger_Util_Helper::toSafeHTML($FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue')))}'
                                       data-value="{$FIELD_MODEL->get('fieldvalue')}"/>
                            {/if}
                        </span>
                            <span class="action">
                            <a href="#" onclick="return false;" class="editAction fa fa-pencil"></a>
                        </span>
                        {/if}
                    </div>
                </div>
            </div>
        {/if}
    {/foreach}

{/strip}