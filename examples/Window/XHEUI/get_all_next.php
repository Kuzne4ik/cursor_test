<?php
// Scenario: Demonstrates how to get all next sibling elements of a UI element

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

// Example 1: Get all next sibling elements
$nextElements = $xheElement->get_all_next();

if ($nextElements && $nextElements->count() > 0) {
    echo("Example 1: Found " . $nextElements->count() . " next sibling elements\n");
    foreach($nextElements as $index => $nextElement) {
        $nextElementInfo = $nextElement->get_info();
        echo("Next sibling #$index: " . $nextElementInfo->Name . "\n");
    }
} else {
    echo("Example 1: No next sibling elements found\n");
}

// Quit the application
WINDOW::$app->quit();
?>