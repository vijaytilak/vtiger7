<?php /* Smarty version Smarty-3.1.7, created on 2017-06-30 05:43:22
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEReports\ListViewContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132305955e4fa7bf746-09970520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '127087858509aea699339f57394a978a01683329' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEReports\\ListViewContents.tpl',
      1 => 1498801374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132305955e4fa7bf746-09970520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGING_MODEL' => 0,
    'LISTVIEW_ENTRIES_COUNT' => 0,
    'LISTVIEW_COUNT' => 0,
    'PAGE_NUMBER' => 0,
    'MODULE' => 0,
    'ORDER_BY' => 0,
    'SORT_ORDER' => 0,
    'CURRENT_USER_MODEL' => 0,
    'WIDTHTYPE' => 0,
    'LISTVIEW_HEADERS' => 0,
    'COLUMN_NAME' => 0,
    'LISTVIEW_HEADER_KEY' => 0,
    'NEXT_SORT_ORDER' => 0,
    'SORT_IMAGE' => 0,
    'LISTVIEW_FILTER' => 0,
    'LISTVIEW_ENTRIES' => 0,
    'LISTVIEW_ENTRY' => 0,
    'LINK' => 0,
    'link_type' => 0,
    'QUALIFIED_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5955e4fa86fe5',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5955e4fa86fe5')) {function content_5955e4fa86fe5($_smarty_tpl) {?>
<style>
    .vte_link{
        border: none;
        padding: 3px 10px 3px 10px;
        color: #fff;
        box-shadow: 1px 1px 4px #DADADA;
        -moz-box-shadow: 1px 1px 4px #DADADA;
        -webkit-box-shadow: 1px 1px 4px #DADADA;
        border-radius: 3px;
        -webkit-border-radius: 3px;
        -moz-border-radius: 3px;
        margin-right: 5px;
    }
    .vte_edit_link{
        background-color: #FF8500;
    }
    .vte_del_link{
        background-color: #E51400;
    }
</style>
<input type="hidden" id="pageStartRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordStartRange();?>
" /><input type="hidden" id="pageEndRange" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getRecordEndRange();?>
" /><input type="hidden" id="previousPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isPrevPageExists();?>
" /><input type="hidden" id="nextPageExist" value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->isNextPageExists();?>
" /><input type="hidden" id="numberOfEntries" value= "<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
" /><input type="hidden" id="totalCount" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_COUNT']->value;?>
" /><input type='hidden' id='pageNumber' value="<?php echo $_smarty_tpl->tpl_vars['PAGE_NUMBER']->value;?>
" ><input type='hidden' id='pageLimit' value="<?php echo $_smarty_tpl->tpl_vars['PAGING_MODEL']->value->getPageLimit();?>
"><input type="hidden" id="noOfEntries" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value;?>
"><div id="selectAllMsgDiv" class="alert-block msgDiv hide"><strong><a id="selectAllMsg"><?php echo vtranslate('LBL_SELECT_ALL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;(<span id="totalRecordsCount"></span>)</a></strong></div><div id="deSelectAllMsgDiv" class="alert-block msgDiv hide"><strong><a id="deSelectAllMsg"><?php echo vtranslate('LBL_DESELECT_ALL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a></strong></div><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('ListViewActions.tpl',"VTEReports"), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<div class="listViewEntriesDiv contents-bottomscroll"><div class="bottomscroll-div"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ORDER_BY']->value;?>
" id="orderBy"><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['SORT_ORDER']->value;?>
" id="sortOrder"><p class="listViewLoadingMsg hide"><?php echo vtranslate('LBL_LOADING_LISTVIEW_CONTENTS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
........</p><?php $_smarty_tpl->tpl_vars['WIDTHTYPE'] = new Smarty_variable($_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('rowheight'), null, 0);?><table class="table table-container listViewEntriesTable"><thead><tr class="listViewHeaders"><th class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><input type="checkbox" id="listViewEntriesMainCheckBox"></th><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?><th nowrap <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last){?> colspan="2" <?php }?> class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><a href="javascript:void(0);" class="listViewHeaderValues" data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value){?><?php echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;?>
<?php }else{ ?>ASC<?php }?>" data-columnname="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value;?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value],$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value==$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value){?><img class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
 icon-white"><?php }?></a></th><?php } ?><th></th></tr></thead><tr class = "vte_fillter_row"><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"></td><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?><td nowrap <?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last){?> colspan="2" <?php }?> class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LISTVIEW_FILTER']->value[$_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value];?>
</td><?php } ?><td><button class="btn"  data-trigger="listSearch"><?php echo vtranslate('Search');?>
</button></td></tr><?php  $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listview']['index']=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->key => $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['listview']['index']++;
?><tr class="listViewEntries" data-id=<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
 data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
' id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_listView_row_<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['listview']['index']+1;?>
"><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
" class="listViewEntriesCheckBox"></td><?php  $_smarty_tpl->tpl_vars['LISTVIEW_HEADER'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = false;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_HEADERS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key => $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->value){
$_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->_loop = true;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->key;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration++;
 $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last = $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->iteration === $_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->total;
?><td nowrap class="listViewEntryValue"  width="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><a href="<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getDetailViewUrl();?>
"><?php echo vtranslate($_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->get($_smarty_tpl->tpl_vars['LISTVIEW_HEADER_KEY']->value),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</a><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_HEADER']->last){?></td><td nowrap width="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" colspan="2"><div class="pull-right actions"><span class="actionImages"><?php  $_smarty_tpl->tpl_vars['LINK'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['LINK']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getRecordLinks(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->key => $_smarty_tpl->tpl_vars['LINK']->value){
$_smarty_tpl->tpl_vars['LINK']->_loop = true;
?><?php $_smarty_tpl->tpl_vars['link_type'] = new Smarty_variable($_smarty_tpl->tpl_vars['LINK']->value->getIcon(), null, 0);?><?php if ($_smarty_tpl->tpl_vars['link_type']->value=="icon-pencil"){?><a  class="vte_edit_link vte_link" href=<?php echo $_smarty_tpl->tpl_vars['LINK']->value->getUrl();?>
><?php echo vtranslate("Edit",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php }?><?php if ($_smarty_tpl->tpl_vars['link_type']->value=="icon-trash"){?><a class="deleteRecordButton vte_del_link vte_link" onclick="VTEReports_List_Js.listInstance.deleteVteReport('<?php echo $_smarty_tpl->tpl_vars['LISTVIEW_ENTRY']->value->getId();?>
')"><?php echo vtranslate("Delete",$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a><?php }?><?php } ?></span></div></td><?php }?></td><?php } ?></tr><?php } ?></table><!--added this div for Temporarily --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value=='0'){?><table class="emptyRecordsDiv"><tbody><tr><td><?php $_smarty_tpl->tpl_vars['SINGLE_MODULE'] = new Smarty_variable("SINGLE_".($_smarty_tpl->tpl_vars['MODULE']->value), null, 0);?><?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 <?php echo vtranslate('LBL_FOUND');?>
.</td></tr></tbody></table><?php }?></div></div>
<script type="text/javascript">
    var listViewContentsContainer = jQuery('#listViewContent');
    vtUtils.applyFieldElementsView(listViewContentsContainer);
</script><?php }} ?>