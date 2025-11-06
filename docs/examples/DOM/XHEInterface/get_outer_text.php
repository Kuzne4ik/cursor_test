<?php

// Scenario: For current page, find a DOM element and get its outer text
// Description: For current page, find a DOM element and get its outer text
// Classes used: XHEDiv, XHEInterface, XHEBrowser, XHEApplication

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

// Navigate to the polygon page if page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get outer text of div with number 2

// Get div element by number 2
$targetDiv = DOM::$div->get_by_number(2);

// Check that the DOM element was found
if ($targetDiv->inner_number != -1)
{
    // Get outer text of the element
    echo($targetDiv->get_outer_text() . "\n");
}

// Stop the application
WINDOW::$app->quit();
?>