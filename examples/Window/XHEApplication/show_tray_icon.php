<?php
// Scenario: Show or hide the application tray icon
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
echo "\n\n1. Hide program icon in tray\n";
$hideIcon = true;
$hideTrayIconResult = WINDOW::$app->show_tray_icon(!$hideIcon);
if ($hideTrayIconResult)
    echo "Tray icon hidden successfully\n";
else
    echo "Failed to hide tray icon\n";

// Step 1
echo "\nStep 1. Wait for 3 seconds\n";
sleep(3);

// Example 2
echo "\n\n2. Show program icon in tray\n";
$showIcon = true;
$showTrayIconResult = WINDOW::$app->show_tray_icon($showIcon);
if ($showTrayIconResult)
    echo "Tray icon shown successfully\n";
else
    echo "Failed to show tray icon\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>