<?php
// Scenario: Get window by handle (hwnd)

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get Studio window to obtain its handle
$windowText = "Studio";
echo("Step: Get Studio window to obtain its handle\n");
$xhe = WINDOW::$window->get_by_text($windowText);
$windowTextResult = $xhe->get_text();
echo("Found window with text: $windowTextResult\n");

// Example 1: Get window by handle
$windowHandle = $xhe->get_hwnd();
echo("Example 1: Get window by handle\n");
$windowByHwnd = WINDOW::$window->get_by_hwnd($windowHandle);
$windowTextByHwnd = $windowByHwnd->get_text();
echo("Found window with handle $windowHandle and text: $windowTextByHwnd\n");

// Quit the application
WINDOW::$app->quit();
?>