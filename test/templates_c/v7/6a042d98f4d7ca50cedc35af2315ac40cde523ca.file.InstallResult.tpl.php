<?php /* Smarty version Smarty-3.1.7, created on 2017-06-30 05:32:58
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEStore\InstallResult.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51985955e28ab01c36-33243219%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a042d98f4d7ca50cedc35af2315ac40cde523ca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEStore\\InstallResult.tpl',
      1 => 1498800777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51985955e28ab01c36-33243219',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR' => 0,
    'EXTENSION_NAME' => 0,
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5955e28ab39ba',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5955e28ab39ba')) {function content_5955e28ab39ba($_smarty_tpl) {?>
<div class='modal-dialog modal-lg'><div class="modal-content"><div class="modal-header contentsBackground"><button type="button" class="close" data-dismiss="modal" aria-hidden="true" onclick="<?php if ($_smarty_tpl->tpl_vars['ERROR']->value!='yes'){?>app.helper.showSuccessNotification({message: app.vtranslate('JS_PLEASE_WAIT')});location.reload();<?php }?>"><span aria-hidden="true" class='fa fa-close'></span></button><h4 style="color:white;"><?php echo $_smarty_tpl->tpl_vars['EXTENSION_NAME']->value;?>
</h4></div><div class="modal-body" id="installationLog"><div class="row-fluid" <?php if ($_smarty_tpl->tpl_vars['ERROR']->value=='yes'){?>style="color:red;"<?php }?>><span class="font-x-x-large"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</span><br><br><div align="center"> <?php if ($_smarty_tpl->tpl_vars['ERROR']->value!='yes'){?><img src="layouts/v7/modules/VTEStore/resources/images/VTEStoreSetting.png" style="width: 100%;" align="center"><?php }?></div></div></div><div class="modal-footer"><span class="pull-right"><button class="btn btn-success" id="importCompleted" onclick="app.hideModalWindow();<?php if ($_smarty_tpl->tpl_vars['ERROR']->value!='yes'){?>app.helper.showSuccessNotification({message: app.vtranslate('JS_PLEASE_WAIT')});location.reload();<?php }?>"><?php echo vtranslate('LBL_OK','VTEStore');?>
</button></span></div></div></div><?php }} ?>