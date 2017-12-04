function remove_widget_on_dashboard(link_run){
    var li_parent = jQuery(link_run).closest('li')
    var link_id = li_parent.attr('id');
    var params = {
        'module' : 'VTEReports',
        'action' : "IndexAjax",
        'mode' : "removeDeletedWidgetOnDahboard",
        'link_id' : link_id
    }
    app.helper.showProgress();
    app.request.post({data:params}).then(
        function(err,data){
            if(err === null) {
                app.helper.hideProgress();
                li_parent.remove();
                params = {
                    title: app.vtranslate('Widget has been removed from Dashboard'),
                    type: 'info'
                };
                app.helper.showSuccessNotification(params);

            }else{
                // to do
            }
        }
    );
}
jQuery(document).ready(function() {
    var navbar = jQuery("#navbar");
    var link_fa_bar_chart = navbar.find("a.fa-bar-chart");
    if(link_fa_bar_chart.length == 0){
        link_fa_bar_chart = navbar.find("a.fa-calendar");
    }
    var link_vte_reports = '<li><div><a href="index.php?module=VTEReports&view=List" class="fa fa-area-chart" title="'+app.vtranslate('VTEReports')+'" aria-hidden="true"></a></div></li>';
    link_fa_bar_chart.closest('li').after(link_vte_reports);
    //var link_vte_reports = navbar.find("a.fa-bar-chart");
});


Vtiger.Class("VTEReports_Menu_Js",{},{
    registerEventAddMenuItemVTEReport : function(){
        var appListElement = jQuery('.app-list');
        var appListDivier = appListElement.find('.app-list-divider');
        var menuItemVTEReportsElemnt = appListElement.find('.vtereport-menu-item');
        if (appListDivier.length > 0 && menuItemVTEReportsElemnt.length == 0){
            var menuItemHtmlForVTEReports =
                '<div class="menu-item app-item app-item-misc vtereport-menu-item" data-default-url="index.php?module=VTEReports&view=List">' +
                '   <div class="menu-items-wrapper">' +
                '       <span class="app-icon-list fa fa-bar-chart"></span>' +
                '       <span class="app-name textOverflowEllipsis"> VTE Reports </span>' +
                '   </div>' +
                '</div>';
            $(menuItemHtmlForVTEReports).insertAfter(appListDivier);
        }
    },
});
var instance= new VTEReports_Menu_Js();
instance.registerEventAddMenuItemVTEReport();