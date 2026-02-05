<?php
// Scenario: Get the folder path of the current script
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Get current script folder
echo "Example 1: Get current script folder\n";
$scriptFolder = WINDOW::$debug->get_cur_script_folder();
echo "Current script folder: $scriptFolder\n";

// Quit the application
WINDOW::$app->quit();
?>