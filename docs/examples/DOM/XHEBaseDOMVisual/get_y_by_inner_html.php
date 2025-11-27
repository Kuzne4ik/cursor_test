<?php
// Scenario: Example of getting the Y coordinate of an element by its inner HTML

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with HTML elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get the Y coordinate of an element by its inner HTML
$innerHtml = "Блог";

// Get the Y coordinate of the element with inner HTML "`id_mouseover1`"
$yCoordinate = DOM::$anchor->get_y_by_inner_html($innerHtml, true);

if ($yCoordinate !== -1) {
    echo "Y coordinate of element with inner HTML '$innerHtml': $yCoordinate\n\n";
} else {
    echo "Failed to get Y coordinate of element with inner HTML '$innerHtml'\n\n";
}


// Quit the application
WINDOW::$app->quit();