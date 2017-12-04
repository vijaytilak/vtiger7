<?php /* Smarty version Smarty-3.1.7, created on 2017-07-03 00:00:23
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\ModuleLinkCreator\ListViewPreProcess.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24090595989177044b5-61773995%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c03f3c927ad2e4578bb10daa7716b069348fa7d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\ModuleLinkCreator\\ListViewPreProcess.tpl',
      1 => 1499039997,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24090595989177044b5-61773995',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE' => 0,
    'MODULE_MODEL' => 0,
    'DEFAULT_FILTER_ID' => 0,
    'CVURL' => 0,
    'DEFAULT_FILTER_URL' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'CURRENT_USER_MODEL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5959891780016',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5959891780016')) {function content_5959891780016($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate ("modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="container-fluid app-nav">
    <div class="row">
        <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/SidebarHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        
        <div class="col-sm-12 col-xs-12 module-action-bar clearfix coloredBorderTop">
            <div class="module-action-content clearfix <?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
-module-action-content">
                <div class="col-lg-7 col-md-7 module-breadcrumb module-breadcrumb-<?php echo $_REQUEST['view'];?>
 transitionsAllHalfSecond">
                    <?php $_smarty_tpl->tpl_vars['MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultViewName()!='List'){?>
                        <?php $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultUrl(), null, 0);?>
                    <?php }else{ ?>
                        <?php $_smarty_tpl->tpl_vars['DEFAULT_FILTER_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultCustomFilter(), null, 0);?>
                        <?php if ($_smarty_tpl->tpl_vars['DEFAULT_FILTER_ID']->value){?>
                            <?php $_smarty_tpl->tpl_vars['CVURL'] = new Smarty_variable(("&viewname=").($_smarty_tpl->tpl_vars['DEFAULT_FILTER_ID']->value), null, 0);?>
                            <?php $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL'] = new Smarty_variable(($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl()).($_smarty_tpl->tpl_vars['CVURL']->value), null, 0);?>
                        <?php }else{ ?>
                            <?php $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrlWithAllFilter(), null, 0);?>
                        <?php }?>
                    <?php }?>
                    <a title="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" href='<?php echo $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
'><h4 class="module-title pull-left text-uppercase"> <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </h4>&nbsp;&nbsp;</a>
                </div>
            </div>
        </div>
    </div>
</div>
</nav>
<div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
    <div class="data">
    </div>
    <div class="modal-dialog">
    </div>
</div>
<div class="main-container main-container-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
">
    <?php $_smarty_tpl->tpl_vars['LEFTPANELHIDE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide'), null, 0);?>
    <div id="modnavigator" class="module-nav">
        <div class="hidden-xs hidden-sm mod-switcher-container">
            <?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("partials/Menubar.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

        </div>
    </div>
    <div class="listViewPageDiv content-area  full-width" id="listViewContent">

<?php }} ?>