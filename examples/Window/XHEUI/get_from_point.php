<?php
// Scenario: Demonstrates how to get a UI element from specific screen coordinates

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get UI element for interaction
$windowText = "localhost";
$xheElement = WINDOW::$window->get_by_text($windowText)->get_ui_element();

// Example 1: Get UI element from specific coordinates
$pointX = 500;
$pointY = 500;
$elementFromPoint = $xheElement->get_from_point($pointX, $pointY);

if ($elementFromPoint && $elementFromPoint->is_exist()) {
    $elementInfo = $elementFromPoint->get_info();
    echo("Example 1: Successfully found UI element at coordinates ($pointX, $pointY)\n");
    echo("Element name: " . $elementInfo->Name . "\n");
    echo("Element type: " . $elementInfo->LocalizedControlType . "\n");
} else {
    echo("Example 1: No UI element found at coordinates ($pointX, $pointY)\n");
}

// Quit the application
WINDOW::$app->quit();
?>