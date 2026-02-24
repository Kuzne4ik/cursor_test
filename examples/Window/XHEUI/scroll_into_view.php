<?php
// Scenario: Demonstrates how to scroll a UI element into view

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

// Example 1: Scroll element into view
$result = $xheElement->scroll_into_view();

if ($result) {
    echo("Example 1: Successfully scrolled element into view\n");
    echo("The element is now visible in the scrollable area\n");
} else {
    echo("Example 1: Failed to scroll element into view\n");
    echo("The element may not be scrollable or is already in view\n");
}

// Quit the application
WINDOW::$app->quit();
?>