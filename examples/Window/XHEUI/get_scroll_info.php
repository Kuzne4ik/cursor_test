<?php
// Scenario: Demonstrates how to get scroll information of a UI element

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

// Example 1: Get scroll information
$scrollInfo = $xheElement->get_scroll_info();

if ($scrollInfo && is_array($scrollInfo)) {
    echo("Example 1: Successfully retrieved scroll information\n");
    echo("Scroll information:\n");
    if (isset($scrollInfo['horizontal'])) {
        echo("  Horizontal scroll: " . $scrollInfo['horizontal'] . "\n");
    }
    if (isset($scrollInfo['vertical'])) {
        echo("  Vertical scroll: " . $scrollInfo['vertical'] . "\n");
    }
    if (isset($scrollInfo['horizontal_max'])) {
        echo("  Horizontal max: " . $scrollInfo['horizontal_max'] . "\n");
    }
    if (isset($scrollInfo['vertical_max'])) {
        echo("  Vertical max: " . $scrollInfo['vertical_max'] . "\n");
    }
} else {
    echo("Example 1: Failed to retrieve scroll information or element is not scrollable\n");
}

// Quit the application
WINDOW::$app->quit();
?>