<?php

// Scenario: For the current page, get the Y coordinate of a DOM element with a specific tag by its number
// Description: For the current page, get the Y coordinate of a DOM element with a specific tag by its number
// Classes used: XHEElement, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting to init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get the Y coordinate of the first DIV element

// Get the Y coordinate of the first DIV element
$elementY = DOM::$element->get_y_by_tag_by_number("DIV", 0);

// Display the Y coordinate
if ($elementY !== -1) {
    echo "Y coordinate of the first DIV element: " . $elementY . "\n";
} else {
    echo "Failed to get Y coordinate of the first DIV element.\n";
}

// Example 2: Get the Y coordinate of the second A element

// Get the Y coordinate of the second A element
$elementY = DOM::$element->get_y_by_tag_by_number("A", 1);

// Display the Y coordinate
if ($elementY !== -1) {
    echo "Y coordinate of the second A element: " . $elementY . "\n";
} else {
    echo "Failed to get Y coordinate of the second A element.\n";
}

// Stop the application
WINDOW::$app->quit();
?>