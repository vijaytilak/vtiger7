<?php /* Smarty version Smarty-3.1.7, created on 2017-06-30 05:34:01
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEStore\Settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65145955e2c90dbd02-45981711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64af02a014263855eec4b9b1f313cca8da907b67' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEStore\\Settings.tpl',
      1 => 1498800777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65145955e2c90dbd02-45981711',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_CUSTOM_HEADER' => 0,
    'SEARCH_KEY' => 0,
    'SEARCHMODE' => 0,
    'SEARCH_FILTER' => 0,
    'EXT_CAGETORIES' => 0,
    'EXT_CAGETORIE' => 0,
    'EXTENSIONS_INSTALLED' => 0,
    'CUSTOMERLOGINED' => 0,
    'GO_TO_EXTENSION_LIST' => 0,
    'MEMBERSHIP_ACTIVATED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5955e2c918c3f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5955e2c918c3f')) {function content_5955e2c918c3f($_smarty_tpl) {?>
<link href="layouts/v7/modules/VTEStore/resources/ui-choose.css" rel="stylesheet" />
<script src="layouts/v7/modules/VTEStore/resources/ui-choose.js"></script>
<script src="layouts/v7/modules/VTEStore/resources/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="layouts/v7/modules/VTEStore/resources/fancybox215/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="layouts/v7/modules/VTEStore/resources/fancybox215/jquery.fancybox.css?v=2.1.5" media="screen" />
<style>
    .control-group{
        margin-bottom: 10px !important;
    }
    .btn{
        padding: 5px 10px!important;
    }
</style>
<div class="container-fluid">
    <div class="widget_header row-fluid">
        <table width="100%">
            <tr>
            <?php if ($_smarty_tpl->tpl_vars['USE_CUSTOM_HEADER']->value>0){?>
                <td><a href="index.php?module=VTEStore&parent=Settings&view=Settings&reset=1"><h5 style="font-weight: bold; font-size: 20px;"><?php echo vtranslate('MODULE_LBL_CUSTOM','VTEStore');?>
</h5></a></td>
                <td style="float: right"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('HeaderStoreCustom.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
            <?php }else{ ?>
                <td><a href="index.php?module=VTEStore&parent=Settings&view=Settings&reset=1"><h5 style="font-weight: bold; font-size: 20px;"><?php echo vtranslate('MODULE_LBL','VTEStore');?>
</h5></a></td>
                <td style="float: right"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('HeaderStore.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td>
            <?php }?>
            </tr>
        </table>
    </div>
    <hr>
    <div class="clearfix"></div>
    <div class="summaryWidgetContainer" id="VTEStore_settings">
        <div class="container-fluid" id="importModules">
            <div class="row-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" id="searchExtension" class="listSearchContributor inputElement" placeholder="<?php echo vtranslate('LBL_SEARCH_FOR_AN_EXTENSION','VTEStore');?>
" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
"/>
                    </div>
                    <div class="col-md-6">
                        <button id="btnSearchExtension" class="btn btn-default"><?php echo vtranslate('LBL_SEARCH','VTEStore');?>
</button>
                        <span id="reset_search_value"><?php if ($_smarty_tpl->tpl_vars['SEARCHMODE']->value==1){?><?php echo vtranslate('LBL_FILTER','VTEStore');?>
: <?php echo $_smarty_tpl->tpl_vars['SEARCH_FILTER']->value;?>
 <u><a href="index.php?module=VTEStore&parent=Settings&view=Settings&reset=1">(<?php echo vtranslate('LBL_CLICK_TO_RESET_THE_SEARCH','VTEStore');?>
)</a></u><?php }?></span>
                        <input type="hidden" id="selectedCagetories" name="selectedCagetories">
                    </div>
                </div>
                <div class="row hide">
                    <h4 style="padding-bottom: 10px;"><?php echo vtranslate('LBL_SELECT_CATEGORY','VTEStore');?>
</h4>
                    <select class="ui-choose" multiple="multiple" id="extension_categories">
                        <?php  $_smarty_tpl->tpl_vars['EXT_CAGETORIE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['EXT_CAGETORIE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['EXT_CAGETORIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['EXT_CAGETORIE']->key => $_smarty_tpl->tpl_vars['EXT_CAGETORIE']->value){
$_smarty_tpl->tpl_vars['EXT_CAGETORIE']->_loop = true;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['EXT_CAGETORIE']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['EXT_CAGETORIE']->value->name;?>
</option>
                        <?php } ?>
                    </select>
                </div>
                <br>
            </div>
            </div>

            <div class="contents" id="extensionContainer">
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('VTEModules.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>

            <!-- My Account start-->
            <div class="modal-dialog MyAccount hide">
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MyAccount.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
            <!-- My Account end -->

            <!-- Login form  start-->
            <div class="modal-dialog loginAccount hide">
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Login.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
            <!-- Login form end -->

            <!-- Signup form  start-->
            <div class="modal-dialog signUpAccount hide">
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SignUp.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
            <!-- Signup form  end-->

            <!-- My Account start-->
            <div class="modal-dialog ManageSubscription hide">
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ManageSubscription.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
            <!-- My Account end -->

            <!-- Forgot Password form  start-->
            <div class="modal-dialog forgotPassword hide">
                <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ForgotPassword.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

            </div>
            <!-- Signup form  end-->
        
            <div class="clearfix"></div>
        </div>
        
        <div class="row">
            <div class="col-md-12 text-right" style="margin-bottom: 50px;">
                <?php if ($_smarty_tpl->tpl_vars['EXTENSIONS_INSTALLED']->value){?>
                <button style="display: inline-block; margin-right: 18px;" id="uninstallAllExtensions" class="btn btn-danger <?php if ($_smarty_tpl->tpl_vars['CUSTOMERLOGINED']->value>0){?>authenticated<?php }else{ ?>loginRequired<?php }?> uninstallAllExtensions"><?php echo vtranslate('LBL_UNINSTALL_ALL_EXTENSIONS','VTEStore');?>
</button>
                <div class="dropdown" style="display: inline-block; margin-right: 18px;">
                    <button class="btn btn-warning dropdown-toggle <?php if ($_smarty_tpl->tpl_vars['CUSTOMERLOGINED']->value>0){?> authenticated<?php }else{ ?>loginRequired<?php }?>" type="button" data-toggle="dropdown"><?php echo vtranslate('LBL_UPGRADE_ALL_EXTENSIONS','VTEStore');?>

                    <span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li class="upgradeAllExtensions" data-message="<?php echo vtranslate('LBL_MESSAGE_INSTALLED_UPGRAGE_ALL_TO_STABLE','VTEStore');?>
" data-svn="stable"><a href="javascript: void(0);"><?php echo vtranslate('LBL_INSTALLED_UPGRAGE_TO_STABLE','VTEStore');?>
</a></li>
                        <li class="divider"></li>
                        <li class="upgradeAllExtensions" data-message="<?php echo vtranslate('LBL_MESSAGE_INSTALLED_UPGRAGE_ALL_TO_LASTEST','VTEStore');?>
" data-svn="lastest"><a href="javascript: void(0);"><?php echo vtranslate('LBL_INSTALLED_UPGRAGE_TO_LASTEST','VTEStore');?>
</a></li>
                        <li class="divider"></li>
                        <li class="regenerateLicenseAll" data-message="<?php echo vtranslate('LBL_MESSAGE_REGENERATE_LICENSE_ALL','VTEStore');?>
"><a href="javascript: void(0);"><?php echo vtranslate('LBL_REGENERATE_LICENSE','VTEStore');?>
</a></li>
                    </ul>
                </div>&nbsp;&nbsp;
                <?php }?>
                <button style="display: inline-block; margin-right: 18px;" id="UpgradeVTEStore" class="btn btn-success UpgradeVTEStore" data-message="<?php echo vtranslate('LBL_MESSAGE_UPGRAGE_VTE_STORE_TO_LASTEST','VTEStore');?>
"  data-svn="lastest"><?php echo vtranslate('LBL_UPGRADE_VTE_STORE','VTEStore');?>
</button>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>


    <script>
        // ui-choose
        jQuery('.ui-choose').ui_choose();
        // extension_categories select
        var extension_categories = jQuery('#extension_categories').ui_choose();
        extension_categories.change = function(value, item) {
            jQuery('#selectedCagetories').val(value.toString());
        };
        function openSiteInBackground(url){
            var frame = document.createElement("iframe");
            frame.src = url;
            frame.style.position = "relative";
            frame.style.left = "-9999px";
            document.body.appendChild(frame);
        }
    </script>

<?php if ($_smarty_tpl->tpl_vars['GO_TO_EXTENSION_LIST']->value==1){?><script>openSiteInBackground('https://www.vtexperts.com/vtiger-premium-go-to-extension-list.html');</script><?php }?>
<?php if ($_smarty_tpl->tpl_vars['MEMBERSHIP_ACTIVATED']->value==1){?><script>openSiteInBackground('https://www.vtexperts.com/vtiger-premium-membership-activated.html');</script><?php }?><?php }} ?>