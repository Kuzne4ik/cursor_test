<?php
// Scenario: Example of getting the X coordinate of an element by its inner HTML
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get the X coordinate of an element by its inner HTML
$innerHtml = "Блог";

// Get the X coordinate of the element with the specified inner HTML
$xCoordinate = DOM::$anchor->get_x_by_inner_html($innerHtml);

if ($xCoordinate !== -1) {
    echo "X coordinate of element with inner HTML '$innerHtml': $xCoordinate\n\n";
} else {
    echo "Failed to get X coordinate of element with inner HTML '$innerHtml'\n\n";
}

// Quit the application
WINDOW::$app->quit();