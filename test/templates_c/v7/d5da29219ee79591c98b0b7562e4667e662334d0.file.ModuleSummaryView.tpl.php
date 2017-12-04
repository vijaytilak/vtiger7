<?php /* Smarty version Smarty-3.1.7, created on 2017-07-06 09:00:00
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Project\ModuleSummaryView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26799595dfc10be2db7-64085704%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5da29219ee79591c98b0b7562e4667e662334d0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Project\\ModuleSummaryView.tpl',
      1 => 1498799088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26799595dfc10be2db7-64085704',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_595dfc10c43d4',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595dfc10c43d4')) {function content_595dfc10c43d4($_smarty_tpl) {?>
<div class="recordDetails"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewContents.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
<?php }} ?>