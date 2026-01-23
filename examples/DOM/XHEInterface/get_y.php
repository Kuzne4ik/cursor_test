<?php

// Scenario: Get Y coordinate of a DOM element
// Description: For current page, find a DOM element and get its Y coordinate relative to the page
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

// Example 1: Get Y coordinate of link by href attribute

// Navigate to the polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Get DOM element <a> by href attribute
$targetAnchor = DOM::$anchor->get_by_attribute("href", TEST_SITE_URL);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Get Y coordinate of the found element
    echo $targetAnchor->get_y();
}

echo("\n\n");

// Example 2: Get Y coordinate (in visible part of page) of link

// Navigate to the test site
echo WEB::$browser->navigate(TEST_SITE_URL);

// Get DOM element <a> by number 110
$targetAnchor = DOM::$anchor->get_by_number(110);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Set focus to the element
    $targetAnchor->focus();
    // Get Y coordinate of the element relative to the visible part of the page
    echo $targetAnchor->get_y(true);
}

echo("\n\n");

// Example 3: Get Y coordinate of link (on page)

// Get DOM element <a> by number 110
$targetAnchor = DOM::$anchor->get_by_number(110);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Get Y coordinate of the element relative to the page
    echo $targetAnchor->get_y();
}

// Stop the application
WINDOW::$app->quit();
?>