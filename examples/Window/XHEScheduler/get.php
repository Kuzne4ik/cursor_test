<?php
// Scenario: Get parameters of a scheduled task

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Prepare variables to store task parameters
$taskPath = "";
$taskType = "";
$taskDate = "";
$taskTime = "";
$taskCount = "";
$taskActive = "";
$taskComments = "";
$taskAddParam = "";

// Step: Prepare task index for retrieval
$taskIndex = 2;

// Example 1: Get parameters of the specified task
echo "Example 1: Get parameters of the specified task\n";
$getResult = WINDOW::$scheduler->get($taskIndex, $taskPath, $taskType, $taskDate, $taskTime, $taskCount, $taskActive, $taskComments, $taskAddParam);
if ($getResult) {
    echo "Task parameters retrieved successfully:\n";
    echo "Path: " . $taskPath . "\n";
    echo "Type: " . $taskType . "\n";
    echo "Date: " . $taskDate . "\n";
    echo "Time: " . $taskTime . "\n";
    echo "Count: " . $taskCount . "\n";
    echo "Active: " . $taskActive . "\n";
    echo "Comments: " . $taskComments . "\n";
    echo "Additional parameters: " . $taskAddParam . "\n";
} else {
    echo "Failed to retrieve task parameters\n";
}

// Quit the application
WINDOW::$app->quit();
?>