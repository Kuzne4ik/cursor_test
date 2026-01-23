<?php

// Scenario: Get computed style of a DOM element
// Description: For current page, find a DOM element and get its computed style properties
// Classes used: XHEInput, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Get all computed styles of an element

// Get DOM element <input> by number 0
$targetElement = DOM::$input->get_by_number(0);

// Check that the DOM element was found
if ($targetElement->inner_number != -1) {
    // Get all computed styles for the found element
    echo($targetElement->get_computed_style());
}

echo("\n\n");

// Example 2: Get specific computed style property

// Get DOM element <input> by number 0
$targetElement = DOM::$input->get_by_number(0);

// Check that the DOM element was found
if ($targetElement->inner_number != -1) {
    // Get the computed value of the 'background-color' style property
    echo($targetElement->get_computed_style("background-color"));
}

echo("\n\n");

// Example 3: Get computed style with pseudo-element

// Get DOM element <a> by number 0
$linkElement = DOM::$anchor->get_by_number(0);

// Check that the DOM element was found
if ($linkElement->inner_number != -1) {
    // Get the computed value of the 'color' style property for the :hover pseudo-element
    echo($linkElement->get_computed_style("color", ":hover"));
}



// Stop the application
WINDOW::$app->quit();
?>