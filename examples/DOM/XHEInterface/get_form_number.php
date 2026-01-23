<?php

// Scenario: For the current page, find a DOM element and get its serial number
// Description: For the current page, find a DOM element <form> and get its serial number
// Classes used: XHEForm, XHEInterface, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: For the current page, get DOM element <form>, as XHEInterface by serial number 2 and get its serial number

// Get DOM element <form>, as XHEInterface by serial number 2
$targetForm = DOM::$form->get_by_number(2);

// Check that the DOM element is received
if ($targetForm->inner_number != -1) {
    // Get for the DOM element its serial number (the final value should be equal to 2)
    $targetFormNumber = $targetForm->get_form_number();
}


// Stop the application
WINDOW::$app->quit();
?>