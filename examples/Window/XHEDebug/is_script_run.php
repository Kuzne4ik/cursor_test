<?php
// Scenario: Check if a script is running through the application
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Check if script is running
echo "Example 1: Check if script is running\n";
$isRunning = WINDOW::$debug->is_script_run();
if ($isRunning)
    echo "Script is running\n";
else
    echo "Script is not running\n";

// Quit the application
WINDOW::$app->quit();
?>