<?php /* Smarty version Smarty-3.1.7, created on 2017-07-01 23:20:15
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Accounts\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2696059582e2f64aa70-26636939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54a093fe972ae2aa36443e7423e558ee86a9a467' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Accounts\\DetailViewSummaryContents.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2696059582e2f64aa70-26636939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59582e2f6657f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59582e2f6657f')) {function content_59582e2f6657f($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>