<?php

// Scenario: For current page, find a DOM element and get the count of its parent elements
// Description: For the current page, find a DOM element and get the count of its parent elements in the DOM tree
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

// Example 1: Get the count of parent elements

// Get the anchor object by 'name' attribute, as XHEInterface
$targetAnchor = DOM::$anchor->get_by_name("seonote");

// Check that the DOM element is received
if ($targetAnchor->inner_number != -1)
{
    // Get the count of parent elements
    $parentsCount = $targetAnchor->get_parents_count();
    echo($parentsCount . "\n");
}

// Stop the application
WINDOW::$app->quit();
?>