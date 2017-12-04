{strip}
    {assign var=START_DATE value=$RECORD->get('date_start')}
    {assign var=START_TIME value=$RECORD->get('time_start')}
    {assign var=EDITVIEW_PERMITTED value=isPermitted('Calendar', 'EditView', $RECORD->get('crmid'))}
    {assign var=DETAILVIEW_PERMITTED value=isPermitted('Calendar', 'DetailView', $RECORD->get('crmid'))}
    {if $RECORD->get('activitytype') eq 'Task'}
        {assign var=MODULE_NAME value=$RECORD->getModuleName()}
    {else}
        {assign var=MODULE_NAME value="Events"}
    {/if}
    {if $ACTIVITY_OVERDUE_STATUS eq 'Overdue'}
        {assign var=OVERDUE_CLASS value="alert-danger"}
        {assign var=OVERDUE_BORDER_COLOR value="#ebccd1"}
        {assign var=OVERDUE_BG_COLOR value="#f2dede"}
    {else}
        {assign var=OVERDUE_CLASS value="alert-success"}
        {assign var=OVERDUE_BORDER_COLOR value="#d6e9c6"}
        {assign var=OVERDUE_BG_COLOR value="#dff0d8"}
    {/if}


    <div class="panel panel-default marginTop10px" style="border: 1px solid {$OVERDUE_BORDER_COLOR}; border-left: 20px solid {$OVERDUE_BORDER_COLOR}">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-1">
                    <span class='vicon-{strtolower($RECORD->get('activitytype'))}'></span>
                </div>
                <div class="col-md-5">

                    <span>
                        <strong title="{Vtiger_Util_Helper::formatDateTimeIntoDayString("$START_DATE $START_TIME")}">{Vtiger_Util_Helper::formatDateTimeIntoDayString("$START_DATE $START_TIME")}</strong><br />
                        {if $DETAILVIEW_PERMITTED == 'yes'}<a href="{$RECORD->getDetailViewUrl()}">{$RECORD->get('subject')}</a>{else}{$RECORD->get('subject')}{/if}<br />
                        Due : <span class="{$OVERDUE_CLASS}">{$ACTIVITY_OVERDUE_STATUS} [{$ACTIVITY_DATE_DIFF}]</span>
                        <br />
                    </span>
                </div>
                <div class="col-md-6 padding10">
                    <div class="btn-group btn-group-sm">

                        <button class="btn btn-success"
                                data-next-action-type="Mark as Complete"
                                data-activity-record="{$RECORD->getId()}"
                                data-activity-module="{$RECORD->getModuleName()}"
                                data-source-module="{$SOURCE_MODULE}"
                                data-source-record="{$SOURCE_RECORD}"
                                onclick="Vtiger_Detail_Js.markAsCompleteFromHeader(this);"
                                href="javascript:void(0)"
                        >
                            <i class="fa fa-check"></i>&nbsp;&nbsp;MARK AS COMPLETE
                        </button>
                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle">
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <a data-next-action-type="Mark as Complete"
                                   data-activity-record="{$RECORD->getId()}"
                                   data-activity-module="{$RECORD->getModuleName()}"
                                   data-source-module="{$SOURCE_MODULE}"
                                   data-source-record="{$SOURCE_RECORD}"
                                   onclick="Vtiger_Detail_Js.markAsCompleteFromHeader(this);"
                                   href="javascript:void(0)"><i class="fa fa-check"></i>&nbsp;&nbsp;Mark As Complete</a>
                            </li>
                            <li>
                                <a onclick="window.open('index.php?module={$RECORD->getModuleName()}&view=Edit&record={$RECORD->getId()}&sourceModule={$SOURCE_MODULE}&sourceRecord={$SOURCE_RECORD}&relationOperation=true','_SELF')"
                                   href="#"><i title="Edit" class="fa fa-pencil"></i>&nbsp;&nbsp;Edit Activity</a>
                            </li>
                            <li class="divider">
                            </li>
                            <li class="disabled label label-primary" style="font-size:inherit">
                                <a href="#"><strong>SELECT RESCHEDULE REASON</strong></a>
                            </li>
                            <li class="divider">
                            </li>
                            {if $RECORD->get('activitytype') eq 'Call'}
                                <li>
                                    <a href="#"
                                       data-activity-record="{$RECORD->getId()}"
                                       data-activity-type="{$RECORD->get('activitytype')}"
                                       data-activity-module="{$RECORD->getModuleName()}"
                                       data-source-module="{$SOURCE_MODULE}"
                                       data-source-record="{$SOURCE_RECORD}"
                                       data-ref-module="{$MODULE_NAME}"
                                       data-contact-id="{$CONTACT_ID}"
                                       data-subject="{$RECORD->get('subject')}"
                                       data-reschedule-reason="Phone number unreachable"
                                       onclick="Vtiger_Detail_Js.rescheduleActivity(this)"
                                    ><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Phone number unreachable.</a>
                                </li>
                                <li>
                                    <a href="#"
                                       data-activity-record="{$RECORD->getId()}"
                                       data-activity-type="{$RECORD->get('activitytype')}"
                                       data-activity-module="{$RECORD->getModuleName()}"
                                       data-source-module="{$SOURCE_MODULE}"
                                       data-source-record="{$SOURCE_RECORD}"
                                       data-ref-module="{$MODULE_NAME}"
                                       data-contact-id="{$CONTACT_ID}"
                                       data-subject="{$RECORD->get('subject')}"
                                       data-reschedule-reason="Call unanswered."
                                       onclick="Vtiger_Detail_Js.rescheduleActivity(this)"
                                    ><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Call unanswered.</a>
                                </li>
                                <li>
                                    <a href="#"
                                       data-activity-record="{$RECORD->getId()}"
                                       data-activity-type="{$RECORD->get('activitytype')}"
                                       data-activity-module="{$RECORD->getModuleName()}"
                                       data-source-module="{$SOURCE_MODULE}"
                                       data-source-record="{$SOURCE_RECORD}"
                                       data-ref-module="{$MODULE_NAME}"
                                       data-contact-id="{$CONTACT_ID}"
                                       data-subject="{$RECORD->get('subject')}"
                                       data-reschedule-reason="Call unanswered. Left a voice message."
                                       onclick="Vtiger_Detail_Js.rescheduleActivity(this)"
                                    ><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Call unanswered. Left a voice message.</a>
                                </li>
                                <li>
                                    <a href="#"
                                       data-activity-record="{$RECORD->getId()}"
                                       data-activity-type="{$RECORD->get('activitytype')}"
                                       data-activity-module="{$RECORD->getModuleName()}"
                                       data-source-module="{$SOURCE_MODULE}"
                                       data-source-record="{$SOURCE_RECORD}"
                                       data-ref-module="{$MODULE_NAME}"
                                       data-contact-id="{$CONTACT_ID}"
                                       data-subject="{$RECORD->get('subject')}"
                                       data-reschedule-reason="Call answered. But unavailable to talk."
                                       onclick="Vtiger_Detail_Js.rescheduleActivity(this)"
                                    ><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Call answered. But unavailable to talk.</a>
                                </li>
                                <li>
                                    <a href="#"
                                       data-activity-record="{$RECORD->getId()}"
                                       data-activity-type="{$RECORD->get('activitytype')}"
                                       data-activity-module="{$RECORD->getModuleName()}"
                                       data-source-module="{$SOURCE_MODULE}"
                                       data-source-record="{$SOURCE_RECORD}"
                                       data-ref-module="{$MODULE_NAME}"
                                       data-contact-id="{$CONTACT_ID}"
                                       data-subject="{$RECORD->get('subject')}"
                                       data-reschedule-reason="Other reason."
                                       onclick="Vtiger_Detail_Js.rescheduleActivity(this)"
                                    ><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Other reason.</a>
                                </li>
                            {/if}
                            {if $RECORD->get('activitytype') eq 'Meeting'}
                                <li>
                                    <a href="#"
                                       data-activity-record="{$RECORD->getId()}"
                                       data-activity-type="{$RECORD->get('activitytype')}"
                                       data-activity-module="{$RECORD->getModuleName()}"
                                       data-source-module="{$SOURCE_MODULE}"
                                       data-source-record="{$SOURCE_RECORD}"
                                       data-ref-module="{$MODULE_NAME}"
                                       data-contact-id="{$CONTACT_ID}"
                                       data-subject="{$RECORD->get('subject')}"
                                       data-reschedule-reason="Customer - No Show."
                                       onclick="Vtiger_Detail_Js.rescheduleActivity(this)"
                                    ><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Customer - No Show.</a>
                                </li>
                                <li>
                                    <a href="#"
                                       data-activity-record="{$RECORD->getId()}"
                                       data-activity-type="{$RECORD->get('activitytype')}"
                                       data-activity-module="{$RECORD->getModuleName()}"
                                       data-source-module="{$SOURCE_MODULE}"
                                       data-source-record="{$SOURCE_RECORD}"
                                       data-ref-module="{$MODULE_NAME}"
                                       data-contact-id="{$CONTACT_ID}"
                                       data-subject="{$RECORD->get('subject')}"
                                       data-reschedule-reason="Other reason."
                                       onclick="Vtiger_Detail_Js.rescheduleActivity(this)"
                                    ><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Other.</a>
                                </li>
                            {/if}
                            {if $RECORD->get('activitytype') eq 'Task'}
                                <li>
                                    <a href="#"><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Waiting for other people.</a>
                                </li>
                                <li>
                                    <a href="#"><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Other.</a>
                                </li>
                            {/if}

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/strip}

