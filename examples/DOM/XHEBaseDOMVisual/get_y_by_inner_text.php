<?php
// Scenario: Example of getting the Y coordinate of an element by its inner text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with text elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get the Y coordinate of an element by its inner text
$innerText = "Блог";

// Get the Y coordinate of the element with inner text "`id_mouseover1`"
$yCoordinate = DOM::$anchor->get_y_by_inner_text($innerText, true);

if ($yCoordinate !== -1) {
    echo "Y coordinate of element with inner text '$innerText': $yCoordinate\n\n";
} else {
    echo "Failed to get Y coordinate of element with inner text '$innerText'\n\n";
}

// Quit the application
WINDOW::$app->quit();