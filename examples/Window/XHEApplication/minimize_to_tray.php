<?php
// Scenario: Minimize application to tray
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "1. Minimize application to tray\n";
$minimizeResult = WINDOW::$app->minimize_to_tray();
if ($minimizeResult)
    echo "Application minimized to tray successfully\n";
else
    echo "Failed to minimize application to tray\n";

// pause
sleep(5);

// Example 2
echo "\n\n2. Show application from tray\n";
$showResult = WINDOW::$app->show_from_tray();
if ($showResult)
    echo "Application shown from tray successfully\n";
else
    echo "Failed to show application from tray\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>