<?php

// Scenario: Set value attribute of a DOM element
// Description: For current page, find a DOM element and set its value attribute
// Classes used: XHEInput, XHEInterface, XHEBrowser, XHEApplication

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

// Navigate to the test site
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example 1: Set value for element with name equal to txt1

// Get DOM element <input> by number 3
$targetInput = DOM::$input->get_by_number(3);

// Check that DOM element was found
if ($targetInput->inner_number != -1) {
    // Set value for the found element
    echo($targetInput->set_value("NEW VALUE"));
}



// Stop the application
WINDOW::$app->quit();
?>