{strip}

    {* Module Summary View*}
    {assign var=SELECTED_FIELDS value=['sales_stage','nextstep','closingdate']}
    <div class="summaryView ">
        <div class="summaryViewHeader">
            <h4 class="display-inline-block">{vtranslate('LBL_KEY_FIELDS', $MODULE_NAME)}</h4>
        </div>
        <div class="summaryViewFields">
            <div class="recordDetails">
                {if !empty($PICKIST_DEPENDENCY_DATASOURCE)}
                    <input type="hidden" name="picklistDependency"
                           value='{Vtiger_Util_Helper::toSafeHTML($PICKIST_DEPENDENCY_DATASOURCE)}'/>
                {/if}
                <table class="summary-table no-border">
                    <tbody>
                    {foreach item=FIELDS from=$DETAIL_RECORD_STRUCTURE}
                        {foreach item=FIELD_MODEL key=FIELD_NAME from=$FIELDS}
                            {assign var=fieldDataType value=$FIELD_MODEL->getFieldDataType()}
                            {if $FIELD_MODEL->get('name')|in_array:$SELECTED_FIELDS}
                                <tr class="summaryViewEntries">
                                    <td class="fieldLabel">
                                        <label class="muted textOverflowEllipsis"
                                               title="{vtranslate($FIELD_MODEL->get('label'),$MODULE_NAME)}">
                                            {vtranslate($FIELD_MODEL->get('label'),$MODULE_NAME)}
                                            {if $FIELD_MODEL->get('uitype') eq '71' || $FIELD_MODEL->get('uitype') eq '72'}
                                                {assign var=CURRENCY_INFO value=getCurrencySymbolandCRate($USER_MODEL->get('currency_id'))}
                                                &nbsp;({$CURRENCY_INFO['symbol']})
                                            {/if}
                                        </label>
                                    </td>
                                    <td class="fieldValue">
                                        <div class="row">
                                            {assign var=DISPLAY_VALUE value="{$FIELD_MODEL->getDisplayValue($FIELD_MODEL->get("fieldvalue"))}"}
                                            <span class="value textOverflowEllipsis"
                                                  title="{strip_tags($DISPLAY_VALUE)}"
                                                  {if $FIELD_MODEL->get('uitype') eq '19' or $FIELD_MODEL->get('uitype') eq '20' or $FIELD_MODEL->get('uitype') eq '21'}style="word-wrap: break-word;"{/if}>
                            {include file=$FIELD_MODEL->getUITypeModel()->getDetailViewTemplateName()|@vtemplate_path:$MODULE_NAME FIELD_MODEL=$FIELD_MODEL USER_MODEL=$USER_MODEL MODULE=$MODULE_NAME RECORD=$RECORD}
                        </span>
                                            {if $FIELD_MODEL->isEditable() eq 'true' && $IS_AJAX_ENABLED && $FIELD_MODEL->isAjaxEditable() eq 'true' && $FIELD_MODEL->get('uitype') neq 69}
                                                <span class="hide edit">
                                {if $FIELD_MODEL->getFieldDataType() eq 'multipicklist'}
                                    <input type="hidden" class="fieldBasicData"
                                           data-name='{$FIELD_MODEL->get('name')}[]' data-type="{$fieldDataType}"
                                           data-displayvalue='{Vtiger_Util_Helper::toSafeHTML($FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue')))}'
                                           data-value="{$FIELD_MODEL->get('fieldvalue')}"/>

{else}

                                    <input type="hidden" class="fieldBasicData" data-name='{$FIELD_MODEL->get('name')}'
                                           data-type="{$fieldDataType}"
                                           data-displayvalue='{Vtiger_Util_Helper::toSafeHTML($FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue')))}'
                                           data-value="{$FIELD_MODEL->get('fieldvalue')}"/>
                                {/if}
                            </span>
                                                <span class="action"><a href="#" onclick="return false;"
                                                                        class="editAction fa fa-pencil"></a></span>
                                            {/if}
                                        </div>
                                    </td>
                                </tr>
                            {/if}
                        {/foreach}
                    {/foreach}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {* Module Summary View Ends Here*}

{/strip}

