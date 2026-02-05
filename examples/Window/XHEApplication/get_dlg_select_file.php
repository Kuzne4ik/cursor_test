<?php
// Scenario: Get file selection from dialog
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

$PHP_Use_Trought_Shell=false;

// Example 1
echo "1. Select file from disk (get file path)\n";
$initialDirectory = "c:\\";
$action = "action1";
$fileResult = WINDOW::$app->get_dlg_select_file($initialDirectory, $action);
echo $fileResult;

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>