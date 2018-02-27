<?php /* Smarty version Smarty-3.1.7, created on 2018-02-22 04:10:03
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Potentials\DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212185a8e429bba63a3-14802850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46b15e91da398941e38b68657e72b43db4c1c626' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Potentials\\DetailViewSummaryContents.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212185a8e429bba63a3-14802850',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a8e429bbbfcc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e429bbbfcc')) {function content_5a8e429bbbfcc($_smarty_tpl) {?>
<form id="detailView" method="POST"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</form><?php }} ?>