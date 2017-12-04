<?php /* Smarty version Smarty-3.1.7, created on 2017-06-30 05:34:01
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEStore\ForgotPassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:225815955e2c9a0db65-11386938%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7117ff148ad83b2f0f285fe43ce54fee9bea36de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEStore\\ForgotPassword.tpl',
      1 => 1498800777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '225815955e2c9a0db65-11386938',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CAPTCHADATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5955e2c9a2b71',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5955e2c9a2b71')) {function content_5955e2c9a2b71($_smarty_tpl) {?>    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header contentsBackground">
                <button aria-hidden="true" class="close " data-dismiss="modal" type="button"><span aria-hidden="true" class='fa fa-close'></span></button>
                <h4><?php echo vtranslate('LBL_FORGOT_PASSWORD','VTEStore');?>
</h4>
            </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
                <form class="form-horizontal forgotPasswordForm">
                    <input type="hidden" name="module" value="VTEStore"/>
                    <input type="hidden" name="parent" value="Settings"/>
                    <input type="hidden" name="action" value="ActionAjax"/>
                    <input type="hidden" name="mode" value="forgotPassword"/>

                    <div class="modal-body">
                        <div class="row">
                            <div class="control-group">
                                <div class="col-md-2"></div>
                                <div class="col-md-8" style="text-align: center;"><span><?php echo vtranslate('Please enter your email','VTEStore');?>
</span></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="control-group">
                                <label class="col-md-3 control-label"><span class="redColor">*</span>&nbsp;<?php echo vtranslate('LBL_EMAIL','VTEStore');?>
</label>
                                <div class="col-md-9"><input type="text" class="inputElement" style="max-width: 210px;" name="email" aria-required="true" data-rule-required="true" /></div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="control-group">
                                <label class="col-md-3 control-label"></label>
                                <div id='captcha_container_1' class="col-md-9"><?php echo $_smarty_tpl->tpl_vars['CAPTCHADATA']->value;?>
</div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="row-fluid">
                            <div class="col-lg-6"><div class="row-fluid"></div></div>
                            <div class="col-lg-6">
                                <div class="pull-right">
                                    <div class="pull-right cancelLinkContainer" style="margin-top:0px;">
                                        <a class="cancelLink" type="reset" data-dismiss="modal"><?php echo vtranslate('LBL_CANCEL','VTEStore');?>
</a>
                                    </div>
                                    <button class="btn btn-success" type="submit" name="btnForgotPassword" id="btnForgotPassword"><strong><?php echo vtranslate('LBL_SUBMIT','VTEStore');?>
</strong></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><?php }} ?>