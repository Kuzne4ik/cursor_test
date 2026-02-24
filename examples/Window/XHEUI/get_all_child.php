<?php
// Scenario: Demonstrates how to get all child elements of a UI element

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

// Example 1: Get all child elements
$childElements = $xheElement->get_all_child();

if ($childElements && $childElements->count() > 0) {
    echo("Example 1: Found " . $childElements->count() . " child elements\n");
    foreach($childElements as $index => $child) {
        $childInfo = $child->get_info();
        echo("Child #$index: " . $childInfo->Name . "\n");
    }
} else {
    echo("Example 1: No child elements found\n");
}

// Quit the application
WINDOW::$app->quit();
?>