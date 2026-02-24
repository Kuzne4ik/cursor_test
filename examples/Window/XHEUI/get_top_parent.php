<?php
// Scenario: Demonstrates how to get the top-level parent element of a UI element

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

// Step: Get current element information for comparison
$elementInfo = $xheElement->get_info();
echo("Current element: " . $elementInfo->Name . "\n");

// Example 1: Get top-level parent element
$topParentElement = $xheElement->get_top_parent();

if ($topParentElement && $topParentElement->is_exist()) {
    $topParentInfo = $topParentElement->get_info();
    echo("Example 1: Successfully retrieved top-level parent element\n");
    echo("Top parent element name: " . $topParentInfo->Name . "\n");
    echo("Top parent element type: " . $topParentInfo->LocalizedControlType . "\n");
} else {
    echo("Example 1: No top-level parent element found or current element is already top-level\n");
}

// Quit the application
WINDOW::$app->quit();
?>