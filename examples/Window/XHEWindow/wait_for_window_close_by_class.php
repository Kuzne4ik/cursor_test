<?php
// Scenario: Wait for window to close by class name

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Wait for Viber window to close by class
$windowClass = "Qt5152QWindowOwnDCIcon";
$visible = true;
$main = false;
$caseSensitive = false;
echo("Example 1: Wait for Viber window to close by class\n");
$result = WINDOW::$window->wait_for_window_close_by_class($windowClass, $visible, $main, $caseSensitive);
echo("Window close wait result: " . ($result ? "Success" : "Failed") . "\n");

// Quit the application
WINDOW::$app->quit();
?>