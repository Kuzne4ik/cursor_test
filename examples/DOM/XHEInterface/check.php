<?php

// Scenario: For the current page, find a DOM element checkbox and set a mark on it
// Description: For the current page, find a DOM element <input type="checkbox"> and for the found checkbox, set or remove the mark
// Classes used: XHECheckButton, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting the init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "checkbox.html");

// Example 1: Find the DOM element checkbox and set a mark on it.
// Get the input object with type checkbox by serial number 1 among inputs of this type and get it as XHEInterface
$targetCheckBox = DOM::$checkbox->get_by_number(1);

// Check that the DOM element is received
if ($targetCheckBox->inner_number != -1)
{
    // For the found checkbox, set the mark (add the checked attribute)
    $targetCheckBox->check(true);
}


// Example 2: Find the DOM element checkbox and remove the mark from it.
// Get the input object with type checkbox by serial number 1 among inputs of this type and get it as XHEInterface
$targetCheckBox = DOM::$checkbox->get_by_number(1);

// Check that the DOM element is received
if ($targetCheckBox->inner_number != -1)
{
    // For the found checkbox, remove the mark (remove the checked attribute)
    $targetCheckBox->check(false);
}

// Stop the application
WINDOW::$app->quit();
?>