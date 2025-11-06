<?php

// Scenario: For the current page, find a DOM element and get the count of its child DOM elements
// Description: For the current page, find 0 DOM element <form> and get the count of its child DOM elements
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

// Example 1: For the current page, find and get 0 DOM element <form> and get the count of its child DOM elements, search for all child elements at the first level of the tree

// Get DOM element <form> by number 0
$targetForm = DOM::$form->get_by_number(0);

// Check that the DOM element is received
if ($targetForm->inner_number != -1) {
    // Get and output the count of first level child elements
    echo($targetForm->get_child_count(false));
}


// Example 2: For the current page, find and get 0 DOM element <form>, and get the count of its child DOM elements, search for all child elements at any level of the tree

// Get DOM element <form> by number 0
$targetForm = DOM::$form->get_by_number(0);

// Check that the DOM element is received
if ($targetForm->inner_number != -1) {
    // Get and output the count of child elements at any level of the tree
    echo($targetForm->get_child_count(true));
}

// Stop the application
WINDOW::$app->quit();
?>