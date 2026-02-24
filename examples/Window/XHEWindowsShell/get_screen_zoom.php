<?php
// Scenario: Get the screen zoom level for different monitors
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Get main screen zoom
echo "Get main screen zoom: ";
$mainScreenZoom = WINDOW::$windows->get_screen_zoom();
echo $mainScreenZoom . "\n";

// Example 2: Get monitor 0 zoom
$monitor0 = 0;
echo "\nGet monitor 0 zoom: ";
$monitor0Zoom = WINDOW::$windows->get_screen_zoom($monitor0);
echo $monitor0Zoom . "\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>