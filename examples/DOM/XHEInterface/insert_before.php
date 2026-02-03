<?php

// Scenario: Insert new element before a DOM element
// Description: For current page, find a DOM element and insert a new element before it
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Example 1: Insert input element before an anchor

// Navigate to the polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Get DOM element <a> by number 0
$targetAnchor = DOM::$anchor->get_by_number(0);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Insert input element before the anchor
    echo $targetAnchor->insert_before("input", "");
}

echo("\n\n");

// Example 2: Insert anchor element before another anchor

// Get DOM element <a> by number 0
$targetAnchor = DOM::$anchor->get_by_number(0);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Insert anchor element with text before the existing anchor
    echo $targetAnchor->insert_before("a", "new child test anchor");
}

// Stop the application
WINDOW::$app->quit();
?>