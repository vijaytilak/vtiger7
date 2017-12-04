<?php /* Smarty version Smarty-3.1.7, created on 2017-07-02 23:58:59
         compiled from "C:\xampp\htdocs\vtiger7\vtigercrm\includes\runtime/../../layouts/v7\modules\VTEStore\Faq.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26924595988c3a4a326-07050577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a7876f80c9897eb815fc2782891abeb968c4ea3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtiger7\\vtigercrm\\includes\\runtime/../../layouts/v7\\modules\\VTEStore\\Faq.tpl',
      1 => 1498800777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26924595988c3a4a326-07050577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USABILITY' => 0,
    'SUBSCRIPTION_HELP' => 0,
    'TROUBLESHOOTING' => 0,
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_595988c3a7509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595988c3a7509')) {function content_595988c3a7509($_smarty_tpl) {?><div id="globalmodal">
    <div id="massEditContainer" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header contentsBackground">
                <button aria-hidden="true" class="close " data-dismiss="modal" type="button"><span aria-hidden="true" class='fa fa-close'></span></button>
                <h4><?php echo vtranslate('FAQ','VTEStore');?>
</h4>
            </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
                <div name="massEditContent" style="overflow: hidden; width: auto; height: auto;">
                    <div class="modal-body tabbable">
                        <ul class="nav nav-tabs massEditTabs">
                            <li class="active"><a data-toggle="tab" href="#block_1"><strong><?php echo vtranslate('LBL_INSTALLATION','VTEStore');?>
</strong></a></li>
                            <li><a data-toggle="tab" href="#block_2"><strong><?php echo vtranslate('LBL_EXTENSION_DETAILS','VTEStore');?>
</strong></a></li>
                            <li><a data-toggle="tab" href="#block_3"><strong><?php echo vtranslate('LBL_USABILITY','VTEStore');?>
</strong></a></li>
                            <li><a data-toggle="tab" href="#block_4"><strong><?php echo vtranslate('Subscription_Help','VTEStore');?>
</strong></a></li>
                            <li><a data-toggle="tab" href="#block_5"><strong><?php echo vtranslate('Troubleshooting','VTEStore');?>
</strong></a></li>
                        </ul>
                        <div class="tab-content massEditContent">
                            <div id="block_1" class="tab-pane active" align="center"><img src="https://www.vtexperts.com/guides/guide1.png"></div>
                            <div id="block_2" class="tab-pane row-fluid" align="center"><img src="https://www.vtexperts.com/guides/guide2.png"></div>
                            <div id="block_3" class="tab-pane row-fluid" style="max-height: 500px; overflow-y: scroll;"><?php echo $_smarty_tpl->tpl_vars['USABILITY']->value;?>
</div>
                            <div id="block_4" class="tab-pane row-fluid" style="max-height: 500px; overflow-y: scroll;"><?php echo $_smarty_tpl->tpl_vars['SUBSCRIPTION_HELP']->value;?>
</div>
                            <div id="block_5" class="tab-pane row-fluid" style="max-height: 500px; overflow-y: scroll;"><?php echo $_smarty_tpl->tpl_vars['TROUBLESHOOTING']->value;?>
</div>
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