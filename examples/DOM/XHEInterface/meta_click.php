<?php

// Scenario: Perform meta click on a DOM element
// Description: For current page, find a DOM element and perform a meta click (shift+click) on it
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

// Example 1: Perform meta click on an anchor element

// Navigate to the polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Get DOM element <a> by name
$targetAnchor = DOM::$anchor->get_by_name("onclick", 0);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Perform meta click (shift+click) on the element
    echo $targetAnchor->meta_click(false);
}

// Stop the application
WINDOW::$app->quit();
?>