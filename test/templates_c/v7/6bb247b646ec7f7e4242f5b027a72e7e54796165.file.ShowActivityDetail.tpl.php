<?php /* Smarty version Smarty-3.1.7, created on 2017-10-27 08:36:28
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Potentials\ShowActivityDetail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1514459e52d0999aff5-43006423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb247b646ec7f7e4242f5b027a72e7e54796165' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Potentials\\ShowActivityDetail.tpl',
      1 => 1509093382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1514459e52d0999aff5-43006423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59e52d09b8bc1',
  'variables' => 
  array (
    'RECORD' => 0,
    'ACTIVITY_OVERDUE_STATUS' => 0,
    'OVERDUE_BORDER_COLOR' => 0,
    'DETAILVIEW_PERMITTED' => 0,
    'OVERDUE_CLASS' => 0,
    'ACTIVITY_DATE_DIFF' => 0,
    'SOURCE_MODULE' => 0,
    'SOURCE_RECORD' => 0,
    'MODULE_NAME' => 0,
    'CONTACT_ID' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e52d09b8bc1')) {function content_59e52d09b8bc1($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['START_DATE'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->get('date_start'), null, 0);?><?php $_smarty_tpl->tpl_vars['START_TIME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->get('time_start'), null, 0);?><?php $_smarty_tpl->tpl_vars['EDITVIEW_PERMITTED'] = new Smarty_variable(isPermitted('Calendar','EditView',$_smarty_tpl->tpl_vars['RECORD']->value->get('crmid')), null, 0);?><?php $_smarty_tpl->tpl_vars['DETAILVIEW_PERMITTED'] = new Smarty_variable(isPermitted('Calendar','DetailView',$_smarty_tpl->tpl_vars['RECORD']->value->get('crmid')), null, 0);?><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype')=='Task'){?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->getModuleName(), null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_variable("Events", null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['ACTIVITY_OVERDUE_STATUS']->value=='Overdue'){?><?php $_smarty_tpl->tpl_vars['OVERDUE_CLASS'] = new Smarty_variable("alert-danger", null, 0);?><?php $_smarty_tpl->tpl_vars['OVERDUE_BORDER_COLOR'] = new Smarty_variable("#ebccd1", null, 0);?><?php $_smarty_tpl->tpl_vars['OVERDUE_BG_COLOR'] = new Smarty_variable("#f2dede", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['OVERDUE_CLASS'] = new Smarty_variable("alert-success", null, 0);?><?php $_smarty_tpl->tpl_vars['OVERDUE_BORDER_COLOR'] = new Smarty_variable("#d6e9c6", null, 0);?><?php $_smarty_tpl->tpl_vars['OVERDUE_BG_COLOR'] = new Smarty_variable("#dff0d8", null, 0);?><?php }?><div class="panel panel-default marginTop10px" style="border: 1px solid <?php echo $_smarty_tpl->tpl_vars['OVERDUE_BORDER_COLOR']->value;?>
; border-left: 20px solid <?php echo $_smarty_tpl->tpl_vars['OVERDUE_BORDER_COLOR']->value;?>
"><div class="panel-body"><div class="row"><div class="col-md-1"><span class='vicon-<?php echo strtolower($_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype'));?>
'></span></div><div class="col-md-5"><span><strong title="<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString(($_smarty_tpl->tpl_vars['START_DATE']->value)." ".($_smarty_tpl->tpl_vars['START_TIME']->value));?>
"><?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString(($_smarty_tpl->tpl_vars['START_DATE']->value)." ".($_smarty_tpl->tpl_vars['START_TIME']->value));?>
</strong><br /><?php if ($_smarty_tpl->tpl_vars['DETAILVIEW_PERMITTED']->value=='yes'){?><a href="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
</a><?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
<?php }?><br />Due : <span class="<?php echo $_smarty_tpl->tpl_vars['OVERDUE_CLASS']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ACTIVITY_OVERDUE_STATUS']->value;?>
 [<?php echo $_smarty_tpl->tpl_vars['ACTIVITY_DATE_DIFF']->value;?>
]</span><br /></span></div><div class="col-md-6 padding10"><div class="btn-group btn-group-sm"><button class="btn btn-success"data-next-action-type="Mark as Complete"data-activity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"data-activity-module="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
"data-source-module="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"data-source-record="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"onclick="Vtiger_Detail_Js.markAsCompleteFromHeader(this);"href="javascript:void(0)"><i class="fa fa-check"></i>&nbsp;&nbsp;MARK AS COMPLETE</button><button data-toggle="dropdown" class="btn btn-default dropdown-toggle"><span class="caret"></span></button><ul class="dropdown-menu"><li><a data-next-action-type="Mark as Complete"data-activity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"data-activity-module="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
"data-source-module="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"data-source-record="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"onclick="Vtiger_Detail_Js.markAsCompleteFromHeader(this);"href="javascript:void(0)"><i class="fa fa-check"></i>&nbsp;&nbsp;Mark As Complete</a></li><li><a onclick="window.open('index.php?module=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
&view=Edit&record=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
&sourceModule=<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
&sourceRecord=<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
&relationOperation=true','_SELF')"href="#"><i title="Edit" class="fa fa-pencil"></i>&nbsp;&nbsp;Edit Activity</a></li><li class="divider"></li><li class="disabled label label-primary" style="font-size:inherit"><a href="#"><strong>SELECT RESCHEDULE REASON</strong></a></li><li class="divider"></li><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype')=='Call'){?><li><a href="#"data-activity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"data-activity-type="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype');?>
"data-activity-module="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
"data-source-module="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"data-source-record="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"data-ref-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-contact-id="<?php echo $_smarty_tpl->tpl_vars['CONTACT_ID']->value;?>
"data-subject="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
"data-reschedule-reason="Phone number unreachable"onclick="Vtiger_Detail_Js.rescheduleActivity(this)"><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Phone number unreachable.</a></li><li><a href="#"data-activity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"data-activity-type="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype');?>
"data-activity-module="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
"data-source-module="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"data-source-record="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"data-ref-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-contact-id="<?php echo $_smarty_tpl->tpl_vars['CONTACT_ID']->value;?>
"data-subject="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
"data-reschedule-reason="Call unanswered."onclick="Vtiger_Detail_Js.rescheduleActivity(this)"><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Call unanswered.</a></li><li><a href="#"data-activity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"data-activity-type="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype');?>
"data-activity-module="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
"data-source-module="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"data-source-record="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"data-ref-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-contact-id="<?php echo $_smarty_tpl->tpl_vars['CONTACT_ID']->value;?>
"data-subject="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
"data-reschedule-reason="Call unanswered. Left a voice message."onclick="Vtiger_Detail_Js.rescheduleActivity(this)"><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Call unanswered. Left a voice message.</a></li><li><a href="#"data-activity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"data-activity-type="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype');?>
"data-activity-module="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
"data-source-module="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"data-source-record="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"data-ref-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-contact-id="<?php echo $_smarty_tpl->tpl_vars['CONTACT_ID']->value;?>
"data-subject="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
"data-reschedule-reason="Call answered. But unavailable to talk."onclick="Vtiger_Detail_Js.rescheduleActivity(this)"><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Call answered. But unavailable to talk.</a></li><li><a href="#"data-activity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"data-activity-type="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype');?>
"data-activity-module="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
"data-source-module="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"data-source-record="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"data-ref-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-contact-id="<?php echo $_smarty_tpl->tpl_vars['CONTACT_ID']->value;?>
"data-subject="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
"data-reschedule-reason="Other reason."onclick="Vtiger_Detail_Js.rescheduleActivity(this)"><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Other reason.</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype')=='Meeting'){?><li><a href="#"data-activity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"data-activity-type="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype');?>
"data-activity-module="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
"data-source-module="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"data-source-record="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"data-ref-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-contact-id="<?php echo $_smarty_tpl->tpl_vars['CONTACT_ID']->value;?>
"data-subject="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
"data-reschedule-reason="Customer - No Show."onclick="Vtiger_Detail_Js.rescheduleActivity(this)"><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Customer - No Show.</a></li><li><a href="#"data-activity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"data-activity-type="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype');?>
"data-activity-module="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
"data-source-module="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"data-source-record="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"data-ref-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-contact-id="<?php echo $_smarty_tpl->tpl_vars['CONTACT_ID']->value;?>
"data-subject="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('subject');?>
"data-reschedule-reason="Other reason."onclick="Vtiger_Detail_Js.rescheduleActivity(this)"><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Other.</a></li><?php }?><?php if ($_smarty_tpl->tpl_vars['RECORD']->value->get('activitytype')=='Task'){?><li><a href="#"><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Waiting for other people.</a></li><li><a href="#"><i title="Edit" class="fa fa-quote-left"></i>&nbsp;&nbsp;Other.</a></li><?php }?></ul></div></div></div></div></div>

<?php }} ?>