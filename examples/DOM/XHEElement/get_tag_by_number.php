<?php

// Scenario: For the current page, get the tag of a DOM element by its number
// Description: For the current page, get the tag of a DOM element by its number
// Classes used: XHEElement, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting the init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get the tag of the DOM element by number 1

// Get the tag of the DOM element by number 1
$elementTag = DOM::$element->get_tag_by_number(1);

// Display the tag
if ($elementTag !== "") {
    echo "Tag of element number 1: " . $elementTag . "\n";
} else {
    echo "Failed to get tag of element number 1.\n";
}

// Stop the application
WINDOW::$app->quit();
?>