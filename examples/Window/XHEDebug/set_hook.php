<?php
// Scenario: Set hooks for script pause and stop actions
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Set hooks for unpause and stop actions
echo "Example 1: Set hooks for unpause and stop actions\n";
$unpauseHookFile = "hook/hook_unpause.php";
$stopHookFile = "hook/hook_stop.php";

$result1 = WINDOW::$debug->set_hook("unpause", $unpauseHookFile);
if ($result1)
    echo "Unpause hook set successfully to $unpauseHookFile\n";
else
    echo "Failed to set unpause hook to $unpauseHookFile\n";

$result2 = WINDOW::$debug->set_hook("stop", $stopHookFile);
if ($result2)
    echo "Stop hook set successfully to $stopHookFile\n";
else
    echo "Failed to set stop hook to $stopHookFile\n";

// Step: Display message and pause script to trigger unpause hook
echo "\nStep: Display message and pause script to trigger unpause hook\n";
$message = "To trigger the unpause hook, remove the script from pause.";
WINDOW::$debug->message_box($message);
WINDOW::$app->pause(0);

// Step: Get result of unpause hook
echo "\nStep: Get result of unpause hook\n";
$unpauseResultFile = "hook/hook_unpause.php.res";
if (SYSTEM::$file_os->is_exist($unpauseResultFile)) {
    $unpauseResult = SYSTEM::$textfile->read_file($unpauseResultFile);
    echo "Unpause hook result: $unpauseResult\n";
}

// Step: Display message and wait for stop hook
echo "\nStep: Display message and wait for stop hook\n";
$message = "To trigger the stop hook, click the stop script button.";
WINDOW::$debug->message_box($message);

// Long pause to allow manual stop
sleep(5000);

// Quit the application
WINDOW::$app->quit();
?>