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
    {if $CALENDAR_MODEL->isPermitted('CreateView') && $SHOW_CREATE_ACTIVITY_BUTTON}
        <div class="row">
            <div class="col-md-12 textAlignCenter" style="background: inherit; border: 0px">
                <a href="#"
                   class="badge label-warning"
                   data-activity-type="Call"
                   data-source-module="{$MODULE_NAME}"
                   data-source-record="{$RECORD->get('id')}"
                   data-ref-module="Events"
                   data-contact-id="{$RECORD->get('contact_id')}"
                   data-subject="{end(explode( ' ', getContactName($RECORD->get('contact_id'))))} - Arrange First Site Visit"
                   onclick="Vtiger_Detail_Js.openQuickCreateActivity(this)"
                ><i title="Edit" class="fa fa-plus"></i>&nbsp;&nbsp;Schedule a Call : Arrange First Site Visit</a>
            </div>
        </div>
    {/if}

{/strip}