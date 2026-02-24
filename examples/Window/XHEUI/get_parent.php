<?php
// Scenario: Demonstrates how to get the parent element of a UI element

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

// Example 1: Get parent element
$parentElement = $xheElement->get_parent();

if ($parentElement && $parentElement->is_exist()) {
    $parentInfo = $parentElement->get_info();
    echo("Example 1: Successfully retrieved parent element\n");
    echo("Parent element name: " . $parentInfo->Name . "\n");
    echo("Parent element type: " . $parentInfo->LocalizedControlType . "\n");
} else {
    echo("Example 1: No parent element found\n");
}

// Quit the application
WINDOW::$app->quit();
?>