<?php
// Scenario: Activate and deactivate all scheduled tasks

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Activate all tasks
echo "Example 1: Activate all tasks\n";
$activateAllResult = WINDOW::$scheduler->activate_all(true);
if ($activateAllResult)
    echo "All tasks activated successfully\n";
else
    echo "Failed to activate all tasks\n";

sleep(2);

// Example 2: Deactivate all tasks
echo "\nExample 2: Deactivate all tasks\n";
$deactivateAllResult = WINDOW::$scheduler->activate_all(false);
if ($deactivateAllResult)
    echo "All tasks deactivated successfully\n";
else
    echo "Failed to deactivate all tasks\n";

// Quit the application
WINDOW::$app->quit();
?>