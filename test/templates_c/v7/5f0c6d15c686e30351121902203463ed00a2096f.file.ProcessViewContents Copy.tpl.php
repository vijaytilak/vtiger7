<?php /* Smarty version Smarty-3.1.7, created on 2017-10-29 23:44:03
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Potentials\ProcessViewContents Copy.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1737859f663fba1dae7-93245598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f0c6d15c686e30351121902203463ed00a2096f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Potentials\\ProcessViewContents Copy.tpl',
      1 => 1509320637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1737859f663fba1dae7-93245598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59f663fbb7b51',
  'variables' => 
  array (
    'RECORD' => 0,
    'MODULE_MODEL' => 0,
    'FIELDS_MODELS_LIST' => 0,
    'FIELD_MODEL' => 0,
    'FIELD_NAME' => 0,
    'MODULE' => 0,
    'DISPLAY_VALUE' => 0,
    'MODULE_NAME' => 0,
    'LIST_PREVIEW' => 0,
    'IS_AJAX_ENABLED' => 0,
    'FIELD_DATA_TYPE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f663fbb7b51')) {function content_59f663fbb7b51($_smarty_tpl) {?>
<button data-next-action-type="Mark as Complete" class="btn addButton btn-sm btn-default markAsCompleteBtn textOverflowEllipsis max-width-100" moduleName="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
" recordId="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" type="button" href="javascript:void(0)" onclick='Vtiger_Detail_Js.markAsCompleteFromHeader(this);' ><i class="fa fa-plus"></i>&nbsp;&nbsp;MARK AS COMPLETE</button><button name="relationEdit" data-next-action-type="Edit" class="btn addButton btn-sm btn-default textOverflowEllipsis max-width-100" title="Edit" type="button" href="javascript:void(0)" data-url="index.php?module=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getModuleName();?>
&view=Edit&record=<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" ><i title="Edit" class="fa fa-pencil"></i>&nbsp;&nbsp;Edit Activity</button>&nbsp;&nbsp;<?php $_smarty_tpl->tpl_vars['FIELDS_MODELS_LIST'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getFields(), null, 0);?><?php  $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FIELDS_MODELS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->key => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value){
$_smarty_tpl->tpl_vars['FIELD_MODEL']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['FIELD_DATA_TYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(), null, 0);?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FIELD_NAME'] = new Smarty_variable($_tmp1, null, 0);?><?php if (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isSummaryField()||$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isHeaderField())&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveField()&&$_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value)&&$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isViewable()){?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
<?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['FIELD_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->set('fieldvalue',$_smarty_tpl->tpl_vars['RECORD']->value->get($_tmp2)), null, 0);?><div class="info-row row headerAjaxEdit td"><div class="col-md-6"><?php $_smarty_tpl->tpl_vars['DISPLAY_VALUE'] = new Smarty_variable(($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value))), null, 0);?><span><label class="muted textOverflowEllipsis"title="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
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