<?php

// Scenario: Get XPath of a DOM element
// Description: For current page, find a DOM element and get its XPath
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

// Example 1: Get XPath of an element by name

// Navigate to the polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Get DOM element <a> by name
$targetAnchor = DOM::$anchor->get_by_name("seonote");

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Get XPath of the found element
    echo $targetAnchor->get_xpath();
}

// Stop the application
WINDOW::$app->quit();
?>