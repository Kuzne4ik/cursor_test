<?php

// Scenario: For the current page, find a DOM element and add a child DOM element to it as HTML code
// Description: For the current Browser page, find a DOM element <body> and add a child DOM element anchor to it as HTML code
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


// Example 1: Get the body object and add a child DOM element anchor to it as HTML code.
// Get the body object by number 0 as XHEInterface
$targetBody = DOM::$body->get_by_number(0);

// Check that the DOM element is received
if ($targetBody->inner_number != -1)
{
    // Add child DOM element anchor as HTML code
    $targetBody->add_child("a", "<a href=\"http://ya.ru\">yandex.ru</a>");
}


// Stop the application
WINDOW::$app->quit();
?>
