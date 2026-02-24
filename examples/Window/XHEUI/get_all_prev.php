<?php
// Scenario: Demonstrates how to get all previous sibling elements of a UI element

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

// Example 1: Get all previous sibling elements
$prevElements = $xheElement->get_all_prev();

if ($prevElements && $prevElements->count() > 0) {
    echo("Example 1: Found " . $prevElements->count() . " previous sibling elements\n");
    foreach($prevElements as $index => $prevElement) {
        $prevElementInfo = $prevElement->get_info();
        echo("Previous sibling #$index: " . $prevElementInfo->Name . "\n");
    }
} else {
    echo("Example 1: No previous sibling elements found\n");
}

// Quit the application
WINDOW::$app->quit();
?>