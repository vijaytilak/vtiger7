{*/*<!--
/*********************************************************************************
 * The content of this file is subject to the VTE Reports ("License");
 * You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is VTExperts.com
 * Portions created by VTExperts.com. are Copyright(C) VTExperts.com.
 * All Rights Reserved.
 ********************************************************************************/
-->*/*}

{strip}
	<div id="moveReportsContainer" class="modal-dialog">
		<div class="modal-header">
			<button data-dismiss="modal" class="close" title="{vtranslate('LBL_CLOSE')}">x</button>
			<h3>{vtranslate('LBL_MOVE_REPORT', $MODULE)}</h3>
		</div>
		<form class="form-horizontal contentsBackground" id="moveReports" method="post" action="index.php">
			<input type="hidden" name="module" value="{$MODULE}" />
			<input type="hidden" name="action" value="MoveReports" />
			<input type="hidden" name="selected_ids" value={ZEND_JSON::encode($SELECTED_IDS)} />
			<input type="hidden" name="excluded_ids" value={ZEND_JSON::encode($EXCLUDED_IDS)} />
			<input type="hidden" name="viewname" value="{$VIEWNAME}" />
			<div class="modal-body">
				<div class="row-fluid verticalBottomSpacing">
					<span class="span4">{vtranslate('LBL_FOLDERS_LIST', $MODULE)}<span class="redColor">*</span></span>
					<span class="span8 row-fluid">
						<select class="chzn-select span11" name="folderid">
							<optgroup label="{vtranslate('LBL_FOLDERS', $MODULE)}">
								{foreach item=FOLDER from=$FOLDERS}
									<option value="{$FOLDER->getId()}">{vtranslate($FOLDER->getName(), $MODULE)}</option>
								{/foreach}
							</optgroup>
						</select>
					</span>
				</div>
			</div>
			{include file='ModalFooter.tpl'|@vtemplate_path:$MODULE}
		</form>
	</div>
{/strip}