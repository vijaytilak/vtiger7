<?php /* Smarty version Smarty-3.1.7, created on 2017-09-25 02:52:21
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Potentials\ConvertPotential.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2412159c86f655363a1-70860383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9f23eae77fce7d0614ebbecd9f26526f541a3ef2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Potentials\\ConvertPotential.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2412159c86f655363a1-70860383',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CONVERT_POTENTIAL_FIELDS' => 0,
    'MODULE' => 0,
    'RECORD' => 0,
    'HEADER_TITLE' => 0,
    'MODULE_NAME' => 0,
    'SINGLE_MODULE_NAME' => 0,
    'MODULE_FIELD_MODEL' => 0,
    'FIELD_MODEL' => 0,
    'ASSIGN_TO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c86f6562ea7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c86f6562ea7')) {function content_59c86f6562ea7($_smarty_tpl) {?>
<div class="modal-dialog"><div id="convertPotentialContainer" class='modelContainer modal-content'><?php $_smarty_tpl->tpl_vars['PROJECT_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance('Project'), null, 0);?><?php if (!$_smarty_tpl->tpl_vars['CONVERT_POTENTIAL_FIELDS']->value['Project']){?><input type="hidden" id="convertPotentialErrorTitle" value="<?php echo vtranslate('LBL_CONVERT_ERROR_TITLE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/><input id="converPotentialtError" class="convertPotentialError" type="hidden" value="<?php echo vtranslate('LBL_CONVERT_POTENTIALS_ERROR',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"/><?php }else{ ?><?php ob_start();?><?php echo vtranslate('LBL_CONVERT_POTENTIAL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getName();?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable((($_tmp1).(" ")).($_tmp2), null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<form class="form-horizontal" id="convertPotentialForm" method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="view" value="SaveConvertPotential"/><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"/><input type="hidden" name="modules" value=''/><div class="modal-body accordion container-fluid" id="potentialAccordion"><?php  $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['MODULE_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CONVERT_POTENTIAL_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['MODULE_NAME']->value = $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->key;
?><div class="row"><div class="col-lg-1"></div><div class="col-lg-10 moduleContent" style="border:1px solid #CCC;"><div class="accordion-group convertPotentialModules"><div class="header accordion-heading"><div data-parent="#potentialAccordion" data-toggle="collapse" class="accordion-toggle moduleSelection" href="#<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_FieldInfo"><h5><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
Module" class="convertPotentialModuleSelection alignBottom" data-module="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Project'){?> checked="" <?php }?>/><?php $_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME'] = new Smarty_variable("SINGLE_".($_smarty_tpl->tpl_vars['MODULE_NAME']->value), null, 0);?>&nbsp;&nbsp;&nbsp;<?php echo vtranslate('LBL_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['SINGLE_MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5></div></div><div id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_FieldInfo" class="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_FieldInfo accordion-body collapse fieldInfo <?php if ($_smarty_tpl->tpl_vars['CONVERT_POTENTIAL_FIELDS']->value['Project']&&$_smarty_tpl->tpl_vars['MODULE_NAME']->value=="Project"){?> in <?php }?>"><hr><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULE_FIELD_MODEL']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?><div class="row"><div class="fieldLabel col-lg-4"><label class='muted pull-right'><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()==true){?> <span class="redColor">*</span> <?php }?></label></div><div class="fieldValue col-lg-8"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div><br><?php } ?></div></div></div><div class="col-lg-1"></div></div><br><?php } ?><div class="defaultFields"><div class="row"><div class="col-lg-1"></div><div class="col-lg-10" style="border:1px solid #CCC;"><div style="margin-top:20px;margin-bottom: 20px;"><div class="row"><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['ASSIGN_TO']->value, null, 0);?><div class="fieldLabel col-lg-4"><label class='muted pull-right'><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;<span class="redColor">*</span></label></div><div class="fieldValue col-lg-8"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></div></div></div><div class="col-lg-1"></div></div></div></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ModalFooter.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }?></div></div><?php }} ?>