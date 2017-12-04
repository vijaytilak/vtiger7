<?php /* Smarty version Smarty-3.1.7, created on 2017-06-30 05:43:22
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEReports\ModuleHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116965955e4fa3d17f4-11398595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7fa36d44e600f34eb4e0efac1bba428e38749b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEReports\\ModuleHeader.tpl',
      1 => 1498801373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116965955e4fa3d17f4-11398595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODULE_MODEL' => 0,
    'DEFAULT_FILTER_URL' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5955e4fa426d9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5955e4fa426d9')) {function content_5955e4fa426d9($_smarty_tpl) {?>

<div class="col-sm-12 col-xs-12 module-action-bar clearfix coloredBorderTop"><div class="module-action-content clearfix <?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
-module-action-content"><div class="col-lg-7 col-md-7 module-breadcrumb module-breadcrumb-<?php echo $_REQUEST['view'];?>
 transitionsAllHalfSecond"><?php $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultUrl(), null, 0);?><a title="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" href='<?php echo $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
'><h4 class="module-title pull-left text-uppercase"> <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </h4>&nbsp;&nbsp;</a></div><?php if ($_REQUEST['view']=='List'){?><div class="col-lg-5 col-md-5 pull-right"><div id="appnav" class="navbar-right"><span class="btn-group"><button class="btn btn-default dropdown-toggle module-buttons" data-toggle="dropdown" id="Reports_listView_basicAction_Add" aria-expanded="true" style="width: 158px;"><i class="fa fa-plus"></i>&nbsp;Add Report&nbsp;<i class="caret icon-white"></i></button><ul class="dropdown-menu"><li id="VTEReports_listView_basicAction_tabular_report"><a href="index.php?module=VTEReports&view=Edit&folder=&reporttype=tabular">Tabular Report</a></li><li id="VTEReports_listView_basicAction_summaries_report"><a href="index.php?module=VTEReports&view=Edit&folder=&reporttype=summaries">Summaries Report</a></li><li id="VTEReports_listView_basicAction_summaries_matrix_report"><a href="index.php?module=VTEReports&view=Edit&folder=&reporttype=summaries_matrix">Matrix Report</a></li></ul></span></div></div><?php }?></div></div>
<?php }} ?>