<?php /* Smarty version Smarty-3.1.7, created on 2017-07-04 05:02:44
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Test\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19860595b2174bb5ee1-32497663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc8ff99b1f55b7c60c8e7e48ebfd50d48fea090' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Test\\DetailViewSummaryContents.tpl',
      1 => 1499144463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19860595b2174bb5ee1-32497663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_595b2174bbe33',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595b2174bbe33')) {function content_595b2174bbe33($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>