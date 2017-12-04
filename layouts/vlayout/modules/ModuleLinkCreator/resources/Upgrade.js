/* ********************************************************************************
 * The content of this file is subject to the Module & Link Creator ("License");
 * You may not use this file except in compliance with the License
 * The Initial Developer of the Original Code is VTExperts.com
 * Portions created by VTExperts.com. are Copyright(C) VTExperts.com.
 * All Rights Reserved.
 * ****************************************************************************** */

/** @class ModuleLinkCreator_Upgrade_Js */
jQuery.Class("ModuleLinkCreator_Upgrade_Js", {}, {
    registerEventForUpgradeButton: function () {
        var that = this;
        jQuery('button[name="btnUpgrade"]').on('click', function () {
            var progressIndicatorElement = jQuery.progressIndicator({
                'message': 'Upgrading...',
                'position': 'html',
                'blockInfo': {
                    'enabled': true
                }
            });
            var params = {};
            params['module'] = app.getModuleName();
            params['action'] = 'Upgrade';
            params['mode'] = 'upgradeModule';

            AppConnector.request(params).then(
                function (data) {
                    progressIndicatorElement.progressIndicator({'mode': 'hide'});
                    if (data.success) {
                        var params = {};
                        params['text'] = 'Module Upgraded';
                        var params = {
                            text: 'Update Successful'
                        };
                        that.showNotify(params);
                    }
                },
                function (error) {
                    progressIndicatorElement.progressIndicator({'mode': 'hide'});
                    var params = {
                        text: 'Upgrade Failed'
                    };
                    that.showNotify(params);
                }
            );
        });
    },

    registerEventForReleaseButton: function () {
        var that = this;
        jQuery('button[name="btnRelease"]').on('click', function () {
            var progressIndicatorElement = jQuery.progressIndicator({
                'message': 'Release license...',
                'position': 'html',
                'blockInfo': {
                    'enabled': true
                }
            });
            var params = {};
            params['module'] = app.getModuleName();
            params['action'] = 'Upgrade';
            params['mode'] = 'releaseLicense';

            AppConnector.request(params).then(
                function (data) {
                    progressIndicatorElement.progressIndicator({'mode': 'hide'});
                    if (data.success) {
                        var params = {};
                        params['text'] = 'License Released';
                        Settings_Vtiger_Index_Js.showMessage(params);
                        document.location.href = "index.php?module=ModuleLinkCreator&view=List&mode=step2";
                    }
                },
                function (error) {
                    var params = {
                        text: 'Release License Failed'
                    };
                    that.showNotify(params);
                }
            );
        });
    },
    showNotify : function(customParams) {
        var params = {
            title : app.vtranslate('JS_MESSAGE'),
            text: customParams.text,
            animation: 'show',
            type: 'info'
        };
        Vtiger_Helper_Js.showPnotify(params);
    },
    registerEvents: function () {
        this.registerEventForUpgradeButton();
        this.registerEventForReleaseButton();
    }
});