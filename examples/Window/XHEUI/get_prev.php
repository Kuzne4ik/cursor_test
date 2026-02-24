<?php
// Scenario: Demonstrates how to get the previous sibling element of a UI element

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

// Example 1: Get previous sibling element
$prevElement = $xheElement->get_prev();

if ($prevElement && $prevElement->is_exist()) {
    $prevElementInfo = $prevElement->get_info();
    echo("Example 1: Successfully retrieved previous sibling element\n");
    echo("Previous element name: " . $prevElementInfo->Name . "\n");
} else {
    echo("Example 1: No previous sibling element found\n");
}

// Quit the application
WINDOW::$app->quit();
?>