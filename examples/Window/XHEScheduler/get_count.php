<?php
// Scenario: Get the number of scheduled tasks

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>scheduler->" . basename(__FILE__) . "</span>\n";

// Example 1: Get the number of scheduled tasks
echo "Example 1: Get the number of scheduled tasks\n";
$taskCount = WINDOW::$scheduler->get_count();
if ($taskCount >= 0) {
    echo "Number of scheduled tasks: " . $taskCount . "\n";
} else {
    echo "Failed to get task count\n";
}

// Quit the application
WINDOW::$app->quit();
?>