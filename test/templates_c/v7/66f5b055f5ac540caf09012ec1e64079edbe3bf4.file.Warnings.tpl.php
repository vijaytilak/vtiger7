<?php /* Smarty version Smarty-3.1.7, created on 2017-06-30 05:35:45
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEStore\Warnings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130165955e3318aaef8-17367044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66f5b055f5ac540caf09012ec1e64079edbe3bf4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEStore\\Warnings.tpl',
      1 => 1498800777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '130165955e3318aaef8-17367044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WARNINGS' => 0,
    'default_socket_timeout' => 0,
    'max_execution_time' => 0,
    'max_input_time' => 0,
    'memory_limit' => 0,
    'post_max_size' => 0,
    'upload_max_filesize' => 0,
    'MESSAGES' => 0,
    'VTVERSION' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5955e3319c6e8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5955e3319c6e8')) {function content_5955e3319c6e8($_smarty_tpl) {?><div id="globalmodal">
    <div id="massEditContainer" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header contentsBackground">
                <button aria-hidden="true" class="close " data-dismiss="modal" type="button"><span aria-hidden="true" class='fa fa-close'></span></button>
                <h4><?php echo vtranslate('Warnings','VTEStore');?>
 (<?php echo $_smarty_tpl->tpl_vars['WARNINGS']->value;?>
)</h4>
            </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
                <div name="massEditContent" style="overflow: hidden; width: auto; height: auto;">
                    <div class="modal-body tabbable">
                        <div >
                            <?php echo vtranslate('It is recommended to have php.ini values set as above.','VTEStore');?>

                        </div>
                        <div class="summaryWidgetContainer" style="border:1px solid #ccc;">
                            <div style="float: left;font-size: 15px;text-align: center;width: 100%; line-height: 28px;"><strong>PHP.ini Requirements:</strong></div>
                            <table cellspacing="2px" cellpadding="2px" style="width:100%">
                                <tr>
                                    <td width="200"></td>
                                    <td width="150"><strong><?php echo vtranslate('Current Value','VTEStore');?>
</strong></td>
                                    <td width="250"><strong><?php echo vtranslate('Minimum Requirement','VTEStore');?>
</strong></td>
                                    <td><strong><?php echo vtranslate('Recommended Value','VTEStore');?>
</strong></td>
                                </tr>
                                <tr style="color: <?php if ($_smarty_tpl->tpl_vars['default_socket_timeout']->value>=60){?>#009900<?php }else{ ?>#ff8000<?php }?>">
                                    <td>default_socket_timeout</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['default_socket_timeout']->value;?>
</td>
                                    <td>60</td>
                                    <td style="color: <?php if ($_smarty_tpl->tpl_vars['default_socket_timeout']->value<600){?>#ff8000<?php }else{ ?>#009900<?php }?>">600</td>
                                </tr>
                                <tr style="color: <?php if ($_smarty_tpl->tpl_vars['max_execution_time']->value>=60){?>#009900<?php }else{ ?>#ff8000<?php }?>">
                                    <td>max_execution_time</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['max_execution_time']->value;?>
</td>
                                    <td>60</td>
                                    <td style="color: <?php if ($_smarty_tpl->tpl_vars['max_execution_time']->value<600){?>#ff8000<?php }else{ ?>#009900<?php }?>">600</td>
                                </tr>
                                <tr style="color: <?php if ($_smarty_tpl->tpl_vars['max_input_time']->value>=60||$_smarty_tpl->tpl_vars['max_input_time']->value==-1){?>#009900<?php }else{ ?>#ff8000<?php }?>">
                                    <td>max_input_time</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['max_input_time']->value;?>
</td>
                                    <td>60</td>
                                    <td style="color: <?php if ($_smarty_tpl->tpl_vars['max_input_time']->value<600&&$_smarty_tpl->tpl_vars['max_input_time']->value!=-1){?>#ff8000<?php }else{ ?>#009900<?php }?>">600</td>
                                </tr>
                                <tr style="color: <?php if ($_smarty_tpl->tpl_vars['memory_limit']->value>=256){?>#009900<?php }else{ ?>#ff8000<?php }?>">
                                    <td>memory_limit</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['memory_limit']->value;?>
M</td>
                                    <td>256M</td>
                                    <td style="color: <?php if ($_smarty_tpl->tpl_vars['memory_limit']->value<1028){?>#ff8000<?php }else{ ?>#009900<?php }?>">1028M</td>
                                </tr>
                                <tr style="color: <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value>=12){?>#009900<?php }else{ ?>#ff8000<?php }?>">
                                    <td>post_max_size</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['post_max_size']->value;?>
M</td>
                                    <td>12M</td>
                                    <td style="color: <?php if ($_smarty_tpl->tpl_vars['post_max_size']->value<50){?>#ff8000<?php }else{ ?>#009900<?php }?>">50M</td>
                                </tr>
                                <tr style="color: <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value>=12){?>#009900<?php }else{ ?>#ff8000<?php }?>">
                                    <td>upload_max_filesize</td>
                                    <td><?php echo $_smarty_tpl->tpl_vars['upload_max_filesize']->value;?>
M</td>
                                    <td>12M</td>
                                    <td style="color: <?php if ($_smarty_tpl->tpl_vars['upload_max_filesize']->value<50){?>#ff8000<?php }else{ ?>#009900<?php }?>">50M</td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="text-align: center;">
                                        <a class="btn btn-primary" href="https://www.vtexperts.com/premium-extension-pack-php-ini-requirements/" target="_blank">Click here for php.ini instructions</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="summaryWidgetContainer" style="<?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['has_files_permissions']==1){?>width: 466px;<?php }else{ ?>width: 420px;<?php }?>height:185px;border:1px solid #ccc;margin: 20px 25px 0 0; float: left;">
                            <strong>File Permissions:</strong>
                            <br>Folder layouts/v7/modules: <?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['layouts_v7_modules']==1){?><font color="green">OK</font><?php }else{ ?><font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['VTVERSION']->value=='vt7'){?><br>Folder layouts/v7/modules: <?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['layouts_v7_modules']==1){?><font color="green">OK</font><?php }else{ ?><font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a><?php }?><?php }?>
                            <br>Folder modules: <?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['modules']==1){?><font color="green">OK</font><?php }else{ ?><font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a><?php }?>
                            <br>Folder user_privileges: <?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['user_privileges']==1){?><font color="green">OK</font><?php }else{ ?><font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a><?php }?>
                            <br>Folder test: <?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['test']==1){?><font color="green">OK</font><?php }else{ ?><font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a><?php }?>
                            <br>Folder test/templates_c/v7: <?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['test_templates_c_vlayout']==1){?><font color="green">OK</font><?php }else{ ?><font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a><?php }?>
                            <br>Folder test/vtlib: <?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['test_vtlib']==1){?><font color="green">OK</font><?php }else{ ?><font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a><?php }?>
                            <br>Folder storage: <?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['storage']==1){?><font color="green">OK</font><?php }else{ ?><font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a><?php }?>
                            <br>File tabdata.php: <?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['tabdata']==1){?><font color="green">OK</font><?php }else{ ?><font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a><?php }?>
                            <br>File config.inc.php: <?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['config']==1){?><font color="green">OK</font><?php }else{ ?><font color="red">$root_directory missing '/' at the end</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a><?php }?>
                        </div>
                        <div class="summaryWidgetContainer" style="<?php if ($_smarty_tpl->tpl_vars['MESSAGES']->value['has_files_permissions']==1){?>width: 375px;<?php }else{ ?>width: 420px;<?php }?>height:185px;border:1px solid #ccc;margin: 20px 0px 0 0; float: left;">
                            <strong>Users and Roles:</strong>
                            <br>User Ids Invalid Ids: <?php if (!empty($_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_invalid'])){?><font color="red"><?php echo implode(', ',$_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_invalid']);?>
 </font> <a class="user_ids_invalid" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsInvalid&userids=<?php echo implode(',',$_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_invalid']);?>
">Click here to fix</a><?php }else{ ?><font color="green">0</font><?php }?>
                            <br>User Ids Invalid Role: <?php if (!empty($_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_invalid_role'])){?><font color="red"><?php echo implode(', ',$_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_invalid_role']);?>
 </font> <a class="user_ids_invalid_role" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsInvalidRole&userids=<?php echo implode(',',$_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_invalid_role']);?>
">Click here to fix</a><?php }else{ ?><font color="green">0</font><?php }?>
                            <br>User Ids Missing sharing_file: <?php if (!empty($_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_missing_sharing_file'])){?><font color="red"><?php echo implode(', ',$_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_missing_sharing_file']);?>
 </font> <a class="user_ids_missing_file" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsMissingFile&userids=<?php echo implode(',',$_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_missing_sharing_file']);?>
">Click here to fix</a><?php }else{ ?><font color="green">0</font><?php }?>
                            <br>User Ids Missing privileges_file: <?php if (!empty($_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_missing_privileges_file'])){?><font color="red"><?php echo implode(', ',$_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_missing_privileges_file']);?>
 </font> <a class="user_ids_missing_file" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsMissingFile&userids=<?php echo implode(',',$_smarty_tpl->tpl_vars['MESSAGES']->value['user_ids_missing_privileges_file']);?>
">Click here to fix</a><?php }else{ ?><font color="green">0</font><?php }?>
                            
                        </div>
                        <div style="float: left;padding: 20px 0;text-align: center;width: 100%; line-height: 24px;">
                            Need help? Contact us - the support is free.<br>
                            Email: help@vtexperts.com<br>
                            Phone: +1 (818) 495-5557<br>
                            <a href="javascript:void(0);" onclick="window.open('https://v2.zopim.com/widget/livechat.html?&amp;key=1P1qFzYLykyIVMZJPNrXdyBilLpj662a=en', '_blank', 'location=yes,height=600,width=500,scrollbars=yes,status=yes');"> <img src="layouts/vlayout/modules/VTEStore/resources/images/livechat.png" style="height: 28px"></a><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="pull-right cancelLinkContainer" style="margin-top: 0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><strong><?php echo vtranslate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></a></div>
            </div>
        </div>
    </div>
</div>
<?php }} ?>