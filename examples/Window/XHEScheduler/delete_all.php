<?php
// Scenario: Delete all scheduled tasks

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>scheduler->" . basename(__FILE__) . "</span>\n";

// Example 1: Delete all tasks from the script schedule
echo "Example 1: Delete all tasks from the script schedule\n";
$deleteAllResult = WINDOW::$scheduler->delete_all();
if ($deleteAllResult)
    echo "All tasks deleted successfully\n";
else
    echo "Failed to delete all tasks\n";

// Quit the application
WINDOW::$app->quit();
?>