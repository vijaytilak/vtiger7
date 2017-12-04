<?php /* Smarty version Smarty-3.1.7, created on 2017-10-03 03:39:53
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Calendar\RecurringDeleteView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1194959d30689a4e9f8-23291609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1f8ebc78c276e0460bc76fdde2399dbcff6982b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Calendar\\RecurringDeleteView.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1194959d30689a4e9f8-23291609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'HEADER_TITLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59d30689d8109',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59d30689d8109')) {function content_59d30689d8109($_smarty_tpl) {?>


<!--Confirmation modal for updating Recurring Events--><?php $_smarty_tpl->tpl_vars['MODULE'] = new Smarty_variable("Calendar", null, 0);?><div class="modal-dialog modelContainer" style='min-width:350px;'><?php ob_start();?><?php echo vtranslate('LBL_DELETE_RECURRING_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['HEADER_TITLE'] = new Smarty_variable($_tmp1, null, 0);?><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("ModalHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('TITLE'=>$_smarty_tpl->tpl_vars['HEADER_TITLE']->value), 0);?>
<div class="modal-body"><div class="container-fluid"><div class="row" style="padding: 1%;padding-left: 3%;"><?php echo vtranslate('LBL_DELETE_RECURRING_EVENTS_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class="row" style="padding: 1%;"><span class="col-sm-12"><span class="col-sm-4"><button class="btn onlyThisEvent" style="width : 150px"><strong><?php echo vtranslate('LBL_ONLY_THIS_EVENT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></span><span class="col-sm-8"><?php echo vtranslate('LBL_ONLY_THIS_EVENT_DELETE_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span></div><div class="row" style="padding: 1%;"><span class="col-sm-12"><span class="col-sm-4"><button class="btn futureEvents" style="width : 150px"><strong><?php echo vtranslate('LBL_FUTURE_EVENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></span><span class="col-sm-8"><?php echo vtranslate('LBL_FUTURE_EVENTS_DELETE_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span></div><div class="row" style="padding: 1%;"><span class="col-sm-12"><span class="col-sm-4"><button class="btn allEvents" style="width : 150px"><strong><?php echo vtranslate('LBL_ALL_EVENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></span><span class="col-sm-8"><?php echo vtranslate('LBL_ALL_EVENTS_DELETE_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span></span></div></div></div></div><!--Confirmation modal for updating Recurring Events--><?php }} ?>