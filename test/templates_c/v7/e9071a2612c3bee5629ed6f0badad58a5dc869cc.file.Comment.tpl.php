<?php /* Smarty version Smarty-3.1.7, created on 2017-07-01 09:42:12
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\Vtiger\Comment.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629559576e7440a3a1-10320401%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9071a2612c3bee5629ed6f0badad58a5dc869cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\Vtiger\\Comment.tpl',
      1 => 1496723290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1629559576e7440a3a1-10320401',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'COMMENT' => 0,
    'IMAGE_PATH' => 0,
    'CREATOR_NAME' => 0,
    'ROLLUP_STATUS' => 0,
    'MODULE_NAME' => 0,
    'SINGULR_MODULE' => 0,
    'ENTITY_NAME' => 0,
    'CHILDS_ROOT_PARENT_MODEL' => 0,
    'COMMENTS_MODULE_MODEL' => 0,
    'CURRENTUSER' => 0,
    'CHILD_COMMENTS_MODEL' => 0,
    'CHILDS_ROOT_PARENT_ID' => 0,
    'PARENT_COMMENT_ID' => 0,
    'CHILD_COMMENTS_COUNT' => 0,
    'REASON_TO_EDIT' => 0,
    'FILE_DETAILS' => 0,
    'FILE_DETAIL' => 0,
    'FILE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_59576e7455e4e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59576e7455e4e')) {function content_59576e7455e4e($_smarty_tpl) {?>
<div class="commentDiv <?php if ($_smarty_tpl->tpl_vars['COMMENT']->value->get('is_private')){?>privateComment<?php }?>"><div class="singleComment"><input type="hidden" name="is_private" value="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('is_private');?>
"><div class="commentInfoHeader" data-commentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->getId();?>
" data-parentcommentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('parent_comments');?>
" data-relatedto = "<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('related_to');?>
"><?php $_smarty_tpl->tpl_vars['PARENT_COMMENT_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getParentCommentModel(), null, 0);?><?php $_smarty_tpl->tpl_vars['CHILD_COMMENTS_MODEL'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getChildComments(), null, 0);?><div class="row"><div class="col-lg-12"><div class="media"><div class="media-left title" id="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->getId();?>
"><?php $_smarty_tpl->tpl_vars['CREATOR_NAME'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedByName(), null, 0);?><div class="col-lg-2 recordImage commentInfoHeader" style ="width:50px; height:50px; font-size: 30px;" data-commentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->getId();?>
" data-parentcommentid="<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('parent_comments');?>
" data-relatedto = "<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('related_to');?>
"><?php $_smarty_tpl->tpl_vars['IMAGE_PATH'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getImagePath(), null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_PATH']->value)){?><img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_PATH']->value;?>
" width="100%" height="100%" align="left"><?php }else{ ?><div class="name"><span><strong> <?php echo substr($_smarty_tpl->tpl_vars['CREATOR_NAME']->value,0,2);?>
 </strong></span></div><?php }?></div></div><div class="media-body"><div class="comment" style="line-height:1;"><span class="creatorName" style="color:blue"><?php echo $_smarty_tpl->tpl_vars['CREATOR_NAME']->value;?>
</span>&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['ROLLUP_STATUS']->value&&$_smarty_tpl->tpl_vars['COMMENT']->value->get('module')!=$_smarty_tpl->tpl_vars['MODULE_NAME']->value){?><?php $_smarty_tpl->tpl_vars['SINGULR_MODULE'] = new Smarty_variable(('SINGLE_').($_smarty_tpl->tpl_vars['COMMENT']->value->get('module')), null, 0);?><?php $_smarty_tpl->tpl_vars['ENTITY_NAME'] = new Smarty_variable(getEntityName($_smarty_tpl->tpl_vars['COMMENT']->value->get('module'),array($_smarty_tpl->tpl_vars['COMMENT']->value->get('related_to'))), null, 0);?><span class="text-muted"><?php echo vtranslate('LBL_ON','Vtiger');?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['SINGULR_MODULE']->value,$_smarty_tpl->tpl_vars['COMMENT']->value->get('module'));?>
&nbsp;<a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('module');?>
&view=Detail&record=<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('related_to');?>
"><?php echo $_smarty_tpl->tpl_vars['ENTITY_NAME']->value[$_smarty_tpl->tpl_vars['COMMENT']->value->get('related_to')];?>
</a></span>&nbsp;&nbsp;<?php }?><div class=""><span class="commentInfoContent"><?php echo nl2br($_smarty_tpl->tpl_vars['COMMENT']->value->get('commentcontent'));?>
</span></div><br><div class="commentActionsContainer"><span class="commentActions"><?php if ($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value){?><?php $_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value->getId(), null, 0);?><?php }?><?php if ($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('EditView')){?><?php if ($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value){?><?php $_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID'] = new Smarty_variable($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_MODEL']->value->getId(), null, 0);?><?php }?><a href="javascript:void(0);" class="cursorPointer replyComment feedback" style="color: blue;"><?php echo vtranslate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php if ($_smarty_tpl->tpl_vars['CURRENTUSER']->value->getId()==$_smarty_tpl->tpl_vars['COMMENT']->value->get('userid')){?>&nbsp;&nbsp;&nbsp;<a href="javascript:void(0);" class="cursorPointer editComment feedback" style="color: blue;"><?php echo vtranslate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php }?><?php }?><?php $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT'] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getChildCommentsCount(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_MODEL']->value!=null&&($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID']->value!=$_smarty_tpl->tpl_vars['PARENT_COMMENT_ID']->value)){?><?php if ($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('EditView')){?>&nbsp;&nbsp;&nbsp;<?php }?><span class="viewThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
"><a href="javascript:void(0)" class="cursorPointer viewThread"><span class="childCommentsCount"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value==1){?><?php echo vtranslate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }?>&nbsp;</a></span><span class="hideThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
" style="display:none;"><a href="javascript:void(0)" class="cursorPointer hideThread"><span class="childCommentsCount"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value==1){?><?php echo vtranslate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }?>&nbsp;</a></span><?php }elseif($_smarty_tpl->tpl_vars['CHILD_COMMENTS_MODEL']->value!=null&&($_smarty_tpl->tpl_vars['CHILDS_ROOT_PARENT_ID']->value==$_smarty_tpl->tpl_vars['PARENT_COMMENT_ID']->value)){?><?php if ($_smarty_tpl->tpl_vars['COMMENTS_MODULE_MODEL']->value->isPermitted('EditView')){?>&nbsp;&nbsp;&nbsp;<?php }?><span class="viewThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
" style="display:none;"><a href="javascript:void(0)" class="cursorPointer viewThread"><span class="childCommentsCount"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value==1){?><?php echo vtranslate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }?>&nbsp;</a></span><span class="hideThreadBlock" data-child-comments-count="<?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
"><a href="javascript:void(0)" class="cursorPointer hideThread"><span class="childCommentsCount"><?php echo $_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value;?>
</span>&nbsp;<?php if ($_smarty_tpl->tpl_vars['CHILD_COMMENTS_COUNT']->value==1){?><?php echo vtranslate('LBL_REPLY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }else{ ?><?php echo vtranslate('LBL_REPLIES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
<?php }?>&nbsp;</a></span><?php }?></span><span class="commentTime text-muted cursorDefault" style="padding:20px;"><small title="<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedTime());?>
"><?php echo Vtiger_Util_Helper::formatDateDiffInStrings($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedTime());?>
</small></span></div><br><?php $_smarty_tpl->tpl_vars["REASON_TO_EDIT"] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->get('reasontoedit'), null, 0);?><div class="editedStatus" name="editStatus"><div class="<?php if (empty($_smarty_tpl->tpl_vars['REASON_TO_EDIT']->value)){?>hide<?php }?> editReason"><p class="text-muted"><small>[ <?php echo vtranslate('LBL_EDIT_REASON',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 ] : <span name="editReason" class="textOverflowEllipsis"><?php echo nl2br($_smarty_tpl->tpl_vars['REASON_TO_EDIT']->value);?>
</span></small></p></div><?php if ($_smarty_tpl->tpl_vars['COMMENT']->value->getCommentedTime()!=$_smarty_tpl->tpl_vars['COMMENT']->value->getModifiedTime()){?><p class="text-muted cursorDefault"><small><em><?php echo vtranslate('LBL_MODIFIED',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</em></small>&nbsp;<small title="<?php echo Vtiger_Util_Helper::formatDateTimeIntoDayString($_smarty_tpl->tpl_vars['COMMENT']->value->getModifiedTime());?>
" class="commentModifiedTime"><?php echo Vtiger_Util_Helper::formatDateDiffInStrings($_smarty_tpl->tpl_vars['COMMENT']->value->getModifiedTime());?>
</small></p><?php }?></div><div style="margin-top:5px;"><?php $_smarty_tpl->tpl_vars["FILE_DETAILS"] = new Smarty_variable($_smarty_tpl->tpl_vars['COMMENT']->value->getFileNameAndDownloadURL(), null, 0);?><?php  $_smarty_tpl->tpl_vars['FILE_DETAIL'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['FILE_DETAIL']->_loop = false;
 $_smarty_tpl->tpl_vars['index'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['FILE_DETAILS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['FILE_DETAIL']->key => $_smarty_tpl->tpl_vars['FILE_DETAIL']->value){
$_smarty_tpl->tpl_vars['FILE_DETAIL']->_loop = true;
 $_smarty_tpl->tpl_vars['index']->value = $_smarty_tpl->tpl_vars['FILE_DETAIL']->key;
?><?php $_smarty_tpl->tpl_vars["FILE_NAME"] = new Smarty_variable($_smarty_tpl->tpl_vars['FILE_DETAIL']->value['trimmedFileName'], null, 0);?><?php if (!empty($_smarty_tpl->tpl_vars['FILE_NAME']->value)){?><div class="row-fluid"><div class="span11 commentAttachmentName"><span class="filePreview"><a onclick="Vtiger_Detail_Js.previewFile(event,<?php echo $_smarty_tpl->tpl_vars['COMMENT']->value->get('id');?>
,<?php echo $_smarty_tpl->tpl_vars['FILE_DETAIL']->value['attachmentId'];?>
);" data-filename="<?php echo $_smarty_tpl->tpl_vars['FILE_NAME']->value;?>
" href="javascript:void(0)" name="viewfile"><span title="<?php echo $_smarty_tpl->tpl_vars['FILE_DETAIL']->value['rawFileName'];?>
" style="line-height:1.5em;"><?php echo $_smarty_tpl->tpl_vars['FILE_NAME']->value;?>
</span>&nbsp</a>&nbsp;<a name="downloadfile" href="<?php echo $_smarty_tpl->tpl_vars['FILE_DETAIL']->value['url'];?>
"><i title="<?php echo vtranslate('LBL_DOWNLOAD_FILE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" class="pull-left hide fa fa-download alignMiddle"></i></a></span></div></div><?php }?><?php } ?></div></div></div><hr></div></div></div></div></div></div><?php }} ?>