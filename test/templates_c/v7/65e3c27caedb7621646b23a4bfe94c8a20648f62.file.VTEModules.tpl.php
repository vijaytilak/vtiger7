<?php /* Smarty version Smarty-3.1.7, created on 2017-06-30 05:34:01
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEStore\VTEModules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:67205955e2c9436fd3-04420729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65e3c27caedb7621646b23a4bfe94c8a20648f62' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEStore\\VTEModules.tpl',
      1 => 1498800777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67205955e2c9436fd3-04420729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SEARCHMODE' => 0,
    'SEARCH_KEY' => 0,
    'STORECATS' => 0,
    'STORECAT' => 0,
    'VTEMODULES' => 0,
    'VTEMODULE' => 0,
    'VTMODULES' => 0,
    'imageSource' => 0,
    'previewImages' => 0,
    'previewImage' => 0,
    'CUSTOMERLOGINED' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5955e2c94d4a1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5955e2c94d4a1')) {function content_5955e2c94d4a1($_smarty_tpl) {?>
<script type="text/javascript" src="layouts/v7/modules/VTEStore/resources/fancybox/jquery.mousewheel-3.0.4.pack.js"></script><script type="text/javascript" src="layouts/v7/modules/VTEStore/resources/fancybox/jquery.fancybox-1.3.4.pack.js"></script><link rel="stylesheet" type="text/css" href="layouts/v7/modules/VTEStore/resources/fancybox/jquery.fancybox-1.3.4.css" media="screen" /><style>.module_wrapper {position: relative;padding: 0;width:100%;display:block;}.module_short_description {position: absolute;top: 0;color:#000;background-color:rgb(245,245,245);width: 100%; height:150px;padding:2%;border: 1px solid #ececec;  text-align: justify;line-height:18px;z-index: 10;opacity: 0;font-size:12px;-webkit-transition: all 0.5s ease;-moz-transition: all 0.5s ease;-o-transition: all 0.5s ease;transition: all 0.5s ease;overflow: scroll;overflow-x: hidden;}.module_short_description::-webkit-scrollbar {width: 6px;height: 6px;}.module_short_description::-webkit-scrollbar-button:start:decrement,.module_short_description::-webkit-scrollbar-button:end:increment {display: block;}.module_short_description::-webkit-scrollbar-button:vertical:start:increment,.module_short_description::-webkit-scrollbar-button:vertical:end:decrement {display: none;}.module_short_description::-webkit-scrollbar-thumb:vertical {height: 50px;opacity: 0.2;background-color: rgb(51, 51, 51);}.module_short_description:hover {opacity:1;}.icon-video {background:url("layouts/v7/modules/VTEStore/resources/images/video.png") no-repeat top center; display:inline-block;display: inline-block;height: 34px;width: 40px;background-size: 34px;}.row-fluid{margin-bottom: 2.2%;}</style><input type="hidden" name="searchmode" id="searchmode" value="<?php echo $_smarty_tpl->tpl_vars['SEARCHMODE']->value;?>
"/><input type="hidden" name="search_key" id="search_key" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH_KEY']->value;?>
"/><div class="row-fluid"><?php if (empty($_smarty_tpl->tpl_vars['STORECATS']->value)){?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo vtranslate('LBL_NO_EXTENSIONS_FOUND','VTEStore');?>
</td></tr></tbody></table><?php }else{ ?><?php  $_smarty_tpl->tpl_vars['STORECAT'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['STORECAT']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['STORECATS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['STORECAT']->key => $_smarty_tpl->tpl_vars['STORECAT']->value){
$_smarty_tpl->tpl_vars['STORECAT']->_loop = true;
?><div class="clearfix"></div><div ><h3><u><?php echo $_smarty_tpl->tpl_vars['STORECAT']->value['store_category_name'];?>
</u></h3><?php echo $_smarty_tpl->tpl_vars['STORECAT']->value['store_category_desc'];?>
<br><br></div><div class="clearfix"></div><div class="row-fluid"><?php $_smarty_tpl->tpl_vars['VTEMODULES'] = new Smarty_variable($_smarty_tpl->tpl_vars['STORECAT']->value['extensions'], null, 0);?><?php  $_smarty_tpl->tpl_vars['VTEMODULE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VTEMODULE']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['VTEMODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['extensions']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['VTEMODULE']->key => $_smarty_tpl->tpl_vars['VTEMODULE']->value){
$_smarty_tpl->tpl_vars['VTEMODULE']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['extensions']['index']++;
?><div class="col-md-4"><div class="extension_container extensionWidgetContainer"><div><div class="font-x-x-large boxSizingBorderBox" style="cursor:pointer"><table style="width: 100%"><tr><td><h4><?php echo $_smarty_tpl->tpl_vars['VTEMODULE']->value->module_label;?>
</h4></td><td style="text-align: right"><?php if ($_smarty_tpl->tpl_vars['VTEMODULE']->value->setting_url!=''&&in_array($_smarty_tpl->tpl_vars['VTEMODULE']->value->module_name,$_smarty_tpl->tpl_vars['VTMODULES']->value)){?><a href="<?php echo $_smarty_tpl->tpl_vars['VTEMODULE']->value->setting_url;?>
" target="_blank"><img src="layouts/v7/modules/VTEStore/resources/images/setting.png" style="width: 25px; height: 25px;"/></a><?php }?></td></tr></table></div><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['VTEMODULE']->value->module_name;?>
" name="extensionName"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['VTEMODULE']->value->id;?>
" name="extensionId"><input type="hidden" value="<?php if (in_array($_smarty_tpl->tpl_vars['VTEMODULE']->value->module_name,$_smarty_tpl->tpl_vars['VTMODULES']->value)){?>Upgrade<?php }else{ ?>Install<?php }?>" name="moduleAction"></div><div><div class="row-fluid" style="overflow: hidden; background-color: #FAFAFA; max-height:175px"><a href="index.php?module=VTEStore&parent=Settings&view=Settings&mode=getModuleDetail&extensionId=<?php echo $_smarty_tpl->tpl_vars['VTEMODULE']->value->id;?>
&extensionName=<?php echo $_smarty_tpl->tpl_vars['VTEMODULE']->value->module_name;?>
" class="module_wrapper"><div class="module_short_description slimScrollDiv" id="short_description_<?php echo $_smarty_tpl->tpl_vars['VTEMODULE']->value->id;?>
" style=""><?php echo preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['VTEMODULE']->value->short_description);?>
</div><?php if ($_smarty_tpl->tpl_vars['VTEMODULE']->value->image!=''){?><?php $_smarty_tpl->tpl_vars['imageSource'] = new Smarty_variable($_smarty_tpl->tpl_vars['VTEMODULE']->value->image, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['imageSource'] = new Smarty_variable('layouts/v7/skins/images/unavailable.png', null, 0);?><?php }?><img style="border:2px solid #ececec; max-width: 100% !important; width: 100% !important; height: 150px; cursor: hand" src="<?php echo $_smarty_tpl->tpl_vars['imageSource']->value;?>
" /></a></div><div class="row-fluid"><div class="text-right"><a class="grouped_elements" href="<?php echo $_smarty_tpl->tpl_vars['VTEMODULE']->value->image;?>
" rel="group<?php echo $_smarty_tpl->tpl_vars['VTEMODULE']->value->id;?>
"><button class="btn btn-warning" style="margin-right:5px;"><?php echo vtranslate('LBL_PREVIEW','VTEStore');?>
</button></a><div style="display: none"><?php $_smarty_tpl->tpl_vars['previewImages'] = new Smarty_variable(explode("||",$_smarty_tpl->tpl_vars['VTEMODULE']->value->preview_image), null, 0);?><?php  $_smarty_tpl->tpl_vars['previewImage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['previewImage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['previewImages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['previewImage']->key => $_smarty_tpl->tpl_vars['previewImage']->value){
$_smarty_tpl->tpl_vars['previewImage']->_loop = true;
?><a class="grouped_elements" rel="group<?php echo $_smarty_tpl->tpl_vars['VTEMODULE']->value->id;?>
" href="<?php echo $_smarty_tpl->tpl_vars['previewImage']->value;?>
"></a><?php } ?></div>
                                            <script>
                                                jQuery("a.grouped_elements, a.iframe").fancybox();
                                            </script>
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['VTEMODULE']->value->extvideolink;?>
" class="btn iframe various icon-video" ></a><button class="btn btnMoreDetail addButton" style="margin: 0px 8px;"><?php echo vtranslate('LBL_MORE_DETAILS','VTEStore');?>
</button><?php if (in_array($_smarty_tpl->tpl_vars['VTEMODULE']->value->module_name,$_smarty_tpl->tpl_vars['VTMODULES']->value)){?><button class="btn btn <?php if ($_smarty_tpl->tpl_vars['CUSTOMERLOGINED']->value>0){?>authenticated<?php }else{ ?>loginRequired<?php }?>"><?php echo vtranslate('LBL_INSTALLED','VTEStore');?>
</button><?php }else{ ?><button class="oneclickInstallFree btn <?php if ($_smarty_tpl->tpl_vars['CUSTOMERLOGINED']->value>0){?>btn-success authenticated<?php }else{ ?>loginRequired<?php }?>" data-svn="stable"><?php echo vtranslate('LBL_INSTALL','VTEStore');?>
</button><?php }?></div><div class="clearfix"></div></div></div></div></div><?php if (($_smarty_tpl->getVariable('smarty')->value['foreach']['extensions']['index']+1)%3==0){?><div class="clearfix"></div></div><div class="row-fluid"><?php }?><?php } ?></div><?php } ?><?php }?></div>


    <script>
        jQuery(document).ready(function() {
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
        });
    </script>
<?php }} ?>