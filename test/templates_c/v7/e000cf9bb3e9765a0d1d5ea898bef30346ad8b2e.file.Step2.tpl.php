<?php /* Smarty version Smarty-3.1.7, created on 2017-07-17 05:00:23
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEReports\Step2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19718596c44675409f9-05297755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e000cf9bb3e9765a0d1d5ea898bef30346ad8b2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEReports\\Step2.tpl',
      1 => 1498801373,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19718596c44675409f9-05297755',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'QUALIFIED_MODULE' => 0,
    'SITE_URL' => 0,
    'VTELICENSE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_596c446761338',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_596c446761338')) {function content_596c446761338($_smarty_tpl) {?>
<style>
    #breadcrumb .crumbs li{
        border-left: 20px solid #ffffff
    }
    .crumbs li {
        height: 0;
        border-top: 20px solid #ECECEC;
        border-bottom: 20px solid #ECECEC;
        border-left: 20px solid transparent;
        display: inline-block;
        cursor: pointer;
        box-shadow: 0 1px #ddd;
        margin-right: 5px;
    }
    .padding1per{
        padding: 1%;
    }
    .form-horizontal .control-label {
        float: left;
        width: 140px;
        padding-top: 5px;
        text-align: right;
    }
    .control-group div.controls{
        padding-top: 7px;
        margin-left: 158px;
    }
    #license_key{
        width: 50%;
        margin-top: -3px;
    }
</style>
<div class="installationContents" style="padding-left: 3%;padding-right: 3%;    margin-top: 12px;"><form name="EditWorkflow" action="index.php" method="post" id="installation_step2" class="form-horizontal"><input type="hidden" class="step" value="2" /><div class="padding1per" style="border:1px solid #ccc;"><label><strong><?php echo vtranslate('LBL_WELCOME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo vtranslate('MODULE_LBL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo vtranslate('LBL_INSTALLATION_WIZARD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label><br><div class="control-group" style="margin-top:15px;"><div><span><?php echo vtranslate('LBL_YOU_ARE_REQUIRED_VALIDATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><div class="control-group" style="margin-bottom:10px;"><div class="control-label"><strong><?php echo vtranslate('LBL_VTIGER_URL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div><div class="controls" style="margin-top: 5px;"><span><?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
</span></div></div><div class="control-group" style="margin-bottom:10px;"><div class="control-label"><strong><?php echo vtranslate('LBL_LICENSE_KEY',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></div><div class="controls"><input type="text" id="license_key" name="license_key" value="" data-validation-engine="validate[required]" class="span4" name="summary"></div></div><?php if ($_smarty_tpl->tpl_vars['VTELICENSE']->value->result=='bad'||$_smarty_tpl->tpl_vars['VTELICENSE']->value->result=='invalid'){?><div class="alert alert-error" id="error_message"><?php echo $_smarty_tpl->tpl_vars['VTELICENSE']->value->message;?>
</div><?php }?><div class="control-group" style="margin-top: 25px;"><div><span><?php echo vtranslate('LBL_HAVE_TROUBLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <?php echo vtranslate('LBL_CONTACT_US',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></div></div><div class="control-group" style="margin-top: 10px;"><ul style="padding-left: 40px;"><li><?php echo vtranslate('LBL_EMAIL',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: &nbsp;&nbsp;<a href="mailto:Support@VTExperts.com">Support@VTExperts.com</a></li><li><?php echo vtranslate('LBL_PHONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: &nbsp;&nbsp;<span>+1 (818) 495-5557</span></li><li><?php echo vtranslate('LBL_CHAT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: &nbsp;&nbsp;<?php echo vtranslate('LBL_AVAILABLE_ON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
 <a href="http://www.vtexperts.com" target="_blank">http://www.VTExperts.com</a></li></ul></div><div class="control-group" style="text-align: center;"><button class="btn btn-success" name="btnActivate" type="button"><strong><?php echo vtranslate('LBL_ACTIVATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-info" name="btnOrder" type="button" onclick="window.open('https://www.vtexperts.com/product/vtiger-professional-reports/')"><strong><?php echo vtranslate('LBL_ORDER_NOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div></div></div><div class="clearfix"></div></form></div><?php }} ?>