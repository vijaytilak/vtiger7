{strip}

    {if !empty($PICKIST_DEPENDENCY_DATASOURCE)}
        <input type="hidden"
               name="picklistDependency"
               value='{Vtiger_Util_Helper::toSafeHTML($PICKIST_DEPENDENCY_DATASOURCE)}'
        />
    {/if}

    {assign var=SELECTED_FIELDS value=['sales_stage','nextstep','closingdate','amount']}
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <tr>
                    <th colspan="2" class="text-muted">
                    </th>
                </tr>
                </thead>

                {foreach item=FIELDS from=$DETAIL_RECORD_STRUCTURE}
                    {foreach item=FIELD_MODEL key=FIELD_NAME from=$FIELDS}
                        {if $FIELD_MODEL->get('name')|in_array:$SELECTED_FIELDS}
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
{/strip}

