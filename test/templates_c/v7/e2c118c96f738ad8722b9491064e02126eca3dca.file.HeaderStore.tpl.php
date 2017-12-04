<?php /* Smarty version Smarty-3.1.7, created on 2017-06-30 05:34:01
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEStore\HeaderStore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168355955e2c930a597-25593234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2c118c96f738ad8722b9491064e02126eca3dca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEStore\\HeaderStore.tpl',
      1 => 1498800777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168355955e2c930a597-25593234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CUSTOMERLOGINED' => 0,
    'CUSTOMER_STATUS' => 0,
    'CUSTOMER_DATA' => 0,
    'CUSTOMERDATA' => 0,
    'WARNINGS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5955e2c9338f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5955e2c9338f1')) {function content_5955e2c9338f1($_smarty_tpl) {?>

<table>
    <tr>
        <?php if ($_smarty_tpl->tpl_vars['CUSTOMERLOGINED']->value>0){?>
            <td style="padding-left: 5px;">
                <input type="hidden" id="customer_status" name="customer_status" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER_STATUS']->value;?>
">
                <input type="hidden" id="customer_data" name="customer_data" value="<?php echo $_smarty_tpl->tpl_vars['CUSTOMER_DATA']->value;?>
">
                <input type="hidden" id="getChargifyInfo" name="getChargifyInfo" value="">
                <?php if ($_smarty_tpl->tpl_vars['CUSTOMER_STATUS']->value=='trial_expired'){?>
                    <a href="javascript:void(0)" class="ManageSubscription"><font color="red"><strong><?php echo vtranslate('TRIAL_EXPIRED','VTEStore');?>
</strong></font></a>
                <?php }elseif($_smarty_tpl->tpl_vars['CUSTOMER_STATUS']->value=='no_subscription'){?>
                    <a href="javascript:void(0)" class="ManageSubscription"><font color="red"><strong><?php echo vtranslate('NO_SUBSCRIPTION','VTEStore');?>
 <?php echo $_smarty_tpl->tpl_vars['CUSTOMERDATA']->value['remain_date'];?>
 <?php echo vtranslate('days','VTEStore');?>
. <?php echo vtranslate('Please click here to sign up','VTEStore');?>
</strong></font> </a>
                <?php }elseif($_smarty_tpl->tpl_vars['CUSTOMER_STATUS']->value=='subscription_expired'){?>
                    <a href="javascript:void(0)" class="ManageSubscription"><font color="red"><strong><?php echo vtranslate('SUBSCRIPTION_EXPIRED','VTEStore');?>
</strong></font></a>
                <?php }?>
            </td>
        <?php }?>
        <td style="padding-left: 5px;">
            <a href="javascript:void(0);" onclick="window.open('https://v2.zopim.com/widget/livechat.html?&key=1P1qFzYLykyIVMZJPNrXdyBilLpj662a=en', '_blank', 'location=yes,height=600,width=500,scrollbars=yes,status=yes');"> <img src="layouts/v7/modules/VTEStore/resources/images/livechat.png"/></a>
        </td>

        <?php if ($_smarty_tpl->tpl_vars['WARNINGS']->value>0){?>
            <td style="padding-left: 5px;"><button id="phpiniWarnings" name="phpiniWarnings" class="btn btn-danger"><?php echo vtranslate('Warnings','VTEStore');?>
 (<?php echo $_smarty_tpl->tpl_vars['WARNINGS']->value;?>
)</button></td>
        <?php }?>
        <td style="padding-left: 5px;"><button id="FaqLink" name="FaqLink" class="btn btn-warning VTEStoreFAQ"><?php echo vtranslate('FAQ','VTEStore');?>
</button></td>
        <?php if ($_smarty_tpl->tpl_vars['CUSTOMERLOGINED']->value>0){?>
            <td style="padding-left: 5px;"><button id="MyAccountLink" name="MyAccountLink" class="btn btn-success"><?php echo vtranslate('LBL_MY_ACCOUNT','VTEStore');?>
</button></td>
            <td style="padding-left: 5px;"><button id="logoutVTEStore" class="btn btn-primary"><?php echo vtranslate('LBL_LOGOUT','VTEStore');?>
</button></td>
        <?php }else{ ?>
            <td style="padding-left: 5px;"><button id="logintoVTEStore" class="btn btn-primary"><?php echo vtranslate('LBL_LOGIN_TO_VTE_STORE','VTEStore');?>
</button></td>
        <?php }?>
    </tr>
</table><?php }} ?>