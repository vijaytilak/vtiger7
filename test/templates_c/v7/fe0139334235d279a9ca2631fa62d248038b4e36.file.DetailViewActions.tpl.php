<?php /* Smarty version Smarty-3.1.7, created on 2018-02-27 22:53:13
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Vtiger\DetailViewActions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7635a8e429a6a89b7-76248931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe0139334235d279a9ca2631fa62d248038b4e36' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\DetailViewActions.tpl',
      1 => 1519771989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7635a8e429a6a89b7-76248931',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5a8e429a74c8a',
  'variables' => 
  array (
    'RECORD' => 0,
    'MODULE_MODEL' => 0,
    'STARRED' => 0,
    'MODULE' => 0,
    'DETAILVIEW_LINKS' => 0,
    'MODULE_NAME' => 0,
    'DETAIL_VIEW_BASIC_LINK' => 0,
    'SELECTED_MENU_CATEGORY' => 0,
    'DETAIL_VIEW_LINK' => 0,
    'NO_PAGINATION' => 0,
    'PREVIOUS_RECORD_URL' => 0,
    'NEXT_RECORD_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8e429a74c8a')) {function content_5a8e429a74c8a($_smarty_tpl) {?>
<div class="col-lg-5 col-md-5 col-sm-5 detailViewButtoncontainer"><div class="pull-right btn-toolbar"><div class="btn-group"><?php $_smarty_tpl->tpl_vars['STARRED'] = new Smarty_variable($_smarty_tpl->tpl_vars['RECORD']->value->get('starred'), null, 0);?><?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->isStarredEnabled()){?><button class="btn btn-default markStar <?php if ($_smarty_tpl->tpl_vars['STARRED']->value){?> active <?php }?>" id="starToggle" style="width:100px;"><div class='starredStatus' title="<?php echo vtranslate('LBL_STARRED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><div class='unfollowMessage'><i class="fa fa-star-o"></i> &nbsp;<?php echo vtranslate('LBL_UNFOLLOW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div class='followMessage'><i class="fa fa-star active"></i> &nbsp;<?php echo vtranslate('LBL_FOLLOWING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><div class='unstarredStatus' title="<?php echo vtranslate('LBL_NOT_STARRED',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><?php echo vtranslate('LBL_FOLLOW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></button><?php }?><?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWBASIC']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->_loop = true;
?><button class="btn btn-default" id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_basicAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getLabel());?>
"<?php if ($_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->isPageLoadLink()){?>onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
'"<?php }else{ ?>onclick="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getUrl();?>
"<?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value=='Documents'&&$_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getLabel()=='LBL_VIEW_FILE'){?>data-filelocationtype="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->get('filelocationtype');?>
" data-filename="<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->get('filename');?>
"<?php }?>><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_BASIC_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button><?php } ?><?php if (count($_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEW'])>0){?><button class="btn btn-default dropdown-toggle" data-toggle="dropdown" href="javascript:void(0);"><?php echo vtranslate('LBL_MORE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
&nbsp;&nbsp;<i class="caret"></i></button><ul class="dropdown-menu dropdown-menu-right"><?php  $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEW']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->key => $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value){
$_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel()==''){?><li class="divider"></li><?php }else{ ?><li id="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
_detailView_moreAction_<?php echo Vtiger_Util_Helper::replaceSpaceWithUnderScores($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel());?>
"><?php if (strstr($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getUrl(),"javascript")){?><a href='<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getUrl();?>
'><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php }else{ ?><a href='<?php echo $_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
' ><?php echo vtranslate($_smarty_tpl->tpl_vars['DETAIL_VIEW_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php }?></li><?php }?><?php } ?></ul><?php }?></div><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['NO_PAGINATION']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if (!$_tmp1){?><div class="btn-group pull-right"><button class="btn btn-default " id="detailViewPreviousRecordButton" <?php if (empty($_smarty_tpl->tpl_vars['PREVIOUS_RECORD_URL']->value)){?> disabled="disabled" <?php }else{ ?> onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['PREVIOUS_RECORD_URL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
'" <?php }?> ><i class="fa fa-chevron-left"></i></button><button class="btn btn-default  " id="detailViewNextRecordButton"<?php if (empty($_smarty_tpl->tpl_vars['NEXT_RECORD_URL']->value)){?> disabled="disabled" <?php }else{ ?> onclick="window.location.href = '<?php echo $_smarty_tpl->tpl_vars['NEXT_RECORD_URL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
'" <?php }?>><i class="fa fa-chevron-right"></i></button></div><?php }?><?php if ($_smarty_tpl->tpl_vars['MODULE']->value=='Potentials'){?><div class="row"><div class="col-md-12 textAlignCenter" style="border: 1px solid #eee; background:#fcfcfc; height:100%"><?php if (empty($_smarty_tpl->tpl_vars['RECORD']->value->get('cf_1528'))){?><a id="createTeamDriveBtn" href="#" class="btn btn-warning marginTop10px marginBottom10px" data-opportunity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" onclick="Vtiger_Detail_Js.createTeamDrive(this)"><i title="Create Team Drive" class="fa fa-folder-open"></i>&nbsp;&nbsp;Create Team Drive Folder</a><?php }else{ ?><a href="#" class="btn btn-primary marginTop10px marginBottom10px" data-team-drive-folder-id="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('cf_1528');?>
" data-opportunity-record="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
" onclick="Vtiger_Detail_Js.openTeamDrive(this)"><i title="Open Team Drive" class="fa fa-folder-open"></i>&nbsp;&nbsp;Open Team Drive Folder</a><?php }?></div></div><?php }?></div><input type="hidden" name="record_id" value="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->getId();?>
"></div><?php }} ?>