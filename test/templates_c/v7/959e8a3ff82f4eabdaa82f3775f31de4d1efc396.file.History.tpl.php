<?php /* Smarty version Smarty-3.1.7, created on 2017-07-01 09:41:57
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Vtiger\History.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2753559576e655265a5-60874017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '959e8a3ff82f4eabdaa82f3775f31de4d1efc396' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\History.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2753559576e655265a5-60874017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59576e6556a29',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59576e6556a29')) {function content_59576e6556a29($_smarty_tpl) {?>
<div class="HistoryContainer"><div class="historyButtons btn-group" role="group" aria-label="..."><button type="button" class="btn btn-default" onclick='Vtiger_Detail_Js.showUpdates(this);'><?php echo vtranslate("LBL_UPDATES",$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div><div class='data-body'></div></div><?php }} ?>