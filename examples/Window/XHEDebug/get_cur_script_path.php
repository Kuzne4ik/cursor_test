<?php
// Scenario: Get the full path of the current script
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Get current script path
echo "Example 1: Get current script path\n";
$scriptPath = WINDOW::$debug->get_cur_script_path();
echo "Current script path: $scriptPath\n";

// Quit the application
WINDOW::$app->quit();
?>