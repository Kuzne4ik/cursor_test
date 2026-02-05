<?php
// Scenario: Delete scheduled tasks

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>scheduler->" . basename(__FILE__) . "</span>\n";

// Step: Prepare task index for deletion (numbering starts from zero)
$taskIndex = 1;

// Example 1: Delete the first task (numbering starts from zero)
echo "Example 1: Delete the first task (numbering starts from zero)\n";
$deleteResult = WINDOW::$scheduler->delete($taskIndex);
if ($deleteResult)
    echo "Task deleted successfully\n";
else
    echo "Failed to delete task\n";

// Step: Prepare non-existent task index for deletion
$nonExistentTaskIndex = 10;

// Example 2: Try to delete non-existent task (numbering starts from zero)
echo "\nExample 2: Try to delete non-existent task (numbering starts from zero)\n";
$nonExistentResult = WINDOW::$scheduler->delete($nonExistentTaskIndex);
if (!$nonExistentResult)
    echo "No such task\n";

// Quit the application
WINDOW::$app->quit();
?>