<?php
// Scenario: Add a new scheduled task

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>scheduler->" . basename(__FILE__) . "</span>\n";

// Step: Prepare parameters for adding a new task
$scriptPath = WINDOW::$debug->get_cur_script_path();
$taskType = 0;
$taskDate = "2015-07-01";
$taskTime = "00:00:00";
$taskCount = 1;
$isActive = true;

// Example 1: Add a new scheduled task
echo "Example 1: Add a new scheduled task\n";
$addResult = WINDOW::$scheduler->add($scriptPath, $taskType, $taskDate, $taskTime, $taskCount, $isActive);
if ($addResult)
    echo "Task added successfully\n";
else
    echo "Failed to add task\n";

// Quit the application
WINDOW::$app->quit();
?>