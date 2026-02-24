<?php
// Scenario: Demonstrates how to set the value property of a UI element

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

// Example 1: Set the value property
$newValue = "12345";
$result = $xheElement->set_value($newValue);

if ($result) {
    echo("Example 1: Successfully set element value to '$newValue'\n");
    echo("The element's value property has been updated\n");
} else {
    echo("Example 1: Failed to set element value\n");
    echo("The element may not support setting values or the value is invalid\n");
}

// Quit the application
WINDOW::$app->quit();
?>