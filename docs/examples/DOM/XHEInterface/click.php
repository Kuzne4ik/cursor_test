<?php

// Scenario: For the current page, find a DOM element and perform click on it
// Description: For the current page, find a DOM element <a> and perform click on the found anchor
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting the init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get the DOM element anchor by number 1 among inputs of this type and perform click.

// Get the anchor object by number 1 among inputs of this type and get it as XHEInterface
$targetAnchor = DOM::$anchor->get_by_number(1);

// Check that the DOM element is received
if ($targetAnchor->inner_number != -1)
{
    // For the found anchor, perform click
    $targetAnchor->click();
}

// Stop the application
WINDOW::$app->quit();
?>