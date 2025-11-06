<?php

// Scenario: Get X coordinate of a DOM element
// Description: For current page, find a DOM element and get its X coordinate relative to the page
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

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

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get X coordinate of link by full inner text

// Get DOM element <a> by inner text
$targetAnchor = DOM::$anchor->get_by_inner_text("list of all", false);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Get X coordinate of the found element
    echo($targetAnchor->get_x());
}

echo("\n\n");

// Example 2: Get X coordinate (in visible part of page) of link

// Get DOM element <a> by number 110
$targetAnchor = DOM::$anchor->get_by_number(110);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Set focus to the element
    $targetAnchor->focus();
    // Get X coordinate of the element relative to the visible part of the page
    echo($targetAnchor->get_x(true));
}

// Stop the application
WINDOW::$app->quit();
?>