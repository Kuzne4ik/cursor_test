<?php

// Scenario: Check if a DOM element is currently visible in the viewport
// Description: For current page, find a DOM element and check if it is currently visible in the viewport
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

// Example 1: Check if an element is visible in the viewport

// Navigate to the test site
echo WEB::$browser->navigate(TEST_SITE_URL);

// Get DOM element <a> by number 0
$targetAnchor = DOM::$anchor->get_by_number(0);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Check if the element is visible in the viewport
    echo $targetAnchor->is_view_now();
}

echo("\n\n");

// Example 2: Check if anchor 100 is visible and make it visible if not

// Get DOM element <a> by number 100
$targetAnchor = DOM::$anchor->get_by_number(100);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Check if the element is visible in the viewport
    if (!$targetAnchor->is_view_now()) {
        echo "not visible";
    }
    
    // Make the element visible by scrolling to it
    echo $targetAnchor->ensure_visible();
    
    // Check again if the element is visible in the viewport
    echo $targetAnchor->is_view_now();
}

// Stop the application
WINDOW::$app->quit();
?>