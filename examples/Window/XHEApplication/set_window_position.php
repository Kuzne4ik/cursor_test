<?php
// Scenario: Set main window position with specified coordinates and dimensions
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
echo "\n\n1. Set main window position\n";
$xPosition = 10;
$yPosition = 10;
$width = 1200;
$height = 900;
$setWindowPositionResult = WINDOW::$app->set_window_position($xPosition, $yPosition, $width, $height);
if ($setWindowPositionResult)
    echo "Window position set successfully\n";
else
    echo "Failed to set window position\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>