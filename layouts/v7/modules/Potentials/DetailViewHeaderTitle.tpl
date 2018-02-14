{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
{strip}
    {*vijay*}
    <div class="recordBasicInfo col-sm-7 col-lg-7 col-md-7">
    <div class="record-header">
        <div class="row">
            <div class="col-md-2 hidden-sm hidden-xs" style="max-width: 110px;">
                <div class="recordImage bgpotentials app-{$SELECTED_MENU_CATEGORY}" style="position: unset">
                    <div class="name"><span><strong> <i class="vicon-potentials"></i> </strong></span></div>
                </div>
            </div>
            <div class="col-md-10 padding0px">
                <div class="visible-sm-block visible-xs-block" style="height: 70px"></div>

                    <h3 title="{$RECORD->getName()}" style="margin-top: 0px">
                        {foreach item=NAME_FIELD from=$MODULE_MODEL->getNameFields()}
                            {assign var=FIELD_MODEL value=$MODULE_MODEL->getField($NAME_FIELD)}
                            {if $FIELD_MODEL->getPermissions()}
                                <span class="{$NAME_FIELD}">{$RECORD->get($NAME_FIELD)}</span>&nbsp;
                            {/if}
                        {/foreach}
                    </h3>
                    {include file="DetailViewHeaderFieldsView.tpl"|vtemplate_path:$MODULE}

            </div>
        </div>

    </div>
    </div>
{/strip}

{*{assign var=RELATED_TO value=$RECORD->get('related_to')}
{if !empty($RELATED_TO)}
<div class="row info-row">
<div class="col-lg-7 fieldLabel">
    <span class="muted" title="{vtranslate($FIELD_MODEL->get('label'),$MODULE)} : {$RECORD->getDisplayValue('related_to')}">
    {$RECORD->getDisplayValue('related_to')}</span>
</div>
</div>
{/if}

<div class="info-row row">
{assign var=FIELD_MODEL value=$MODULE_MODEL->getField('email')}
<div class="col-lg-7 fieldLabel">
<span class="email" title="{vtranslate($FIELD_MODEL->get('label'),$MODULE)} : {$RECORD->get('email')}">
    {$RECORD->getDisplayValue("email")}
</span>
</div>
</div>

<div class="info-row row">
{assign var=FIELD_MODEL value=$MODULE_MODEL->getField('amount')}
<div class="col-lg-7 fieldLabel">
<span class="amount" title="{vtranslate($FIELD_MODEL->get('label'),$MODULE)} : {$RECORD->get('amount')}">
    {$RECORD->getDisplayValue("amount")}
</span>
</div>
</div>

<div class="info-row row">
{assign var=FIELD_MODEL value=$MODULE_MODEL->getField('sales_stage')}
<div class="col-lg-7 fieldLabel">
<span class="salesstage" title="{vtranslate($FIELD_MODEL->get('label'),$MODULE)} : {$RECORD->get('sales_stage')}">{$RECORD->get('sales_stage')}</span>
</div>
</div>*}