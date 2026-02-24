<?php
// Scenario: Demonstrates how to get the next sibling element of a UI element

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

// Example 1: Get next sibling element
$nextElement = $xheElement->get_next();

if ($nextElement && $nextElement->is_exist()) {
    $nextElementInfo = $nextElement->get_info();
    echo("Example 1: Successfully retrieved next sibling element\n");
    echo("Next element name: " . $nextElementInfo->Name . "\n");
} else {
    echo("Example 1: No next sibling element found\n");
}

// Quit the application
WINDOW::$app->quit();
?>