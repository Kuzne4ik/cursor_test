<?php
// Scenario: Check if process exists by name
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "1. Check if process exists\n";
$processName = "Far";
$processExists = WINDOW::$app->is_process_exists_by_name($processName);
if ($processExists)
    echo "Process '$processName' exists\n";
else
    echo "Process '$processName' does not exist\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>