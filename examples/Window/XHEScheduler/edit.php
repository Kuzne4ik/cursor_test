<?php
// Scenario: Edit existing scheduled tasks

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

// Step: Prepare task index for editing
$taskIndex = 0;

// Step: Get the zero task
echo "Step: Get the zero task\n";
$getResult = WINDOW::$scheduler->get($taskIndex, $taskPath, $taskType, $taskDate, $taskTime, $taskCount, $taskActive, $taskComments, $taskAddParam);
if ($getResult) {
    echo "Task retrieved successfully\n";
    echo "Path: " . $taskPath . "\n";
    echo "Type: " . $taskType . "\n";
    echo "Date: " . $taskDate . "\n";
    echo "Time: " . $taskTime . "\n";
    echo "Count: " . $taskCount . "\n";
    echo "Active: " . $taskActive . "\n";
    echo "Comments: " . $taskComments . "\n";
    echo "Additional parameters: " . $taskAddParam . "\n";
} else {
    echo "Failed to retrieve task\n";
}

// Step: Prepare new task parameters
$nextTime = date("H:i:s", time() + 200);
$newDate = date("Y-m-d");
$newAddParam = 15;

// Example 1: Edit the zero task
echo "\nExample 1: Edit the zero task\n";
$editResult = WINDOW::$scheduler->edit($taskIndex, $taskPath, $taskType, $newDate, $nextTime, $taskCount, true, $taskComments, $newAddParam);
if ($editResult)
    echo "Task edited successfully\n";
else
    echo "Failed to edit task\n";

// Quit the application
WINDOW::$app->quit();
?>