<?php
// Scenario: Demonstrates how to get a specific child element by index

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

// Example 1: Get child element by index
$childIndex = 1;
$childElement = $xheElement->get_child($childIndex);

if ($childElement && $childElement->is_exist()) {
    $childInfo = $childElement->get_info();
    echo("Example 1: Successfully retrieved child element at index $childIndex\n");
    echo("Child element name: " . $childInfo->Name . "\n");
} else {
    echo("Example 1: No child element found at index $childIndex\n");
}

// Quit the application
WINDOW::$app->quit();
?>