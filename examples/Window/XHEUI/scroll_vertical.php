<?php
// Scenario: Demonstrates how to scroll a UI element vertically

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

// Example 1: Scroll vertically
$scrollAmount = 50;
$result = $xheElement->scroll_vertical($scrollAmount);

if ($result) {
    echo("Example 1: Successfully scrolled vertically by $scrollAmount units\n");
    echo("The element has been scrolled down\n");
} else {
    echo("Example 1: Failed to scroll vertically\n");
    echo("The element may not support vertical scrolling\n");
}

// Quit the application
WINDOW::$app->quit();
?>