<?php /* Smarty version Smarty-3.1.7, created on 2017-06-30 05:16:12
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEStore\InstallerHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:90505955de9c4a01a6-58449354%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '00c8b413021b857bbdb14d55d10f0c02f0e0a31f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEStore\\InstallerHeader.tpl',
      1 => 1498799751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '90505955de9c4a01a6-58449354',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5955de9c4af5d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5955de9c4af5d')) {function content_5955de9c4af5d($_smarty_tpl) {?>
<div class="editContainer" style="padding-left: 3%;padding-right: 3%; padding-top: 10px;"><h3><?php echo vtranslate('MODULE_LBL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h3><hr><div id="breadcrumb" style="margin-top: 15px;"><ul class="crumbs marginLeftZero"><li class="first step active"  style="z-index:9" id="step1"><a><span class="stepNum">1</span><span class="stepText"><?php echo vtranslate('LBL_REQUIREMENTS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li></ul></div><div class="clearfix"></div></div><?php }} ?>