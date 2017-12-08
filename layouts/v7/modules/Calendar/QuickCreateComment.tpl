{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}
{* modules/Calendar/views/QuickCreateCommentAjax.php *}
{strip}
<div class="modal-dialog modelContainer">
	{assign var=TITLE value='Please add a comment'}
	{include file="ModalHeader.tpl"|vtemplate_path:$MODULE TITLE=$TITLE}
	<form class="form-horizontal commentCreateView" id="commentQuickCreate" name="commentQuickCreate" method="post" action="index.php">
		<div class="modal-body">
			<input type="hidden" name="module" value="{$MODULE}">
			<input type="hidden" name="action" value="SaveCommentAjax" />
			<input type="hidden" name="mode" value="createCommentEvent">
			<input type="hidden" name="record" value="{$RECORD_MODEL->get('id')}" />

			<div class="row">
				<div class="col-sm-12">
					<div class="col-sm-4 fieldLabel" style="padding-top:1%">
						<label class="pull-right">
							Tell us about the {strtolower($RECORD_MODEL->get('activitytype'))}?
						</label>
					</div>
					<div class="col-sm-6 fieldValue">
						<div>
							<div class="input-group inputElement" style="margin-bottom: 3px">
								<textarea class="no-border" rows="10" cols="50" name="comment"></textarea>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		{assign var=BUTTON_NAME value='Add Comment'}
		{include file="ModalFooter.tpl"|vtemplate_path:$MODULE}
	</form>
</div>
{/strip}
