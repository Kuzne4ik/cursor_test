<?php

// Scenario: Check if a DOM element is disabled
// Description: For current page, find a button element and check if it is disabled
// Classes used: XHEButton, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Check if a button is disabled

// Navigate to the polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "btn.html");

// Get DOM element <button> by name
$targetButton = DOM::$btn->get_by_name("add_comment_button");

// Check that the DOM element was found
if ($targetButton->inner_number != -1) {
    // Check if the button is disabled
    echo $targetButton->is_disabled();
}

// Stop the application
WINDOW::$app->quit();
?>