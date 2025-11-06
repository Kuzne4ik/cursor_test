<?php

// Scenario: Remove DOM elements from a page
// Description: For current page, find DOM elements and remove them from the page
// Classes used: XHEAnchor, XHEFrame, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Remove an anchor element from the page

// Navigate to polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Get DOM element <a> by number 0
$targetAnchor = DOM::$anchor->get_by_number(0);

// Check that DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Remove the anchor element from the page
    echo $targetAnchor->remove();
}

echo("\n\n");

// Example 2: Remove a frame element from the page

// Get DOM element <frame> by number 0
$targetFrame = DOM::$frame->get_by_number(0);

// Check that DOM element was found
if ($targetFrame->inner_number != -1) {
    // Remove the frame element from the page
    echo $targetFrame->remove();
}

// Stop the application
WINDOW::$app->quit();
?>