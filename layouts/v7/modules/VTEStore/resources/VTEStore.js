jQuery(document).ready(function () {
    if(app.getParentModuleName()=='Settings') {
        // Get and show Extensions on VTiger Premium Panel
        var url = "index.php?module=VTEStore&action=ActionAjax&mode=getModuleInstalled&parent=Settings";
        app.request.post({'url': url}).then(
            function(err,data){
                if(err === null) {
                    var VTEExtensions = data.VTEExtensions;
                    var OtherSetting = data.OtherSetting;

                    // Hide all our extensions link on other setting panel
                    jQuery('.widgetContainer a[class*="menuItemLabel"]').each(function( index ) {
                        if(OtherSetting.use_custom_header==1 && jQuery(this).text()=='VTiger Premium'){
                            jQuery(this).text('Premium');
                        }
                        if(VTEExtensions.indexOf(jQuery(this).text())!==-1){
                            var parent=jQuery(this).closest('li');
                            parent.remove();
                        }
                    });

                    // Fill data to VTiger Premium panel
                    var newPannelHtml = [
                        "<div class='settingsgroup-panel panel panel-default instaSearch'>",
                            "<div id='newVtePrimiumPannel' class='app-nav' role='tab'>",
                                "<div class='app-settings-accordion'>",
                                    "<div class='settingsgroup-accordion'>",
                                        "<a data-toggle='collapse' data-parent='#accordion' class='collapsed' href='#newVtePrimiumPannelWidget'>",
                                            "<i class='indicator fa fa-chevron-right '></i>&nbsp;",
                                            "<span>VTiger Premium</span>",
                                        "</a>",
                                    "</div>",
                                "</div>",
                            "</div>",
                            "<div id='newVtePrimiumPannelWidget' class='panel-collapse collapse ulBlock'>",
                                "<ul class='list-group widgetContainer'>"].join('');
                    var settingLinks = data.settingLinks;
                    var settinglabels = data.settinglabels;
                    var total = settingLinks.length;
                    newPannelHtml += data.html;
                    for (var i = 0; i < total; i++){
                        newPannelHtml += [  "<li>",
                                                "<a data-name='" + settinglabels[i] +"' href='" + settingLinks[i]+"&openpremium=1" + "' class='menuItemLabel ' target='_blank'>" + settinglabels[i],
                                                    "<img id='23_menuItem' data-id='23' class='pinUnpinShortCut cursorPointer pull-right' data-actionurl='' data-pintitle='pin' data-unpintitle='Unpin' data-pinimageurl='layouts/v7/skins/images/pin.png' data-unpinimageurl='layouts/v7/skins/images/unpin.png' title='pin' src='layouts/v7/skins/images/pin.png' data-action='pin'>",
                                                "</a>",
                                            "</li>"].join('');
                    }
                    
                    newPannelHtml += "</ul></div></div>";
                    $("#accordion").append(newPannelHtml);

                    var params = app.convertUrlToDataParams(window.location.href);
                    if(app.getModuleName()=='VTEStore' || params.openpremium==1){
                        $("#newVtePrimiumPannel a[data-toggle='collapse']").trigger("click");
                    }

                    // Change label Vtiger Premium to Premium on left panel
                    if(OtherSetting.use_custom_header==1){
                        var VTEStoreBlock=jQuery("#newVtePrimiumPannel").hide();
                        var parent=jQuery(VTEStoreBlock).closest('div');
                        parent.hide();

                        jQuery('h5.widgetTextOverflowEllipsis').each(function( index ) {
                            if(jQuery(this).text()=='VTiger Premium'){
                                jQuery(this).text('Premium');
                            }
                        });
                    }
                }else{
                    app.helper.hideProgress();
                }
            }
        );

        // Hide "License & Upgrade", "Uninstall" for all our extension
        jQuery('.moduleblock ul.dropdown-menu li').each(function( index ) {
            var name = jQuery(this).text().trim().toLowerCase();
            if(name == 'license & upgrade' || name == 'uninstall'){
                this.remove();
            }
        });

        var url = window.location.href;
        if(url.indexOf('&parent=Settings&view=Upgrade')!=-1 || (url.indexOf('&parent=Settings')!=-1 && url.indexOf('&view=Upgrade')!=-1)){
            alert('Access Denied');
            jQuery('[name="btnRelease"]').prop('disabled', true);
            jQuery('[name="btnUpgrade"]').prop('disabled', true);
            window.location.href='index.php?module=VTEStore&parent=Settings&view=Settings&reset=1';
        }

    }

    addVTPremiumIcon();
    function addVTPremiumIcon(){
        var url = "index.php?module=VTEStore&action=ActionAjax&mode=getDataForVTPremiumIcon";
        app.request.post({'url': url}).then(
            function(err,data){
                if(err === null) {
                    var VTPremiumHeader = data.VTPremiumHeader;
                    if(VTPremiumHeader.showHeaderIcon==1){
                        var addLiTag=0;
                        var bgColor='ddd';
                        if(VTPremiumHeader.version=='1.0.0'){
                            var msg='VTiger Extension package installation has not been completed.';
                            var btn='<button class="btn btn-warning" style="margin-right:5px;" onclick="location.href=\'index.php?module=VTEStore&parent=Settings&view=Settings\'">Complete Install</button>';
                            addLiTag=1;
                        }else if(VTPremiumHeader.customerid==''){
                            var msg='VTiger Extension package has been installed. Please login/create an account to get started.';
                            var btn='<button class="btn btn-success" style="margin-right:5px;" onclick="location.href=\'index.php?module=VTEStore&parent=Settings&view=Settings\'">Login/Create Account</button>';
                            addLiTag=1;
                        }else if(VTPremiumHeader.customerid>0 && VTPremiumHeader.customer_status=='no_subscription'){
                            var msg='Your trial will expire in '+VTPremiumHeader.remain_date+' days. Make sure to try out all the extensions! If you have questions on need help email us at <br /> <a style="padding: 0px; width: 100%; text-align: center; display: inline-block; font-weight: bold;" href="mailto: help@vtexperts.com" target="_blank">help@vtexperts.com</a> <br /> or initiate chat on website <a style="padding: 0px;" href="https://www.vtexperts.com" target="_blank">vtexperts.com</a>';
                            var btn='<button class="btn btn-success" style="margin-right:5px;" onclick="location.href=\'index.php?module=VTEStore&parent=Settings&view=Settings\'">Go to Extension List</button>';
                            addLiTag=1;
                        }else if(VTPremiumHeader.customerid>0 && VTPremiumHeader.customer_status=='trial_expired'){
                            var bgColor='ff9966';
                            var msg='Your trial has expired. Please sign up in order to continue using premium extensions. If you would like us to extend your trial,please email us at <a style="padding: 0px; width: 100%; text-align: center; display: inline-block; font-weight: bold;" href="mailto: help@vtexperts.com" target="_blank">help@vtexperts.com</a>';
                            var btn='<button class="btn btn-success" style="margin-right:5px;" onclick="location.href=\'index.php?module=VTEStore&parent=Settings&view=Settings\'">Signup</button>';
                            addLiTag=1;
                        }

                        var VTPremiumIcon = '';

                        var headerIcons = $('#navbar ul.nav.navbar-nav');
                        if(addLiTag==1){
                            VTPremiumIcon =['<li>',
                                              '<div style="margin-top: 13px;" class="dropdown">',
                                                '<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="padding: 10px;">',
                                                  '<img style="width:25px; height:20px; border-radius: 50%; background-color: #'+bgColor+'" src="layouts/v7/modules/VTEStore/resources/images/VTPremiumIcon.png" >',
                                                '</a>',
                                                '<div class="dropdown-menu" role="menu">',
                                                  '<div class="row">',
                                                    '<div class="col-lg-12" style="min-width: 350px; padding: 10px 30px;">'+msg+'</div>',
                                                  '</div>',
                                                  '<div class="clearfix">',
                                                    '<hr style="margin: 10px 0 !important">',
                                                      '<div class="text-center">'+btn+'</div>',
                                                    '</div>',
                                                  '</div>',
                                                '</div>',
                                            '</li>'].join('');
                        }else{
                            VTPremiumIcon =[    '<li>',
                                                    '<div style="margin-top: 13px;" class="">',
                                                        '<a href="index.php?module=VTEStore&parent=Settings&view=Settings" role="button" style="padding: 10px;">',
                                                            '<img style="width:25px; height:20px; border-radius: 50%; background-color: #'+bgColor+'" src="layouts/v7/modules/VTEStore/resources/images/VTPremiumIcon.png" >',
                                                        '</a>',
                                                    '</div>',
                                                '</li>'].join('');
                        }
                        
                        if (headerIcons.length > 0){
                            headerIcons.first().prepend(VTPremiumIcon);
                        }
                    }
                }else{
                    app.helper.hideProgress();
                }
            }
        );
    }
    jQuery('body').on('click','.user_ids_invalid',function(){
        var url = jQuery(this).data('url');
        app.request.post({'url': url}).then(
            function(err,data) {
                if (err === null) {
                    var new_url = 'index.php?module=VTEStore&parent=Settings&view=Settings&mode=ShowWarnings';
                    showWarnings(new_url);
                } else {
                    app.helper.hideProgress();
                }
            }
        );
    });
    jQuery('body').on('click','.user_ids_invalid_role',function(){
        var url = jQuery(this).data('url');
        app.request.post({'url': url}).then(
            function(err,data) {
                if (err === null) {
                    var new_url = 'index.php?module=VTEStore&parent=Settings&view=Settings&mode=ShowWarnings';
                    showWarnings(new_url);
                } else {
                    app.helper.hideProgress();
                }
            }
        );
    });
    jQuery('body').on('click','.user_ids_missing_file',function(){
        var url = jQuery(this).data('url');
        app.request.post({'url': url}).then(
            function(err,data) {
                if (err === null) {
                    var new_url = 'index.php?module=VTEStore&parent=Settings&view=Settings&mode=ShowWarnings';
                    showWarnings(new_url);
                } else {
                    app.helper.hideProgress();
                }
            }
        );
    });
    function showWarnings(url) {
        var thisInstance = this;
        app.helper.hideModal();
        app.helper.showProgress();
        app.request.get({'url' :url}).then(function(err,resp) {
            app.helper.hideProgress();
            if(err === null) {
                app.helper.showModal(resp, {'cb' : function(modal) {}});
                app.helper.showSuccessNotification({'message':'Fixed!'});
            }
        })
    }
});