<div id="globalmodal">
    <div id="massEditContainer" class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header contentsBackground">
                <button aria-hidden="true" class="close " data-dismiss="modal" type="button"><span aria-hidden="true" class='fa fa-close'></span></button>
                <h4>{vtranslate('Warnings', 'VTEStore')} ({$WARNINGS})</h4>
            </div>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: auto;">
                <div name="massEditContent" style="overflow: hidden; width: auto; height: auto;">
                    <div class="modal-body tabbable">
                        <div >
                            {vtranslate('It is recommended to have php.ini values set as above.','VTEStore')}
                        </div>
                        <div class="summaryWidgetContainer" style="border:1px solid #ccc;">
                            <div style="float: left;font-size: 15px;text-align: center;width: 100%; line-height: 28px;"><strong>PHP.ini Requirements:</strong></div>
                            <table cellspacing="2px" cellpadding="2px" style="width:100%">
                                <tr>
                                    <td width="200"></td>
                                    <td width="150"><strong>{vtranslate('Current Value','VTEStore')}</strong></td>
                                    <td width="250"><strong>{vtranslate('Minimum Requirement','VTEStore')}</strong></td>
                                    <td><strong>{vtranslate('Recommended Value','VTEStore')}</strong></td>
                                </tr>
                                <tr style="color: {if $default_socket_timeout>=60}#009900{else}#ff8000{/if}">
                                    <td>default_socket_timeout</td>
                                    <td>{$default_socket_timeout}</td>
                                    <td>60</td>
                                    <td style="color: {if $default_socket_timeout<600}#ff8000{else}#009900{/if}">600</td>
                                </tr>
                                <tr style="color: {if $max_execution_time>=60}#009900{else}#ff8000{/if}">
                                    <td>max_execution_time</td>
                                    <td>{$max_execution_time}</td>
                                    <td>60</td>
                                    <td style="color: {if $max_execution_time<600}#ff8000{else}#009900{/if}">600</td>
                                </tr>
                                <tr style="color: {if $max_input_time>=60 || $max_input_time==-1}#009900{else}#ff8000{/if}">
                                    <td>max_input_time</td>
                                    <td>{$max_input_time}</td>
                                    <td>60</td>
                                    <td style="color: {if $max_input_time<600 && $max_input_time!=-1}#ff8000{else}#009900{/if}">600</td>
                                </tr>
                                <tr style="color: {if $memory_limit>=256}#009900{else}#ff8000{/if}">
                                    <td>memory_limit</td>
                                    <td>{$memory_limit}M</td>
                                    <td>256M</td>
                                    <td style="color: {if $memory_limit<1028}#ff8000{else}#009900{/if}">1028M</td>
                                </tr>
                                <tr style="color: {if $post_max_size>=12}#009900{else}#ff8000{/if}">
                                    <td>post_max_size</td>
                                    <td>{$post_max_size}M</td>
                                    <td>12M</td>
                                    <td style="color: {if $post_max_size<50}#ff8000{else}#009900{/if}">50M</td>
                                </tr>
                                <tr style="color: {if $upload_max_filesize>=12}#009900{else}#ff8000{/if}">
                                    <td>upload_max_filesize</td>
                                    <td>{$upload_max_filesize}M</td>
                                    <td>12M</td>
                                    <td style="color: {if $upload_max_filesize<50}#ff8000{else}#009900{/if}">50M</td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="text-align: center;">
                                        <a class="btn btn-primary" href="https://www.vtexperts.com/premium-extension-pack-php-ini-requirements/" target="_blank">Click here for php.ini instructions</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="summaryWidgetContainer" style="{if $MESSAGES.has_files_permissions==1}width: 466px;{else}width: 420px;{/if}height:185px;border:1px solid #ccc;margin: 20px 25px 0 0; float: left;">
                            <strong>File Permissions:</strong>
                            <br>Folder layouts/v7/modules: {if $MESSAGES.layouts_v7_modules==1}<font color="green">OK</font>{else}<font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a>{/if}
                            {if $VTVERSION=='vt7'}<br>Folder layouts/v7/modules: {if $MESSAGES.layouts_v7_modules==1}<font color="green">OK</font>{else}<font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a>{/if}{/if}
                            <br>Folder modules: {if $MESSAGES.modules==1}<font color="green">OK</font>{else}<font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a>{/if}
                            <br>Folder user_privileges: {if $MESSAGES.user_privileges==1}<font color="green">OK</font>{else}<font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a>{/if}
                            <br>Folder test: {if $MESSAGES.test==1}<font color="green">OK</font>{else}<font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a>{/if}
                            <br>Folder test/templates_c/v7: {if $MESSAGES.test_templates_c_vlayout==1}<font color="green">OK</font>{else}<font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a>{/if}
                            <br>Folder test/vtlib: {if $MESSAGES.test_vtlib==1}<font color="green">OK</font>{else}<font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a>{/if}
                            <br>Folder storage: {if $MESSAGES.storage==1}<font color="green">OK</font>{else}<font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a>{/if}
                            <br>File tabdata.php: {if $MESSAGES.tabdata==1}<font color="green">OK</font>{else}<font color="red">Insufficient permissions</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a>{/if}
                            <br>File config.inc.php: {if $MESSAGES.config==1}<font color="green">OK</font>{else}<font color="red">$root_directory missing '/' at the end</font> <a href="https://www.vtexperts.com/vtiger-extension-insufficient-permissions/" target="_blank"> More details</a>{/if}
                        </div>
                        <div class="summaryWidgetContainer" style="{if $MESSAGES.has_files_permissions==1}width: 375px;{else}width: 420px;{/if}height:185px;border:1px solid #ccc;margin: 20px 0px 0 0; float: left;">
                            <strong>Users and Roles:</strong>
                            <br>User Ids Invalid Ids: {if !empty($MESSAGES.user_ids_invalid)}<font color="red">{', '|implode:$MESSAGES.user_ids_invalid} </font> <a class="user_ids_invalid" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsInvalid&userids={','|implode:$MESSAGES.user_ids_invalid}">Click here to fix</a>{else}<font color="green">0</font>{/if}
                            <br>User Ids Invalid Role: {if !empty($MESSAGES.user_ids_invalid_role)}<font color="red">{', '|implode:$MESSAGES.user_ids_invalid_role} </font> <a class="user_ids_invalid_role" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsInvalidRole&userids={','|implode:$MESSAGES.user_ids_invalid_role}">Click here to fix</a>{else}<font color="green">0</font>{/if}
                            <br>User Ids Missing sharing_file: {if !empty($MESSAGES.user_ids_missing_sharing_file)}<font color="red">{', '|implode:$MESSAGES.user_ids_missing_sharing_file} </font> <a class="user_ids_missing_file" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsMissingFile&userids={','|implode:$MESSAGES.user_ids_missing_sharing_file}">Click here to fix</a>{else}<font color="green">0</font>{/if}
                            <br>User Ids Missing privileges_file: {if !empty($MESSAGES.user_ids_missing_privileges_file)}<font color="red">{', '|implode:$MESSAGES.user_ids_missing_privileges_file} </font> <a class="user_ids_missing_file" data-url="index.php?module=VTEStore&action=ActionAjax&mode=userIdsMissingFile&userids={','|implode:$MESSAGES.user_ids_missing_privileges_file}">Click here to fix</a>{else}<font color="green">0</font>{/if}
                            {*<br>User Ids sharing_file syntax errors: {if !empty($MESSAGES.user_ids_sharing_file_syntax_errors)}<font color="red">{', '|implode:$MESSAGES.user_ids_sharing_file_syntax_errors}</font>{else}<font color="green">0</font>{/if}
                            <br>User Ids privileges_file syntax errors: {if !empty($MESSAGES.user_ids_privileges_file_syntax_errors)}<font color="red">{', '|implode:$MESSAGES.user_ids_privileges_file_syntax_errors} </font> {else}<font color="green">0</font>{/if}*}
                        </div>
                        <div style="float: left;padding: 20px 0;text-align: center;width: 100%; line-height: 24px;">
                            Need help? Contact us - the support is free.<br>
                            Email: help@vtexperts.com<br>
                            Phone: +1 (818) 495-5557<br>
                            <a href="javascript:void(0);" onclick="window.open('https://v2.zopim.com/widget/livechat.html?&amp;key=1P1qFzYLykyIVMZJPNrXdyBilLpj662a=en', '_blank', 'location=yes,height=600,width=500,scrollbars=yes,status=yes');"> <img src="layouts/vlayout/modules/VTEStore/resources/images/livechat.png" style="height: 28px"></a><br>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="pull-right cancelLinkContainer" style="margin-top: 0px;"><a class="cancelLink" type="reset" data-dismiss="modal"><strong>{vtranslate('LBL_CLOSE', $MODULE)}</strong></a></div>
            </div>
        </div>
    </div>
</div>
