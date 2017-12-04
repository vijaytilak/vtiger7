<?php

class CustomModuleUninstaller_List_View extends Vtiger_Index_View {
	
	public function process(Vtiger_Request $request) {

        $viewer = $this->getViewer($request);
        $moduleName = $request->getModule();

		echo "<center><h1>Welcome to CustomModuleUninstaller<h1><h4>The support is enabled through Javascript</h4></center>";
        echo "<center><input type='text' id='delModuleName' val=''><input type='button' id='UninstallBtn' value='Uninstall'> </center>";
        echo "<center><div id='ResultDiv'></div></center>";
	}
}