<?php /* Smarty version Smarty-3.1.7, created on 2017-11-01 00:48:23
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Potentials\process_needs_analysis.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2935959dc33a0435251-00643616%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e6cb5b9c233d4121fc651dbcb8f4302ba7eefcf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Potentials\\process_needs_analysis.tpl',
      1 => 1509497298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2935959dc33a0435251-00643616',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59dc33a0436e5',
  'variables' => 
  array (
    'PICKIST_DEPENDENCY_DATASOURCE' => 0,
    'DETAIL_RECORD_STRUCTURE' => 0,
    'FIELDS' => 0,
    'FIELD_MODEL' => 0,
    'SELECTED_FIELDS' => 0,
    'MODULE' => 0,
    'DISPLAY_VALUE' => 0,
    'MODULE_NAME' => 0,
    'USER_MODEL' => 0,
    'RECORD' => 0,
    'IS_AJAX_ENABLED' => 0,
    'FIELD_DATA_TYPE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dc33a0436e5')) {function content_59dc33a0436e5($_smarty_tpl) {?><?php if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)){?><input type="hidden"name="picklistDependency"value='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
'/><?php }?><?php $_smarty_tpl->tpl_vars['SELECTED_FIELDS'] = new Smarty_variable(array('sales_stage','nextstep','closingdate','amount'), null, 0);?><div class="row"><div class="col-md-12"><table class="table"><thead><tr><th colspan="2" class="text-muted"></th></tr></thead><?php  $_smarty_tpl->tpl_vars['FIELDS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELDS']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAIL_RECORD_STRUCTURE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS']->key => $_smarty_tpl->tpl_vars['FIELDS']->value){
$_smarty_tpl->tpl_vars['FIELDS']->_loop = true;
?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
 $_smarty_tpl->tpl_vars['FIELD_NAME']->value = $_smarty_tpl->tpl_vars['FIELD_MODEL']->key;
?><?php if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['SELECTED_FIELDS']->value)){?><?php $_smarty_tpl->tpl_vars['FIELD_DATA_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_tmp1, null, 0);?><?php $_smarty_tpl->tpl_vars['DISPLAY_VALUE'] = new Smarty_variable(($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get("fieldvalue"))), null, 0);?><tbody style="border: 1px solid #eee;background: #ffffff"><tr class="headerAjaxEdit"><td style="border-color: #eee; width: 50%"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
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
"/><?php }?></span><span class="action"><a href="#" onclick="return false;" class="editAction fa fa-pencil"></a></span><?php }?></td></tr></tbody><?php }?><?php } ?><?php } ?></table></div></div>

<?php }} ?>