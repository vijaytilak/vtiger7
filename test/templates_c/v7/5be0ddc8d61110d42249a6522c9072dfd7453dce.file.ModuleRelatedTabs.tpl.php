<?php /* Smarty version Smarty-3.1.7, created on 2017-12-12 02:05:39
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Vtiger\ModuleRelatedTabs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83855a2f3973be6eb8-15587178%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5be0ddc8d61110d42249a6522c9072dfd7453dce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\ModuleRelatedTabs.tpl',
      1 => 1505965327,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83855a2f3973be6eb8-15587178',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DETAILVIEW_LINKS' => 0,
    'MODULE_NAME' => 0,
    'engagementEnabledModules' => 0,
    'RELATED_LINK' => 0,
    'RECORD' => 0,
    'RELATEDLINK_LABEL' => 0,
    'RELATED_TAB_LABEL' => 0,
    'SELECTED_TAB_LABEL' => 0,
    'RELATEDLINK_URL' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'RELATEDTABS' => 0,
    'COUNT' => 0,
    'LIMIT' => 0,
    'COUNT1' => 0,
    'i' => 0,
    'RELATEDMODULENAME' => 0,
    'SELECTED_RELATION_ID' => 0,
    'DETAILVIEWRELATEDLINKLBL' => 0,
    'RELATEDFIELDNAME' => 0,
    'MORE_TAB_ACTIVE' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a2f397413d7b',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a2f397413d7b')) {function content_5a2f397413d7b($_smarty_tpl) {?>

<div class='related-tabs row'><ul class="nav nav-tabs"><?php  $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWTAB']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_LINK']->key => $_smarty_tpl->tpl_vars['RELATED_LINK']->value){
$_smarty_tpl->tpl_vars['RELATED_LINK']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['engagementEnabledModules'] = new Smarty_variable(array('Accounts','Contacts','Leads'), null, 0);?><?php if (in_array($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['engagementEnabledModules']->value)&&(trim($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel())=='LBL_UPDATES')){?><?php $_smarty_tpl->tpl_vars['RELATEDLINK_URL'] = new Smarty_variable(((("index.php?view=Detail&mode=showHistory&page=1&module=").($_smarty_tpl->tpl_vars['MODULE_NAME']->value)).("&record=")).($_smarty_tpl->tpl_vars['RECORD']->value->getId()), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL'] = new Smarty_variable("LBL_HISTORY", null, 0);?><?php $_smarty_tpl->tpl_vars['RELATED_TAB_LABEL'] = new Smarty_variable("LBL_HISTORY", null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['RELATEDLINK_URL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(), null, 0);?><?php ob_start();?><?php echo vtranslate(('SINGLE_').($_smarty_tpl->tpl_vars['MODULE_NAME']->value),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['RELATED_TAB_LABEL'] = new Smarty_variable((($_tmp1).(" ")).($_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value), null, 0);?><?php }?><li class="tab-item <?php if ($_smarty_tpl->tpl_vars['RELATED_TAB_LABEL']->value==$_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_URL']->value;?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_TAB_LABEL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value;?>
" data-link-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkKey');?>
" ><a href="<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_URL']->value;?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis"><span class="tab-label"><strong><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
<?php $_tmp2=ob_get_clean();?><?php echo vtranslate($_smarty_tpl->tpl_vars['RELATEDLINK_LABEL']->value,$_tmp2);?>
</strong></span></a></li><?php } ?><?php $_smarty_tpl->tpl_vars['RELATEDTABS'] = new Smarty_variable($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWRELATED'], null, 0);?><?php $_smarty_tpl->tpl_vars['COUNT'] = new Smarty_variable(count($_smarty_tpl->tpl_vars['RELATEDTABS']->value), null, 0);?><?php $_smarty_tpl->tpl_vars['LIMIT'] = new Smarty_variable(10, null, 0);?><?php if ($_smarty_tpl->tpl_vars['COUNT']->value>10){?><?php $_smarty_tpl->tpl_vars['COUNT1'] = new Smarty_variable($_smarty_tpl->tpl_vars['LIMIT']->value, null, 0);?><?php }else{ ?><?php $_smarty_tpl->tpl_vars['COUNT1'] = new Smarty_variable($_smarty_tpl->tpl_vars['COUNT']->value, null, 0);?><?php }?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT1']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['COUNT1']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="tab-item <?php if ((trim($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel())==trim($_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value))&&($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_smarty_tpl->tpl_vars['SELECTED_RELATION_ID']->value)){?>active<?php }?>"  data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?> title <?php }else{ ?> title="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount="" ><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><span class="tab-label" ><strong><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</strong></span>&nbsp;<?php }else{ ?><span class="tab-icon"><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><i class="vicon-<?php echo strtolower($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value);?>
" ></i></span><?php }?><span class="numberCircle hide">0</span></a></li><?php ob_start();?><?php echo $_REQUEST['relationId'];?>
<?php $_tmp3=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_tmp3)){?><?php $_smarty_tpl->tpl_vars['MORE_TAB_ACTIVE'] = new Smarty_variable('true', null, 0);?><?php }?><?php }} ?><?php if ($_smarty_tpl->tpl_vars['MORE_TAB_ACTIVE']->value!='true'){?><?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int)ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT']->value-1+1 - (0) : 0-($_smarty_tpl->tpl_vars['COUNT']->value-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0){
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++){
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['i']->value], null, 0);?><?php ob_start();?><?php echo $_REQUEST['relationId'];?>
<?php $_tmp4=ob_get_clean();?><?php if (($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_tmp4)){?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="more-tab moreTabElement active"  data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?> title <?php }else{ ?> title="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
"<?php }?> <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" class="textOverflowEllipsis" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount="" ><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><span class="tab-label" ><strong><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</strong></span>&nbsp;<?php }else{ ?><span class="tab-icon"><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><i class="vicon-<?php echo strtolower($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value);?>
" ></i></span><?php }?><span class="numberCircle hide">0</span></a></li><?php break 1?><?php }?><?php }} ?><?php }?><?php if ($_smarty_tpl->tpl_vars['COUNT']->value>$_smarty_tpl->tpl_vars['LIMIT']->value){?><li class="dropdown related-tab-more-element"><a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle"><span class="tab-label"><strong><?php echo vtranslate("LBL_MORE",$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong> &nbsp; <b class="fa fa-caret-down"></b></span></a><ul class="dropdown-menu pull-right" id="relatedmenuList"><?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int)ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? $_smarty_tpl->tpl_vars['COUNT']->value-1+1 - ($_smarty_tpl->tpl_vars['COUNT1']->value) : $_smarty_tpl->tpl_vars['COUNT1']->value-($_smarty_tpl->tpl_vars['COUNT']->value-1)+1)/abs($_smarty_tpl->tpl_vars['j']->step));
if ($_smarty_tpl->tpl_vars['j']->total > 0){
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['COUNT1']->value, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++){
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?><?php $_smarty_tpl->tpl_vars['RELATED_LINK'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATEDTABS']->value[$_smarty_tpl->tpl_vars['j']->value], null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDMODULENAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName(), null, 0);?><?php $_smarty_tpl->tpl_vars['RELATEDFIELDNAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkFieldName'), null, 0);?><?php $_smarty_tpl->tpl_vars["DETAILVIEWRELATEDLINKLBL"] = new Smarty_variable(vtranslate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><li class="more-tab <?php if ((trim($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel())==trim($_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value))&&($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId()==$_smarty_tpl->tpl_vars['SELECTED_RELATION_ID']->value)){?>active<?php }?>" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
"data-module="<?php echo $_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value;?>
" title="" data-relation-id="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value){?>data-relatedfield ="<?php echo $_smarty_tpl->tpl_vars['RELATEDFIELDNAME']->value;?>
"<?php }?>><a href="index.php?<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
" displaylabel="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" recordsCount=""><?php if ($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value=="ModComments"){?><span class="tab-label textOverflowEllipsis"><strong><?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</strong></span>&nbsp;<?php }else{ ?><?php $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL'] = new Smarty_variable(Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value), null, 0);?><span class="tab-icon textOverflowEllipsis"><i class="vicon-<?php echo strtolower($_smarty_tpl->tpl_vars['RELATEDMODULENAME']->value);?>
"></i><span class="content"> &nbsp;<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
</span></span><?php }?><span class="numberCircle hide">0</span></a></li><?php }} ?></ul></li><?php }?></ul></div><?php }} ?>