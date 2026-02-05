<?php
// Scenario: Show application window from system tray
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
echo "\n\n1. Minimize application to tray\n";
$minimizeToTrayResult = WINDOW::$app->minimize_to_tray();
if ($minimizeToTrayResult)
    echo "Application minimized to tray successfully\n";
else
    echo "Failed to minimize application to tray\n";

// Step 1
echo "\nStep 1. Wait for 2 seconds\n";
sleep(2);

// Example 2
echo "\n\n2. Show application from tray\n";
$showFromTrayResult = WINDOW::$app->show_from_tray();
if ($showFromTrayResult)
    echo "Application shown from tray successfully\n";
else
    echo "Failed to show application from tray\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>