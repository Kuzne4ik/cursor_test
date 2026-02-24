<?php
// Scenario: Demonstrates how to set focus to a UI element

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

// Step: Wait a moment before setting focus
sleep(1);

// Example 1: Set focus to the UI element
$result = $xheElement->focus();

if ($result) {
    echo("Example 1: Successfully set focus to the UI element\n");
} else {
    echo("Example 1: Failed to set focus to the UI element\n");
}

// Quit the application
WINDOW::$app->quit();
?>