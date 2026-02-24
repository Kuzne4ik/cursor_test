<?php
// Scenario: Get foreground window information

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Wait for user to focus on a window
sleep(2);

// Example 1: Get coordinates and text of foreground window
echo("Example 1: Get coordinates and text of foreground window\n");
$foregroundWindow = WINDOW::$window->get_foreground_window();
$windowX = $foregroundWindow->get_x();
$windowY = $foregroundWindow->get_y();
$windowText = $foregroundWindow->get_text();
echo("Foreground window coordinates: X=$windowX, Y=$windowY\n");
echo("Foreground window text: $windowText\n");

// Quit the application
WINDOW::$app->quit();
?>