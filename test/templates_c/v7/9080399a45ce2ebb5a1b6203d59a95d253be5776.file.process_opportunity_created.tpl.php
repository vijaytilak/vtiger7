<?php /* Smarty version Smarty-3.1.7, created on 2017-12-07 23:47:42
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Potentials\process_opportunity_created.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2814159e420479eb2c7-84145073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9080399a45ce2ebb5a1b6203d59a95d253be5776' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Potentials\\process_opportunity_created.tpl',
      1 => 1512690457,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2814159e420479eb2c7-84145073',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59e42047e2c2d',
  'variables' => 
  array (
    'PICKIST_DEPENDENCY_DATASOURCE' => 0,
    'MODULE_MODEL' => 0,
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'MODULE' => 0,
    'DISPLAY_VALUE' => 0,
    'MODULE_NAME' => 0,
    'RECORD' => 0,
    'NEXT_PROCESS_STAGE' => 0,
    'PROCESS_LIST' => 0,
    'CURRENT_PROCESS_STAGE' => 0,
    'DETAIL_RECORD_STRUCTURE' => 0,
    'FIELDS' => 0,
    'PROCESS_STAGE_FIELDS' => 0,
    'USER_MODEL' => 0,
    'IS_AJAX_ENABLED' => 0,
    'FIELD_DATA_TYPE' => 0,
    'CALENDAR_MODEL' => 0,
    'MISSING_PROCESSES' => 0,
    'PROCESS' => 0,
    'HIGHLIGHT_CLASS' => 0,
    'RELATEDRECORDMODULEMODEL' => 0,
    'PARENT_RECORD_MODEL' => 0,
    'RELATION_LIST_VIEW' => 0,
    'MODULEBASICLINKS' => 0,
    'RELATION_MODEL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e42047e2c2d')) {function content_59e42047e2c2d($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)){?><input type="hidden"name="picklistDependency"value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
'/><?php }?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getField('sales_stage'), null, 0);?><?php $_smarty_tpl->tpl_vars['FIELD_DATA_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_tmp1, null, 0);?><div class="row"><div class="col-md-12 padding0px"><div class="pull-left"><span class="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
 value"title="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo strip_tags($_smarty_tpl->tpl_vars['DISPLAY_VALUE']->value);?>
"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDetailViewTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0);?>
</span><i name="reloadHeader" class="fa fa-refresh" data-url="" type="button" href="javascript:void(0)"></i></div><?php if (!in_array($_smarty_tpl->tpl_vars['NEXT_PROCESS_STAGE']->value,$_smarty_tpl->tpl_vars['PROCESS_LIST']->value['Generic']['processExitStageList'])){?><div class="pull-right"><a href="#"class="badge label-info"data-opportunity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"data-current-sales-stage="<?php echo $_smarty_tpl->tpl_vars['CURRENT_PROCESS_STAGE']->value;?>
"data-new-sales-stage="<?php echo $_smarty_tpl->tpl_vars['NEXT_PROCESS_STAGE']->value;?>
"onclick="Vtiger_Detail_Js.checkProcessStageCompletion(this)"><i title="Edit" class="fa fa-flag-checkered"></i>&nbsp&nbspComplete Sales Stage</a></div><?php }?></div></div><div class="row"><div class="col-md-12"><table class="table" style="margin-bottom: 10px"><thead><tr><th colspan="2" class="text-muted"></th></tr></thead><?php  $_smarty_tpl->tpl_vars['FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAIL_RECORD_STRUCTURE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS']->key => $_smarty_tpl->tpl_vars['FIELDS']->value){
$_smarty_tpl->tpl_vars['FIELDS']->_loop = true;
?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><?php if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['PROCESS_STAGE_FIELDS']->value)){?><?php $_smarty_tpl->tpl_vars['FIELD_DATA_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_tmp2, null, 0);?><?php $_smarty_tpl->tpl_vars['DISPLAY_VALUE'] = new Smarty_variable(($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get("fieldvalue"))), null, 0);?><tbody style="border: 1px solid #eee;background: #ffffff"><tr class="headerAjaxEdit"><td style="border-color: #eee; width: 50%"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</td><td class="fieldLabel" style="border-color: #eee;"><span class="value textOverflowEllipsis"title="<?php echo strip_tags($_smarty_tpl->tpl_vars['DISPLAY_VALUE']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='19'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='20'||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')=='21'){?>style="word-wrap: break-word;"<?php }?>><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDetailViewTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()=='true'&&$_smarty_tpl->tpl_vars['IS_AJAX_ENABLED']->value&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isAjaxEditable()=='true'&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('uitype')!=69){?><span class="hide edit"><?php if ($_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value=='multipicklist'){?><input type="hidden"class="fieldBasicData"data-name='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
[]' data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value;?>
"data-displayvalue='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')));?>
'data-value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
"/><?php }else{ ?><input type="hidden"class="fieldBasicData"data-name='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
'data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value;?>
"data-displayvalue='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')));?>
'data-value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
"/><?php }?></span><span class="action"><a href="#" onclick="return false;" class="editAction fa fa-pencil"></a></span><?php }?></td></tr></tbody><?php }?><?php } ?><?php } ?></table></div></div><?php $_smarty_tpl->tpl_vars['CALENDAR_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Calendar'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['CALENDAR_MODEL']->value->isPermitted('CreateView')&&($_smarty_tpl->tpl_vars['MISSING_PROCESSES']->value['missingMandatoryActivities']||$_smarty_tpl->tpl_vars['MISSING_PROCESSES']->value['missingMandatoryRelatedRecords'])){?><div class="row"><div class="col-md-12 textAlignCenter" style="background: inherit; border: 0px"><?php  $_smarty_tpl->tpl_vars['PROCESS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PROCESS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MISSING_PROCESSES']->value['missingMandatoryActivities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PROCESS']->key => $_smarty_tpl->tpl_vars['PROCESS']->value){
$_smarty_tpl->tpl_vars['PROCESS']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['PROCESS']->value['highlight']==true){?><?php $_smarty_tpl->tpl_vars['HIGHLIGHT_CLASS'] = new Smarty_variable('label-warning', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['HIGHLIGHT_CLASS'] = new Smarty_variable('label-default', null, 0);?><?php }?><a href="#"class="badge <?php echo $_smarty_tpl->tpl_vars['HIGHLIGHT_CLASS']->value;?>
 marginLeft10px marginRight10px"data-activity-type="<?php echo $_smarty_tpl->tpl_vars['PROCESS']->value['activityType'];?>
"data-source-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-source-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('id');?>
"data-ref-module="<?php echo $_smarty_tpl->tpl_vars['PROCESS']->value['relatedModule'];?>
"data-contact-id="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('contact_id');?>
"data-subject="<?php echo end(explode(' ',getContactName($_smarty_tpl->tpl_vars['RECORD']->value->get('contact_id'))));?>
 - <?php echo $_smarty_tpl->tpl_vars['PROCESS']->value['subject'];?>
"onclick="Vtiger_Detail_Js.openQuickCreateActivity(this)"><i title="Edit" class="fa fa-plus"></i>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['PROCESS']->value['activityType'];?>
 : <?php echo $_smarty_tpl->tpl_vars['PROCESS']->value['subject'];?>
</a><?php } ?><?php  $_smarty_tpl->tpl_vars['PROCESS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['PROCESS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MISSING_PROCESSES']->value['missingMandatoryRelatedRecords']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['PROCESS']->key => $_smarty_tpl->tpl_vars['PROCESS']->value){
$_smarty_tpl->tpl_vars['PROCESS']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['PROCESS']->value['highlight']==true){?><?php $_smarty_tpl->tpl_vars['HIGHLIGHT_CLASS'] = new Smarty_variable('label-warning', null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['HIGHLIGHT_CLASS'] = new Smarty_variable('label-default', null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['RELATEDRECORDMODULEMODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['PROCESS']->value['relatedModule']), null, 0);?><?php $_smarty_tpl->tpl_vars['MODULEBASICLINKS'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDRECORDMODULEMODEL']->value->getModuleBasicLinks(), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('id');?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp4=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['PARENT_RECORD_MODEL'] = new Smarty_variable(Vtiger_Record_Model::getInstanceById($_tmp3,$_tmp4), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PROCESS']->value['relatedModule'];?>
<?php $_tmp5=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['RELATION_LIST_VIEW'] = new Smarty_variable(Vtiger_RelationListView_Model::getInstance($_smarty_tpl->tpl_vars['PARENT_RECORD_MODEL']->value,$_tmp5), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATION_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATION_LIST_VIEW']->value->getRelationModel(), null, 0);?><a href="#"class="badge <?php echo $_smarty_tpl->tpl_vars['HIGHLIGHT_CLASS']->value;?>
 marginLeft10px marginRight10px"data-url="<?php echo $_smarty_tpl->tpl_vars['MODULEBASICLINKS']->value[array_search('LBL_ADD_RECORD',array_column($_smarty_tpl->tpl_vars['MODULEBASICLINKS']->value,'linklabel'))]['linkurl'];?>
"data-return-mode="showRelatedList"data-returntab-label="<?php echo $_smarty_tpl->tpl_vars['PROCESS']->value['relatedModule'];?>
"data-return-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('id');?>
"data-return-module="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"data-return-view="Detail"data-return-related-modulename="<?php echo $_smarty_tpl->tpl_vars['PROCESS']->value['relatedModule'];?>
"data-return-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATION_MODEL']->value->getId();?>
"data-relation-operation="TRUE"data-app="SALES"data-potential-id="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('id');?>
"data-account-id="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('related_to');?>
"data-contact-id="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('contact_id');?>
"data-subject="<?php echo end(explode(' ',getContactName($_smarty_tpl->tpl_vars['RECORD']->value->get('contact_id'))));?>
 - <?php echo $_smarty_tpl->tpl_vars['PROCESS']->value['subject'];?>
"data-status-field="quotestage"data-new-status="Created"onclick="Vtiger_Detail_Js.openCreateRelatedRecord(this)"><i title="Edit" class="fa fa-plus"></i>&nbsp;&nbsp;New <?php echo vtlib_toSingular($_smarty_tpl->tpl_vars['PROCESS']->value['relatedModule']);?>
</a><?php } ?></div></div><?php }?><?php }} ?>