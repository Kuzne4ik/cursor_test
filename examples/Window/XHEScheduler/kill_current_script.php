<?php
// Scenario: Control whether to forcefully terminate the running script

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>scheduler->" . basename(__FILE__) . "</span>\n";

// Step: Prepare kill flag for terminating running script
$killEnabled = true;

// Example 1: Set to forcefully terminate the running script
echo "Example 1: Set to forcefully terminate the running script\n";
$killResult = WINDOW::$scheduler->kill_current_script($killEnabled);
if ($killResult)
    echo "Script termination enabled successfully\n";
else
    echo "Failed to enable script termination\n";

sleep(3);

// Step: Prepare kill flag for not terminating running script
$killDisabled = false;

// Example 2: Set to not forcefully terminate the running script
echo "\nExample 2: Set to not forcefully terminate the running script\n";
$noKillResult = WINDOW::$scheduler->kill_current_script($killDisabled);
if ($noKillResult)
    echo "Script termination disabled successfully\n";
else
    echo "Failed to disable script termination\n";

// Quit the application
WINDOW::$app->quit();
?>