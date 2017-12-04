<?php /* Smarty version Smarty-3.1.7, created on 2017-09-25 21:41:35
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Potentials\History.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1895659c8723a707954-15649823%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81133d6f987ea0fa773c735f019d62731460137c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Potentials\\History.tpl',
      1 => 1506375634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1895659c8723a707954-15649823',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59c8723a73359',
  'variables' => 
  array (
    'MODULE_MODEL' => 0,
    'FIELDS_MODELS_LIST' => 0,
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'RECORD' => 0,
    'MODULE' => 0,
    'DISPLAY_VALUE' => 0,
    'MODULE_NAME' => 0,
    'LIST_PREVIEW' => 0,
    'IS_AJAX_ENABLED' => 0,
    'FIELD_DATA_TYPE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59c8723a73359')) {function content_59c8723a73359($_smarty_tpl) {?>
<?php $_smarty_tpl->tpl_vars['FIELDS_MODELS_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFields(), null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FIELDS_MODELS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['FIELD_DATA_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_tmp1, null, 0);?><?php if (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isSummaryField()||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isHeaderField())&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveField()&&$_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value)&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isViewable()){?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['RECORD']->value->get($_tmp2)), null, 0);?><div class="info-row row headerAjaxEdit td"><div class="col-md-6"><?php $_smarty_tpl->tpl_vars['DISPLAY_VALUE'] = new Smarty_variable(($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value))), null, 0);?><span><label class="muted textOverflowEllipsis" title="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></span></div><div class="col-md-6 padding0px margin0px"><div class="fieldLabel"><span class="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
 value"title="<?php echo vtranslate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo strip_tags($_smarty_tpl->tpl_vars['DISPLAY_VALUE']->value);?>
"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDetailViewTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0);?>
</span><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable()=='true'&&$_smarty_tpl->tpl_vars['LIST_PREVIEW']->value!='true'&&$_smarty_tpl->tpl_vars['IS_AJAX_ENABLED']->value=='true'){?><span class="hide edit"><?php if ($_smarty_tpl->tpl_vars['FIELD_DATA_TYPE']->value=='multipicklist'){?><input type="hidden" class="fieldBasicData" data-name='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
[]'data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
"data-displayvalue='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')));?>
'data-value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
"/><?php }else{ ?><input type="hidden" class="fieldBasicData" data-name='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
'data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
"data-displayvalue='<?php echo Vtiger_Util_Helper::toSafeHTML($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue')));?>
'data-value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
"/><?php }?></span><span class="action"><a href="#" onclick="return false;" class="editAction fa fa-pencil"></a></span><?php }?></div></div></div><?php }?><?php } ?><?php }} ?>