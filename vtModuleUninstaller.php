<style>
    section {
        font-family: 'Calibri';
        font-size: 16px;
    }
</style>
<?php
//Turn On Error Display
ini_set('display_errors','1');
ini_set('error_reporting','E_ALL');

include_once 'vtlib/Vtiger/Module.php';
$Vtiger_Utils_Log = true;

//Set the Module to be Deleted
$moduleName = 'BusinessProcessMaker';
deleteModule($moduleName);

//Delete Module Controller
function deleteModule($moduleName) {
    if ($moduleName) {
        $module = Vtiger_Module::getInstance($moduleName);
        if ($module) {
            delTree('modules/'.$moduleName);
            delTree('languages/en_us/'.$moduleName.'.php');
            delTree('layouts/vlayout/modules/'.$moduleName);
            delTree('cron/modules/'.$moduleName);
            echo "<br><br>";
            $module->delete();
        } else {
            displayMessage ($moduleName, 'Module', 2);
        }
    }
}

//Delete a File or (Directory with Files)
function delTree($path)
{
    echo "<section>";
    echo "<br><u>$path</u>";

    if(is_dir($path)) {
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file) {
            if(is_dir("$path/$file")) {
                delTree("$path/$file");
            } else {
                $status = unlink("$path/$file");
                displayMessage ("$path/$file", 'File', $status);
            }
        }
        $status = rmdir($path);
        displayMessage ($path, 'Folder', $status);
        return ;
    } elseif (is_file($path)) {
        $status = unlink("$path");
        displayMessage ($path, 'File', $status);
    } else {
        displayMessage ($path, 'File/Folder', 2);
    }
    echo "</section>";
}

//Display Messages
function displayMessage ($path, $type, $status) {
    switch ($status) {
        case 0:
            echo "<br>$path : <font color='red'> [$type] cannot be removed!</font>";
            break;

        case 1:
            echo "<br>$path : <font color='green'> [$type] has been removed!</font>";
            break;

        case 2:
            echo "<br>$path : <font color='grey'> [$type] is not Found!</font>";
            break;

    }
}
?>