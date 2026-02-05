<?php
// Scenario: Show or hide the left panel of the application
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
echo "\n\n1. Hide left panel\n";
$hidePanel = true;
$hideLeftPaneResult = WINDOW::$app->show_left_pane(!$hidePanel);
if ($hideLeftPaneResult)
    echo "Left panel hidden successfully\n";
else
    echo "Failed to hide left panel\n";

// Step 1
echo "\nStep 1. Wait for 2 seconds\n";
sleep(2);

// Example 2
echo "\n\n2. Show left panel\n";
$showPanel = true;
$showLeftPaneResult = WINDOW::$app->show_left_pane($showPanel);
if ($showLeftPaneResult)
    echo "Left panel shown successfully\n";
else
    echo "Failed to show left panel\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>