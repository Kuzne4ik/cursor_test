<?php

// Scenario: Scroll a DOM element into view
// Description: For current page, find a DOM element and scroll it into view with different alignment options
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

// Example 1: Scroll an anchor element into view with different alignment options

// Set browser height to 200 pixels
WEB::$browser->set_height(200);

// Navigate to polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Get DOM element <a> by id
$targetAnchor = DOM::$anchor->get_by_id("list");

// Check that DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Scroll element to visibility area (bottom alignment)
    echo $targetAnchor->scroll_to_view(0);
    
    sleep(2);
    
    // Scroll element to visibility area (top alignment)
    echo $targetAnchor->scroll_to_view(1);
    
    sleep(2);
    
    // Smoothly scroll element to visibility area (center alignment)
    echo $targetAnchor->scroll_to_view(2, true);
}

// Stop the application
WINDOW::$app->quit();
?>