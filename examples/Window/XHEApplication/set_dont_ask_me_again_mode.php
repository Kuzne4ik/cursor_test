<?php
// Scenario: Enable or disable warning dialogs
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "\n\n1. Switch to mode not to show warning dialogs\n";
$dontAskMode = true;
$setResult = WINDOW::$app->set_dont_ask_me_again_mode($dontAskMode);
if ($setResult)
    echo "Don't ask mode enabled successfully\n";
else
    echo "Failed to enable don't ask mode\n";

// Example 2
echo "\n\n2. Switch to mode to show warning dialogs\n";
$dontAskMode = false;
$setResult = WINDOW::$app->set_dont_ask_me_again_mode($dontAskMode);
if ($setResult)
    echo "Don't ask mode disabled successfully\n";
else
    echo "Failed to disable don't ask mode\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>