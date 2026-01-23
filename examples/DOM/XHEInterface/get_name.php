<?php

// Scenario: For current page, find a DOM element and get the value of its 'name' attribute
// Description: For current page, find 0 DOM element <input> and get the value of its 'name' attribute
// Classes used: XHEInput, XHEInterface, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: For the current page, find and get 0 DOM element <input> and get its 'name' attribute value

// Get DOM element <input> by number 0
$targetForm = DOM::$input->get_by_number(0);

// Check that the DOM element was found
if ($targetForm->inner_number != -1) {
    // For the found <input> object, get the value of the 'name' attribute
    echo($targetForm->get_name());
}



// Stop the application
WINDOW::$app->quit();
?>