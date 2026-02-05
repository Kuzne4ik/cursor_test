<?php
// Scenario: Show or hide application tray icon
$xhe_host = "127.0.0.1:5006";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "\n\n1. Hide application tray icon\n";
$showIcon = false;
$setIconResult = WINDOW::$app->show_tray_icon($showIcon);
if ($setIconResult)
    echo "Tray icon hidden successfully\n";
else
    echo "Failed to hide tray icon\n";

// pause
sleep(3);

// Example 2
echo "\n\n2. Show application tray icon\n";
$showIcon = true;
$setIconResult = WINDOW::$app->show_tray_icon($showIcon);
if ($setIconResult)
    echo "Tray icon shown successfully\n";
else
    echo "Failed to show tray icon\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>