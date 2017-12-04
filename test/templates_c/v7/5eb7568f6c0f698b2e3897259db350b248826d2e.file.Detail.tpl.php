<?php /* Smarty version Smarty-3.1.7, created on 2017-07-02 23:58:58
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEStore\Detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2271595988c2e6a906-35509946%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5eb7568f6c0f698b2e3897259db350b248826d2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEStore\\Detail.tpl',
      1 => 1498800777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2271595988c2e6a906-35509946',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USE_CUSTOM_HEADER' => 0,
    'ERROR' => 0,
    'MODULE_DETAIL' => 0,
    'VTMODULES' => 0,
    'CUSTOMERLOGINED' => 0,
    'MODULE' => 0,
    'previewImages' => 0,
    'previewImage' => 0,
    'k' => 0,
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_595988c361555',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595988c361555')) {function content_595988c361555($_smarty_tpl) {?>
<script src="layouts/v7/modules/VTEStore/resources/jquery.bxslider.min.js"></script><script type="text/javascript" src="layouts/v7/modules/VTEStore/resources/fancybox/jquery.fancybox-1.3.4.pack.js"></script><link rel="stylesheet" type="text/css" href="layouts/v7/modules/VTEStore/resources/fancybox/jquery.fancybox-1.3.4.css" media="screen" /><link rel="stylesheet" type="text/css" href="libraries/bootstrap/css/jqueryBxslider.css" media="screen" /><script type="text/javascript">$(document).ready(function() {$('.fancybox').fancybox();});</script><style>.bx-wrapper .bx-controls-direction a {z-index: 100;}.control-group{margin-bottom: 10px !important;}.nav-tabs li.active, .nav-tabs li:hover{border: 1px solid #ddd;border-bottom: 0;}body{background:#eeeff2 !important;}p.UpgradeTooltip {text-align:left;}</style><div class="container-fluid"><div class="widget_header row-fluid"><table width="100%"><tr><td><h3 style="margin: 0px 0px 10px 0px;"><a href="index.php?module=VTEStore&parent=Settings&view=Settings" class="btn btn-success"><?php echo vtranslate('LBL_BACK_TO_EXTENSION_LIST','VTEStore');?>
</a></h3></td><?php if ($_smarty_tpl->tpl_vars['USE_CUSTOM_HEADER']->value>0){?><td style="float: right"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('HeaderStoreCustom.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td><?php }else{ ?><td style="float: right"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('HeaderStore.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</td><?php }?></tr></table></div><hr style="border-bottom: 1px solid #fff;"><div class="container-fluid detailViewInfo extensionDetails" style='margin-top:0px;'><?php if ($_smarty_tpl->tpl_vars['ERROR']->value!='yes'){?><div class="row-fluid contentHeader extension_container"><div class="col-lg-6"><div style="margin-bottom: 5px;"><h4><?php echo $_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->module_label;?>
</h4><br><span><?php echo $_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->brief;?>
</span></div></div><div class="col-lg-6"><div class="pull-right extensionDetailActions"><input type="hidden" name="mode" value="<?php echo $_REQUEST['mode'];?>
" /><input type="hidden" name="extensionId" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->id;?>
" /><input type="hidden" name="extensionName" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->module_name;?>
" /><input type="hidden" name="moduleAction" value="<?php if (in_array($_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->module_name,$_smarty_tpl->tpl_vars['VTMODULES']->value)){?>Upgrade<?php }else{ ?>Install<?php }?>"><?php if (in_array($_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->module_name,$_smarty_tpl->tpl_vars['VTMODULES']->value)){?><a id="UpgradeTooltip" title="<?php echo vtranslate('LBL_UPGRADE_TOOLTIP','VTEStore');?>
" class="pull-left UpgradeTooltip" style="margin-right: 10px;"><i class="glyphicon glyphicon-question-sign" style="font-size: 20px; line-height: 30px;"></i> </a><div class="dropdown" style="display: inline-block;"><button class="btn btn-warning dropdown-toggle <?php if ($_smarty_tpl->tpl_vars['CUSTOMERLOGINED']->value>0){?> authenticated<?php }else{ ?>loginRequired<?php }?>" type="button" data-toggle="dropdown"><?php echo vtranslate('LBL_UPGRADE','VTEStore');?>
<span class="caret"></span></button><ul class="dropdown-menu"><li class="oneclickInstallFree" data-message="<?php echo vtranslate('LBL_MESSAGE_INSTALLED_UPGRAGE_TO_STABLE','VTEStore');?>
" data-svn="stable"><a href="javascript: void(0);"><?php echo vtranslate('LBL_INSTALLED_UPGRAGE_TO_STABLE','VTEStore');?>
</a></li><li class="divider"></li><li class="oneclickInstallFree" data-message="<?php echo vtranslate('LBL_MESSAGE_INSTALLED_UPGRAGE_TO_LASTEST','VTEStore');?>
" data-svn="lastest"><a href="javascript: void(0);"><?php echo vtranslate('LBL_INSTALLED_UPGRAGE_TO_LASTEST','VTEStore');?>
</a></li><li class="divider"></li><li class="oneclickRegenerateLicense" data-message="<?php echo vtranslate('LBL_MESSAGE_REGENERATE_LICENSE','VTEStore');?>
"><a href="javascript: void(0);"><?php echo vtranslate('LBL_REGENERATE_LICENSE','VTEStore');?>
</a></li></ul></div>&nbsp;&nbsp;<button class="btn btn <?php if ($_smarty_tpl->tpl_vars['CUSTOMERLOGINED']->value>0){?>authenticated<?php }else{ ?>loginRequired<?php }?>"><?php echo vtranslate('LBL_INSTALLED','VTEStore');?>
</button>&nbsp;&nbsp;<button id="uninstallExtension" class="btn btn-danger uninstallExtension"><?php echo vtranslate('LBL_UNINSTALL','VTEStore');?>
</button><?php }else{ ?><button class="oneclickInstallFree btn <?php if ($_smarty_tpl->tpl_vars['CUSTOMERLOGINED']->value>0){?>btn-success authenticated<?php }else{ ?>loginRequired<?php }?>" data-svn="stable"><?php echo vtranslate('LBL_INSTALL','VTEStore');?>
</button><?php }?><a class="cancelLink" type="reset" id="declineExtension" href="index.php?module=VTEStore&parent=Settings&view=Settings"><?php echo vtranslate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></div></div><div class="clearfix"></div></div><div class="tabbable margin0px" style="padding-bottom: 20px;"><ul id="extensionTab" class="nav nav-tabs" style="margin-bottom: 0px; padding-bottom: 0px;"><li class="active"><a href="#Overview" data-toggle="tab"><strong><?php echo vtranslate('LBL_OVERVIEW','VTEStore');?>
</strong></a></li><li><a href="#Features" data-toggle="tab"><strong><?php echo vtranslate('LBL_FEATURES','VTEStore');?>
</strong></a></li><li><a href="#LiveDemo" data-toggle="tab"><strong><?php echo vtranslate('LBL_LIVE_DEMO','VTEStore');?>
</strong></a></li><li><a href="#Updates" data-toggle="tab"><strong><?php echo vtranslate('LBL_UPDATES','VTEStore');?>
</strong></a></li><li><a href="#KnownIssues" data-toggle="tab"><strong><?php echo vtranslate('LBL_KNOWN_ISSUES','VTEStore');?>
</strong></a></li></ul><div class="tab-content row-fluid boxSizingBorderBox" style="background-color: #fff; padding: 20px; border: 3px solid #eeeff2; border-top-width: 0px; margin-left: 1px;"><div class="tab-pane active" id="Overview"><div class="col-lg-6"><span><?php echo $_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->short_description;?>
</span><br><br><a class="btn btn-warning various iframe" href="<?php echo $_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->extvideolink;?>
"><span class="glyphicon glyphicon-eye-open"></span><?php echo vtranslate('LBL_WATCH_A_DEMO','VTEStore');?>
</a><hr><span><?php echo vtranslate('LBL_CATEGORY','VTEStore');?>
</span><br><span><strong><?php echo $_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->category_name;?>
</strong></span></div><div class="col-lg-6 pull-right" style="padding-top: 0px; padding-right: 20px;"><?php $_smarty_tpl->tpl_vars['previewImages'] = new Smarty_variable(explode("||",$_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->preview_image), null, 0);?><ul class="bxslider"><?php  $_smarty_tpl->tpl_vars['previewImage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['previewImage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['previewImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['previewImage']->key => $_smarty_tpl->tpl_vars['previewImage']->value){
$_smarty_tpl->tpl_vars['previewImage']->_loop = true;
?><li><a class="fancybox" rel="example_group" title="" href="<?php echo $_smarty_tpl->tpl_vars['previewImage']->value;?>
" data-fancybox-group="gallery"><img src="<?php echo $_smarty_tpl->tpl_vars['previewImage']->value;?>
" style="width: 100%; height: 300px;"/></a></li><?php } ?></ul><div id="bx-pager"><?php  $_smarty_tpl->tpl_vars['previewImage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['previewImage']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['previewImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['previewImage']->key => $_smarty_tpl->tpl_vars['previewImage']->value){
$_smarty_tpl->tpl_vars['previewImage']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['previewImage']->key;
?><a data-slide-index="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" href=""><img src="<?php echo $_smarty_tpl->tpl_vars['previewImage']->value;?>
" style="width: 60px; height: 50px"/></a>&nbsp;<?php } ?></div></div><div class="clearfix"></div></div><div class="tab-pane row-fluid" id="Features"><?php echo $_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->features;?>
</div><div class="tab-pane row-fluid" id="LiveDemo"><?php echo $_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->live_demo;?>
</div><div class="tab-pane row-fluid" id="Updates"><?php echo $_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->updates;?>
</div><div class="tab-pane row-fluid" id="KnownIssues"><?php echo $_smarty_tpl->tpl_vars['MODULE_DETAIL']->value->knowissue;?>
</div></div></div><?php }else{ ?><div class="row-fluid" style="padding: 10px;"><h3><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
</h3></div><?php }?><!-- My Account start--><div class="modal-dialog MyAccount hide"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('MyAccount.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><!-- My Account end --><!-- Login form  start--><div class="modal-dialog loginAccount hide"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Login.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><!-- Login form end --><!-- Signup form  start--><div class="modal-dialog signUpAccount hide"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SignUp.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><!-- Signup form  end--><!-- My Account start--><div class="modal-dialog ManageSubscription hide"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ManageSubscription.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><!-- My Account end --><!-- My FAQ start--><div class="modal-dialog Faq hide"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('Faq.tpl','VTEStore'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div><!-- My FAQ end --></div>

<script>
    jQuery(document).ready(function() {
        $('.bxslider').bxSlider({
            pagerCustom: '#bx-pager',
            auto: true,
            autoControls: true
        });
        $('.bx-controls-auto').hide();

        //Watch video demo
        $(".various").fancybox({
            width    : 1280,
            height   : 720,
            fitToView   : false,
            autoSize    : false,
            closeClick  : false,
            openEffect  : 'elastic',
            closeEffect : 'none'
        });

        // Tooltip
        $("#UpgradeTooltip").tooltip({
            html: true,
            position: {
                my: "center bottom", // the "anchor point" in the tooltip element
                at: "center bottom" // the position of that anchor point relative to selected element
            }
        });
    });
</script>
<?php }} ?>