jQuery(function() {

    var activeModule = app.getModuleName(), activeView = app.getViewName();

    if (activeModule == 'CustomModuleUninstaller' && activeView == 'List') {

        $('#UninstallBtn').click(function (e) {
            $.ajax({
                url: 'index.php?module=CustomModuleUninstaller&action=UninstallModule',
                data: 'delModuleName='+$("#delModuleName").val(),
                dataType: 'json',
                success: function (data)
                {
                    $.each(data.result, function (key1, value1) {
                        $('#ResultDiv').append(value1);
                    });
                }
            });

        });

    }

});


