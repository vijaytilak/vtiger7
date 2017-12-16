{strip}
    {if !empty($PICKIST_DEPENDENCY_DATASOURCE)}
        <input type="hidden"
               name="picklistDependency"
               value='{Vtiger_Util_Helper::toSafeHTML($PICKIST_DEPENDENCY_DATASOURCE)}'
        />
    {/if}

    {*Display Sales Stage - Non Editable*}
    {assign var=FIELD_MODEL value=$MODULE_MODEL->getField('sales_stage')}
    {assign var=FIELD_DATA_TYPE value=$FIELD_MODEL->getFieldDataType()}
    {assign var=FIELD_NAME value={$FIELD_MODEL->getName()}}
    <div class="row">
        <div class="col-md-12 padding0px">
            <div class="pull-left">
                <span class="{$FIELD_NAME} value"
                      title="{vtranslate($FIELD_MODEL->get('label'),$MODULE)} : {strip_tags($DISPLAY_VALUE)}">
                    {include file=$FIELD_MODEL->getUITypeModel()->getDetailViewTemplateName()|@vtemplate_path:$MODULE_NAME FIELD_MODEL=$FIELD_MODEL MODULE=$MODULE_NAME RECORD=$RECORD}
                </span>
                <i name="reloadHeader" class="fa fa-refresh" data-url="" type="button" href="javascript:void(0)"></i>
            </div>
            {if !$NEXT_PROCESS_STAGE|in_array:$PROCESS_LIST['Generic']['processExitStageList']}
            <div class="pull-right">
                <a href="#"
                   class="badge label-info"
                   data-opportunity-record="{$RECORD->getId()}"
                   data-current-sales-stage="{$CURRENT_PROCESS_STAGE}"
                   data-new-sales-stage="{$NEXT_PROCESS_STAGE}"
                   onclick="Vtiger_Detail_Js.checkProcessStageCompletion(this)"
                >
                    <i title="Edit" class="fa fa-flag-checkered"></i>&nbsp&nbspComplete Sales Stage
                </a>
            </div>
            {/if}
        </div>
    </div>

    {*Display Selected Fields*}
    <div class="row">
        <div class="col-md-12">
            <table class="table" style="margin-bottom: 10px">
                <thead>
                <tr>
                    <th colspan="2" class="text-muted">
                    </th>
                </tr>
                </thead>

                {foreach item=FIELDS from=$DETAIL_RECORD_STRUCTURE}
                    {foreach item=FIELD_MODEL key=FIELD_NAME from=$FIELDS}
                        {if $FIELD_MODEL->get('name')|in_array:$PROCESS_STAGE_FIELDS}
                            {*{assign var=FIELD_MODEL value=$MODULE_MODEL->getField('amount')}*}
                            {assign var=FIELD_DATA_TYPE value=$FIELD_MODEL->getFieldDataType()}
                            {assign var=FIELD_NAME value={$FIELD_MODEL->getName()}}
                            {assign var=DISPLAY_VALUE value="{$FIELD_MODEL->getDisplayValue($FIELD_MODEL->get("fieldvalue"))}"}
                            <tbody style="border: 1px solid #eee;background: #ffffff">
                            <tr class="headerAjaxEdit">
                                <td style="border-color: #eee; width: 50%">
                                    {vtranslate($FIELD_MODEL->get('label'),$MODULE)}
                                </td>
                                <td class="fieldLabel" style="border-color: #eee;">
                                        <span class="value textOverflowEllipsis"
                                              title="{strip_tags($DISPLAY_VALUE)}"
                                                {if $FIELD_MODEL->get('uitype') eq '19' or $FIELD_MODEL->get('uitype') eq '20' or $FIELD_MODEL->get('uitype') eq '21'}
                                                    style="word-wrap: break-word;"
                                                {/if}
                                        >
                                            {include file=$FIELD_MODEL->getUITypeModel()->getDetailViewTemplateName()|@vtemplate_path:$MODULE_NAME FIELD_MODEL=$FIELD_MODEL USER_MODEL=$USER_MODEL MODULE=$MODULE_NAME RECORD=$RECORD}
                                        </span>
                                    {if $FIELD_MODEL->isEditable() eq 'true' && $IS_AJAX_ENABLED && $FIELD_MODEL->isAjaxEditable() eq 'true' && $FIELD_MODEL->get('uitype') neq 69}
                                        <span class="hide edit">
                                            {if $FIELD_DATA_TYPE eq 'multipicklist'}
                                                <input type="hidden"
                                                       class="fieldBasicData"
                                                       data-name='{$FIELD_MODEL->get('name')}[]' data-type="{$FIELD_DATA_TYPE}"
                                                       data-displayvalue='{Vtiger_Util_Helper::toSafeHTML($FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue')))}'
                                                       data-value="{$FIELD_MODEL->get('fieldvalue')}"
                                                />
                                            {else}
                                                <input type="hidden"
                                                       class="fieldBasicData"
                                                       data-name='{$FIELD_MODEL->get('name')}'
                                                       data-type="{$FIELD_DATA_TYPE}"
                                                       data-displayvalue='{Vtiger_Util_Helper::toSafeHTML($FIELD_MODEL->getDisplayValue($FIELD_MODEL->get('fieldvalue')))}'
                                                       data-value="{$FIELD_MODEL->get('fieldvalue')}"
                                            />
                                            {/if}
                                            </span>
                                        <span class="action">
                                            <a href="#" onclick="return false;" class="editAction fa fa-pencil"></a>
                                        </span>
                                    {/if}
                                </td>
                            </tr>
                            </tbody>
                        {/if}
                    {/foreach}
                {/foreach}
            </table>
        </div>
    </div>


    {*Display Action Buttons*}
    {assign var=CALENDAR_MODEL value = Vtiger_Module_Model::getInstance('Calendar')}
    {if $CALENDAR_MODEL->isPermitted('CreateView') && ($MISSING_PROCESSES['missingActivities']||$MISSING_PROCESSES['missingRelatedRecords'])}
        <div class="row">
            <div class="col-md-12 textAlignCenter" style="background: inherit; border: 0px">
                {foreach item=PROCESS from=$MISSING_PROCESSES['missingActivities']}
                    {if $PROCESS['highlight'] eq TRUE}
                        {assign var=HIGHLIGHT_CLASS value = 'label-warning'}
                    {else}
                        {assign var=HIGHLIGHT_CLASS value = 'label-default'}
                    {/if}
                    <a href="#"
                       class="badge {$HIGHLIGHT_CLASS} marginLeft10px marginRight10px"
                       data-activity-type="{$PROCESS['activityType']}"
                       data-source-module="{$MODULE_NAME}"
                       data-source-record="{$RECORD->get('id')}"
                       data-ref-module="{$PROCESS['relatedModule']}"
                       data-contact-id="{$RECORD->get('contact_id')}"
                       data-subject="{end(explode( ' ', getContactName($RECORD->get('contact_id'))))} - {$PROCESS['subject']}"
                       data-status="{$PROCESS['status']['onCreate'][0]}"
                       onclick="Vtiger_Detail_Js.openQuickCreateActivity(this)"
                    ><i title="Edit" class="fa fa-plus"></i>&nbsp;&nbsp;{$PROCESS['activityType']} : {$PROCESS['subject']}</a>
                {/foreach}

                {foreach item=PROCESS from=$MISSING_PROCESSES['missingRelatedRecords']}
                    {if $PROCESS['highlight'] eq TRUE}
                        {assign var=HIGHLIGHT_CLASS value = 'label-warning'}
                    {else}
                        {assign var=HIGHLIGHT_CLASS value = 'label-default'}
                    {/if}
                    {assign var=RELATEDRECORDMODULEMODEL value=Vtiger_Module_Model::getInstance($PROCESS['relatedModule'])}
                    {assign var=MODULEBASICLINKS value=$RELATEDRECORDMODULEMODEL->getModuleBasicLinks()}
                    {assign var=PARENT_RECORD_MODEL value=Vtiger_Record_Model::getInstanceById({$RECORD->get('id')}, {$MODULE_NAME})}
                    {assign var=RELATION_LIST_VIEW value=Vtiger_RelationListView_Model::getInstance($PARENT_RECORD_MODEL, {$PROCESS['relatedModule']})}
                    {assign var=RELATION_MODEL value=$RELATION_LIST_VIEW->getRelationModel()}
                    {*Show Create SO Buttons for all the accepted quotes*}
                    {if $PROCESS['relatedModule'] eq 'SalesOrder'}
                        {foreach item=QUOTE from=$QUOTES_ACCEPTED}
                            <a href="#"
                               class="badge {$HIGHLIGHT_CLASS} marginLeft10px marginRight10px"
                               data-url="{$MODULEBASICLINKS[array_search('LBL_ADD_RECORD', array_column($MODULEBASICLINKS, 'linklabel'))]['linkurl']}"
                               data-return-mode="showRelatedList"
                               data-returntab-label="{$PROCESS['relatedModule']}"
                               data-return-record="{$RECORD->get('id')}"
                               data-return-module="{$MODULE_NAME}"
                               data-return-view="Detail"
                               data-return-related-modulename="{$PROCESS['relatedModule']}"
                               data-return-relation-id="{$RELATION_MODEL->getId()}"
                               data-relation-operation="TRUE"
                               data-app="SALES"
                               data-potential-id="{$RECORD->get('id')}"
                               data-account-id="{$RECORD->get('related_to')}"
                               data-contact-id="{$RECORD->get('contact_id')}"
                               data-quote-id="{$QUOTE->get('id')}"
                               data-subject="{end(explode( ' ', getContactName($RECORD->get('contact_id'))))} - {$PROCESS['subject']}"
                               data-status-field="{$PROCESS['statusFieldName']}"
                               data-new-status="{$PROCESS['status']['onCreate'][0]}"
                               onclick="Vtiger_Detail_Js.openCreateRelatedRecord(this)"
                               title="{$QUOTE->get('subject')} (${$QUOTE->getDisplayValue('hdnGrandTotal')})"
                            ><i title="Edit" class="fa fa-plus"></i>&nbsp;&nbsp;New {vtlib_toSingular($PROCESS['relatedModule'])} ({$QUOTE->get('quote_no')})</a>
                        {/foreach}
                    {else}
                        {*Show Create Buttons for the related Record*}
                        <a href="#"
                           class="badge {$HIGHLIGHT_CLASS} marginLeft10px marginRight10px"
                           data-url="{$MODULEBASICLINKS[array_search('LBL_ADD_RECORD', array_column($MODULEBASICLINKS, 'linklabel'))]['linkurl']}"
                           data-return-mode="showRelatedList"
                           data-returntab-label="{$PROCESS['relatedModule']}"
                           data-return-record="{$RECORD->get('id')}"
                           data-return-module="{$MODULE_NAME}"
                           data-return-view="Detail"
                           data-return-related-modulename="{$PROCESS['relatedModule']}"
                           data-return-relation-id="{$RELATION_MODEL->getId()}"
                           data-relation-operation="TRUE"
                           data-app="SALES"
                           data-potential-id="{$RECORD->get('id')}"
                           data-account-id="{$RECORD->get('related_to')}"
                           data-contact-id="{$RECORD->get('contact_id')}"
                           data-quote-id="{$RECORD->get('quote_id')}"
                           data-subject="{end(explode( ' ', getContactName($RECORD->get('contact_id'))))} - {$PROCESS['subject']}"
                           data-status-field="{$PROCESS['statusFieldName']}"
                           data-new-status="{$PROCESS['status']['onCreate'][0]}"
                           onclick="Vtiger_Detail_Js.openCreateRelatedRecord(this)"
                        ><i title="Edit" class="fa fa-plus"></i>&nbsp;&nbsp;New {vtlib_toSingular($PROCESS['relatedModule'])}</a>
                    {/if}
                {/foreach}

                {foreach item=QUOTE from=$QUOTES_PREPARED}
                    <a href="#"
                       class="badge label-success marginLeft10px marginRight10px"
                       data-source-module="{$MODULE_NAME}"
                       data-source-record-id="{$RECORD->get('id')}"
                       data-ref-module="Quotes"
                       data-ref-record-id="{$QUOTE->get('id')}"
                       onclick="Vtiger_Detail_Js.openDocumentDesigner(this)"
                       title="{$QUOTE->get('subject')} (${$QUOTE->getDisplayValue('hdnGrandTotal')})"
                    ><i title="Edit" class="fa fa-envelope-o"></i>&nbsp;&nbsp;Email Quote ({$QUOTE->get('quote_no')})</a>
                {/foreach}
            </div>
        </div>
    {/if}

{/strip}