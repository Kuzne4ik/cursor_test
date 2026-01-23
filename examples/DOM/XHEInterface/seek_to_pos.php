<?php

// Scenario: Move cursor to a specific position in a textarea element
// Description: For current page, find a textarea element and move cursor to a specific position
// Classes used: XHETextArea, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Move cursor to position 10 in a textarea element

// Navigate to test site
echo WEB::$browser->navigate(TEST_POLYGON_URL . "textarea.html");

// Get DOM element <textarea> by number 0
$targetTextarea = DOM::$textarea->get_by_number(0);

// Check that DOM element was found
if ($targetTextarea->inner_number != -1) {
    // Move cursor to position 10
    echo $targetTextarea->seek_to_pos(10);
}

// Stop the application
WINDOW::$app->quit();
?>