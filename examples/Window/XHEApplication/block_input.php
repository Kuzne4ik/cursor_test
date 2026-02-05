<?php
// Scenario: Block and unblock mouse and keyboard input
$xhe_host = "127.0.0.1:7010";
if (!isset($path)) {
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename(__FILE__) . "</font>\n";

// step
echo "1. Block mouse and keyboard input\n";
$blockResult = WINDOW::$app->block_input();
if ($blockResult)
    echo "Input blocked successfully\n";
else
    echo "Failed to block input\n";


// Example 1
echo "\n\n2. Unblock mouse and keyboard input\n";
$unblockResult = WINDOW::$app->block_input(false);
if ($unblockResult)
    echo "Input unblocked successfully\n";
else
    echo "Failed to unblock input\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
