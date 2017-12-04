<?php /* Smarty version Smarty-3.1.7, created on 2017-07-06 09:00:00
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Project\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5308595dfc10da44b5-06490202%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '671b7d57dee4326657275edc7162f4e33a8b1ca3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Project\\DetailViewSummaryContents.tpl',
      1 => 1498799088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5308595dfc10da44b5-06490202',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_595dfc10dc297',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595dfc10dc297')) {function content_595dfc10dc297($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>