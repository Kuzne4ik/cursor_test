<?php
// Scenario: Show or hide the debug panel at the bottom of the application
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
echo "\n\n1. Hide debug panel\n";
$hidePanel = true;
$hideBottomPaneResult = WINDOW::$app->show_bottom_pane(!$hidePanel);
if ($hideBottomPaneResult)
    echo "Debug panel hidden successfully\n";
else
    echo "Failed to hide debug panel\n";

// Step 1
echo "\nStep 1. Wait for 3 seconds\n";
sleep(3);

// Example 2
echo "\n\n2. Show debug panel\n";
$showPanel = true;
$showBottomPaneResult = WINDOW::$app->show_bottom_pane($showPanel);
if ($showBottomPaneResult)
    echo "Debug panel shown successfully\n";
else
    echo "Failed to show debug panel\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>