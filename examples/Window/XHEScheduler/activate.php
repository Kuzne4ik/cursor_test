<?php
// Scenario: Activate and deactivate scheduled tasks

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Prepare task index for activation
$taskIndex = 0;

// Example 1: Activate the zero task
echo "Example 1: Activate the zero task\n";
$activateResult = WINDOW::$scheduler->activate($taskIndex, true);
if ($activateResult)
    echo "Task activated successfully\n";
else
    echo "Failed to activate task\n";

sleep(2);

// Example 2: Deactivate the zero task
echo "\nExample 2: Deactivate the zero task\n";
$deactivateResult = WINDOW::$scheduler->activate($taskIndex, false);
if ($deactivateResult)
    echo "Task deactivated successfully\n";
else
    echo "Failed to deactivate task\n";

// Step: Prepare non-existent task index
$nonExistentTaskIndex = 100500;

// Example 3: Try to deactivate non-existent task
echo "\nExample 3: Try to deactivate non-existent task\n";
$nonExistentResult = WINDOW::$scheduler->activate($nonExistentTaskIndex, false);
if (!$nonExistentResult)
    echo "No such task\n";

// Quit the application
WINDOW::$app->quit();
?>