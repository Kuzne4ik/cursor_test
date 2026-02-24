<?php
// Scenario: Demonstrates how to get the rectangle coordinates of a UI element

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

// Example 1: Get rectangle coordinates of the UI element
$elementRect = $xheElement->get_rect();

if ($elementRect && is_array($elementRect)) {
    echo("Example 1: Successfully retrieved element rectangle\n");
    echo("Rectangle coordinates:\n");
    echo("  Left: " . $elementRect[0] . "\n");
    echo("  Top: " . $elementRect[1] . "\n");
    echo("  Right: " . $elementRect[2] . "\n");
    echo("  Bottom: " . $elementRect[3] . "\n");
    
    $width = $elementRect[2] - $elementRect[0];
    $height = $elementRect[3] - $elementRect[1];
    echo("  Width: " . $width . "\n");
    echo("  Height: " . $height . "\n");
} else {
    echo("Example 1: Failed to retrieve element rectangle\n");
}

// Quit the application
WINDOW::$app->quit();
?>