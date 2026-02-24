<?php
// Scenario: Get currently focused window information

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Wait for user to focus on a window
sleep(2);

// Example 1: Get coordinates of focused window
echo("Example 1: Get coordinates of focused window\n");
$focusedWindow = WINDOW::$window->get_focused_window();
$windowX = $focusedWindow->get_x();
$windowY = $focusedWindow->get_y();
echo("Focused window coordinates: X=$windowX, Y=$windowY\n");

// Quit the application
WINDOW::$app->quit();
?>