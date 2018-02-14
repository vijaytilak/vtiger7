<?php
// Turn on debugging level
$Vtiger_Utils_Log = true;

// Include necessary classes
include_once('vtlib/Vtiger/Module.php');
$InventoryItems = Vtiger_Module::getInstance('InventoryItems');

// Define instances
$fieldInstance = Vtiger_Field::getInstance('Product',$InventoryItems);

$fieldInstance->setRelatedModules(Array('Products'));
echo "Set Relationship!"
?>
