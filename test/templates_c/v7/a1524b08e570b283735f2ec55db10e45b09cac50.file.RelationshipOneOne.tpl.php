<?php /* Smarty version Smarty-3.1.7, created on 2017-07-04 05:00:10
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\ModuleLinkCreator\RelationshipOneOne.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31082595b20dabe0300-40036845%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1524b08e570b283735f2ec55db10e45b09cac50' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\ModuleLinkCreator\\RelationshipOneOne.tpl',
      1 => 1499039997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31082595b20dabe0300-40036845',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'ENTITY_MODULES' => 0,
    'MODULE1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_595b20db0e162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595b20db0e162')) {function content_595b20db0e162($_smarty_tpl) {?>

<div class="viewContent "><div class="col-sm-12 col-xs-12 content-area"><form class="form-horizontal fieldBlockContainer" method="post" action="index.php" onsubmit="return false;"><div class="contentHeader row"><h3 class="col-sm-8 col-xs-8 textOverflowEllipsis"title="<?php echo vtranslate('add_new_related_field_explain',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate('LBL_CREATEING_11',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3><span class="col-sm-4 col-xs-4 text-right"><button class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=List"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></span></div><div class="contentHeader "><div class="alert alert-warning"><?php echo vtranslate('notice11',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><table class="table table-bordered listview-table" style="border-top: 1px solid #ddd;"><thead><tr><th colspan="4"><?php echo vtranslate('add_new_related_field_11',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr></thead><tbody><tr><td class="fieldLabel medium" style="width: 20%"><label class="muted pull-right marginRight10px"><?php echo vtranslate('module111',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><select name="module1" id="module1" class="select2 span10" style="width: 200px"><option value="-"><?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['MODULE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ENTITY_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE1']->key => $_smarty_tpl->tpl_vars['MODULE1']->value){
$_smarty_tpl->tpl_vars['MODULE1']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE1']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE1']->value);?>
</option><?php } ?></select></div></td></tr><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"><?php echo vtranslate('label_Module12',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><input type="text" id="txtModule12" class="inputElement"></div></td></tr><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"><?php echo vtranslate('module211',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><select name="module2" id="module2" class="select2 span10"><option value="-"><?php echo vtranslate('LBL_SELECT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php  $_smarty_tpl->tpl_vars['MODULE1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['MODULE1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ENTITY_MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE1']->key => $_smarty_tpl->tpl_vars['MODULE1']->value){
$_smarty_tpl->tpl_vars['MODULE1']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE1']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE1']->value);?>
</option><?php } ?></select></div></td></tr><tr><td class="fieldLabel medium"><label class="muted pull-right marginRight10px"><?php echo vtranslate('label_Module21',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></td><td class="fieldValue medium"><div class="row-fluid"><input type="text" id="txtModule21" class="inputElement"></div></td></tr></tbody></table><br><br><div id="error_notice" class="alert alert-error notices related-field-creator-notices"style="display:none;"><?php echo vtranslate('fail',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div id="success_message" class="alert alert-success notices related-field-creator-notices"style="display:none;"><?php echo vtranslate('works',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div id="duplicate_error" class="alert alert-error notices related-field-creator-notices"style="display:none;"><?php echo vtranslate('duplicated-error',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div id="field-already-there" class="alert alert-error notices related-field-creator-notices"style="display:none;"><?php echo vtranslate('field-already-there',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="row-fluid"><div class="pull-right"><button id="add_related_field" class="btn btn-success" type="submit"><strong><?php echo vtranslate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><a class="cancelLink" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
&view=List"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div></form><br><div class="row-fluid"><table id="table-relations" class="table table-bordered listViewEntriesTable"><caption style="font-weight: bold; font-size: 18px; padding: 10px; text-align: left;"><?php echo vtranslate('All 1:1 Relations');?>
</caption><thead><tr class="listViewHeaders"><th>#</th><th><?php echo vtranslate('Module 1',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><th colspan="2"><?php echo vtranslate('Module 2',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th></tr></thead><tbody></tbody></table></div><br></div><?php }} ?>