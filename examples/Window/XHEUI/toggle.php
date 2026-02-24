<?php
// Scenario: Demonstrates how to toggle a UI element (like a checkbox or toggle button)

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

// Example 1: Toggle the UI element
$result = $xheElement->toggle();

if ($result) {
    echo("Example 1: Successfully toggled the UI element\n");
    echo("The element's state has been switched (on/off or checked/unchecked)\n");
} else {
    echo("Example 1: Failed to toggle the UI element\n");
    echo("The element may not support toggle operation\n");
}

// Quit the application
WINDOW::$app->quit();
?>