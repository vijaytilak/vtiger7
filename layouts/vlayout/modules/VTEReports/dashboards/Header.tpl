{*/*<!--
/*********************************************************************************
 * The content of this file is subject to the VTE Reports ("License");
 * You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is VTExperts.com
 * Portions created by VTExperts.com. are Copyright(C) VTExperts.com.
 * All Rights Reserved.
 ********************************************************************************/
-->*/*}

{foreach key=index item=cssModel from=$STYLES}
	<link rel="{$cssModel->getRel()}" href="{$cssModel->getHref()}" type="{$cssModel->getType()}" media="{$cssModel->getMedia()}" />
{/foreach}
{foreach key=index item=jsModel from=$SCRIPTS}
	<script type="{$jsModel->getType()}" src="{$jsModel->getSrc()}"></script>
{/foreach}

<table width="100%" cellspacing="0" cellpadding="0">
	<tbody>
		<tr>
			<td class="span5">
				<div class="dashboardTitle textOverflowEllipsis" title="{vtranslate($WIDGET->getTitle(), $MODULE_NAME)}" style="width: auto;">
                                    <b>&nbsp;&nbsp;{vtranslate($WIDGET->getTitle(), $MODULE_NAME)}</b>&nbsp;&nbsp;
                                    <button type='button' class='btn' onclick='window.location.href = "{$detailViewUrl}";'><strong>{vtranslate('LBL_VIEW_DETAILS',"VTEReports")}</strong></button>
                                </div>
                                {*<div style="text-align:center">
                                  <button type='button' class='btn' onclick='window.location.href = "{$detailViewUrl}";'><strong>{vtranslate('LBL_VIEW_DETAILS',"VTEReports")}</strong></button>
                                </div>*}

			</td>
			<td class="refresh span2" align="right">
				<span style="position:relative;">&nbsp;</span>
			</td>
			<td class="widgeticons span5" align="right">
				<div class="box pull-right">
					{include file="dashboards/DashboardHeaderIcons.tpl"|@vtemplate_path:"Vtiger"}
				</div>
			</td>
		</tr>
	</tbody>
</table>
