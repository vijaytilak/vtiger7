<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        section {
            padding: 15px;
            font-family: 'Calibri Light';
            font-size: 14px;
        }
    </style>
</head>
<body>
<?php var_dump($_POST); ?>
<?php if ($_POST['moduleName'] && $_POST['confirm']): ?>

    <div class="container">
        <h2>Attempting to Delete <?php echo $_POST['moduleName']; ?> ?</h2>

        <form action=<?php $_SERVER["PHP_SELF"]; ?> method="POST">
            <?php deleteModule($_POST['moduleName']); ?>
        </form>
    </div>

<?php elseif ($_POST['moduleName'] && !$_POST['confirm']): ?>

    <div class="container">
        <h2>Are you sure you want to delete <?php echo $_POST['moduleName']; ?> ?</h2>
        <h4>Following paths will be deleted :</h4>
        <ul>
            <li><?php echo 'modules/'.$_POST["moduleName"] ?></li>
            <li><?php echo 'languages/en_us/'.$_POST["moduleName"].'.php' ?></li>
            <li><?php echo 'layouts/vlayout/modules/'.$_POST["moduleName"] ?></li>
            <li><?php echo 'cron/modules/'.$_POST["moduleName"] ?></li>
        </ul>
        <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="POST">
            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox"> Yes, Please Delete!</label>
                </div>
            </div>
            <input type="hidden" name="moduleName" value=<?php echo $_POST['moduleName']; ?>>
            <button type="submit" class="btn btn-default">Continue</button>
        </form>
    </div>
<?php else: ?>
    <div class="container">
        <h2>Uninstall vTiger Module</h2>
        <form name="form1" method="POST">
            <div class="form-group">
                <label for="moduleName">Module Name:</label>
                <input type="moduleName" class="form-control" id="moduleName" placeholder="Enter module name">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
<?php endif; ?>

</body>
</html>

<?php

function deleteModule($moduleName) {
    include_once 'vtlib/Vtiger/Module.php';

    $Vtiger_Utils_Log = true;

    if ($moduleName) {
        $module = Vtiger_Module::getInstance($moduleName);
        if ($module) {
            $module->delete();
            delTree('modules/'.$moduleName);
            delTree('languages/en_us/'.$moduleName.'.php');
            delTree('layouts/vlayout/modules/'.$moduleName);
            delTree('cron/modules/'.$moduleName);
        } else {
            displayMessage ($moduleName, 'Module', "Not Found");
        }
    }
}



//Delete a File or (Directory with Files)
function delTree($path)
{
    echo "<section>";
    if(is_dir($path)) {
        $files = array_diff(scandir($path), array('.', '..'));
        foreach ($files as $file) {
            if(is_dir("$path/$file")) {
                $status = delTree("$path/$file");
                displayMessage ($path, 'Folder', $status);
            } else {
                $status = unlink("$path/$file");
                displayMessage ($path, 'File', $status);
            }
        }
        $status = rmdir($path);
        displayMessage ($path, 'Folder', $status);
        return ;
    } else if (is_file($path)) {
        $status = unlink("$path");
        displayMessage ($path, 'File', $status);
    } else {
        $status = "Not Found";
        displayMessage ($path, 'File/Folder', $status);
    }
    echo "</section>";
}

function displayMessage ($path, $type, $status) {
    if($status) {
        if ($status=='Not Found') {
            echo "$path : <font color='grey'> [$type] is not Found!</font>";
        } else {
            echo "$path : <font color='green'> [$type] has been removed!</font>";
        }
    } else {
        echo "$path : <font color='red'> [$type] cannot be removed!</font>";
    }
}

?>