<?php

class CustomModuleUninstaller {

	public function vtlib_handler($moduleName, $eventType) {
		if ($eventType == 'module.postinstall') {
			$this->_registerLinks($moduleName);
		} else if ($eventType == 'module.enabled') {
			$this->_registerLinks($moduleName);
		} else if ($eventType == 'module.disabled') {
			$this->_deregisterLinks($moduleName);
		}
	}

	protected function _registerLinks($moduleName) {
		$thisModuleInstance = Vtiger_Module::getInstance($moduleName);
		if ($thisModuleInstance) {
			$thisModuleInstance->addLink("HEADERSCRIPT", "CustomModuleUninstaller", "modules/CustomModuleUninstaller/js/CustomModuleUninstaller.js");
		}
	}

	protected function _deregisterLinks($moduleName) {
		$thisModuleInstance = Vtiger_Module::getInstance($moduleName);
		if ($thisModuleInstance) {
			$thisModuleInstance->deleteLink("HEADERSCRIPT", "CustomModuleUninstaller", "modules/CustomModuleUninstaller/js/CustomModuleUninstaller.js");
		}
	}
}
