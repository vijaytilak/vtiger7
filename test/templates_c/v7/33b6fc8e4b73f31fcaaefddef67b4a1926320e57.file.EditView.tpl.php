<?php /* Smarty version Smarty-3.1.7, created on 2017-07-03 00:00:30
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\ModuleLinkCreator\EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:244655959891e3e7de0-93137141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33b6fc8e4b73f31fcaaefddef67b4a1926320e57' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\ModuleLinkCreator\\EditView.tpl',
      1 => 1499039997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '244655959891e3e7de0-93137141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_PROFILE' => 0,
    'CONFIG' => 0,
    'SETTINGS' => 0,
    'MODULE' => 0,
    'RECORD_ID' => 0,
    'RECORD' => 0,
    'MODULE_TYPES' => 0,
    'ID' => 0,
    'MOULE_TYPE_VALUE' => 0,
    'LABEL' => 0,
    'MODULE_FIELDS' => 0,
    'KEY' => 0,
    'ITEM' => 0,
    'MODULE_LIST_VIEW_FILTER_FIELDS' => 0,
    'MODULE_SUMMARY_FIELDS' => 0,
    'MODULE_QUICK_CREATE_FIELDS' => 0,
    'MODULE_LINKS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5959891e5f642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959891e5f642')) {function content_5959891e5f642($_smarty_tpl) {?>

<div class="main-container"><div class="editViewPageDiv viewContent editViewContents"><div class="col-sm-12 col-xs-12 content-area"><div id="js_currentUser" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['USER_PROFILE']->value);?>
</div><div id="js_config" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['CONFIG']->value);?>
</div><div id="js_settings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SETTINGS']->value);?>
</div><form class="form-horizontal fieldBlockContainer" id="EditView" name="EditView" method="post" action="index.php"enctype="multipart/form-data"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"><input type="hidden" name="action" value="Save"><div class="contentHeader row"><h3 class="col-sm-8 col-xs-8 textOverflowEllipsis"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3><span class="col-sm-4 col-xs-4 text-right"><button class="btn btn-success" type="submit" disabled="disabled"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=List"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span></div><div class="contentHeader row-fluid"><div class="alert alert-warning"><?php echo vtranslate('LBL_NOTE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><table id="module-link-creator-edit-table" class="table table-bordered listview-table" style="border-top: 1px solid #ddd;"><thead><tr><th colspan="4"><?php echo vtranslate('LBL_MODULE_DETAILS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr></thead><tbody><tr><td class="fieldLabel medium" ><label class="muted pull-right marginRight10px"><span class="redColor">*</span> <?php echo vtranslate('LBL_MODULE_LABEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><span class="span10"><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_module_label"type="text" class="inputElement nameField"name="module_label" required="required"value="CM<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('module_label');?>
"<?php if ($_smarty_tpl->tpl_vars['RECORD_ID']->value){?> readonly="readonly" <?php }?>/></span></div></td></tr><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_MODULE_NAME',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><span class="span10"><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_module_name"type="text" class="inputElement nameField"name="module_name" readonly="readonly" required="required"value="CM<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('module_name');?>
"></span></div></td></tr><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_MODULE_TYPE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><span class="span10"><select name="module_type" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_module_type"class="select2" disabled="disabled" required="required"><?php  $_smarty_tpl->tpl_vars['LABEL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LABEL']->_loop = false;
 $_smarty_tpl->tpl_vars['ID'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_TYPES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LABEL']->key => $_smarty_tpl->tpl_vars['LABEL']->value){
$_smarty_tpl->tpl_vars['LABEL']->_loop = true;
 $_smarty_tpl->tpl_vars['ID']->value = $_smarty_tpl->tpl_vars['LABEL']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['MOULE_TYPE_VALUE']->value==$_smarty_tpl->tpl_vars['ID']->value){?> selected="selected" <?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['LABEL']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select></span></div></td></tr><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><span class="span10"><select name="module_fields[]" id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_module_fields"class="select2" disabled="disabled" multiple="multiple"><?php  $_smarty_tpl->tpl_vars['ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->key => $_smarty_tpl->tpl_vars['ITEM']->value){
$_smarty_tpl->tpl_vars['ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['ITEM']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-info='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['ITEM']->value);?>
'selected="selected"><?php echo vtranslate($_smarty_tpl->tpl_vars['ITEM']->value['fieldlabel'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select></span></div></td></tr><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_LIST_VIEW_FILTER_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><span class="span10"><select id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_module_list_view_filter_fields"name="module_list_view_filter_fields[]"class="select2" disabled="disabled" multiple="multiple"><?php  $_smarty_tpl->tpl_vars['ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_LIST_VIEW_FILTER_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->key => $_smarty_tpl->tpl_vars['ITEM']->value){
$_smarty_tpl->tpl_vars['ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['ITEM']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-info='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['ITEM']->value);?>
'selected="selected"><?php echo vtranslate($_smarty_tpl->tpl_vars['ITEM']->value['fieldlabel'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select></span></div></td></tr><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_SUMMARY_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><span class="span10"><select id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_module_summary_fields" name="module_summary_fields[]"class="select2" disabled="disabled" multiple="multiple"><?php  $_smarty_tpl->tpl_vars['ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_SUMMARY_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->key => $_smarty_tpl->tpl_vars['ITEM']->value){
$_smarty_tpl->tpl_vars['ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['ITEM']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-info='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['ITEM']->value);?>
'selected="selected"><?php echo vtranslate($_smarty_tpl->tpl_vars['ITEM']->value['fieldlabel'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select></span></div></td></tr><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_QUICK_CREATE_FIELDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><span class="span10"><select id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_module_quick_create_fields"name="module_quick_create_fields[]"class="select2" disabled="disabled" multiple="multiple"><?php  $_smarty_tpl->tpl_vars['ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_QUICK_CREATE_FIELDS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->key => $_smarty_tpl->tpl_vars['ITEM']->value){
$_smarty_tpl->tpl_vars['ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['ITEM']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
" data-info='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['ITEM']->value);?>
'selected="selected"><?php echo vtranslate($_smarty_tpl->tpl_vars['ITEM']->value['fieldlabel'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select></span></div></td></tr><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"><?php echo vtranslate('LBL_LINKED_MODULES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><span class="span10"><select id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_module_links" name="module_links[]"class="select2" disabled="disabled" multiple="multiple"><?php  $_smarty_tpl->tpl_vars['ITEM'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ITEM']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['MODULE_LINKS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->key => $_smarty_tpl->tpl_vars['ITEM']->value){
$_smarty_tpl->tpl_vars['ITEM']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['ITEM']->key;
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['module_name'];?>
" data-info='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['ITEM']->value);?>
'selected="selected"><?php echo vtranslate($_smarty_tpl->tpl_vars['ITEM']->value['module_label'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php } ?></select></span></div></td></tr></tbody></table><br><div class="row-fluid"><div class="pull-right"><button class="btn btn-success" type="submit" disabled="disabled"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" type="reset" onclick="window.history.back();"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a><div class="clearfix"></div></div><br></form></div></div></div><?php }} ?>