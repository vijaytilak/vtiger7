<?php
echo "exporting started ..";
require_once( 'vtlib/Vtiger/Package.php' );
require_once( 'vtlib/Vtiger/Module.php' );
$package = new Vtiger_Package();
$package->export(
	Vtiger_Module::getInstance( 'Products' ),
	'test/vtlib',
	'Products.zip',
	true
);
echo "<br>exporting finished!!!";