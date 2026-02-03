<?php

// Scenario: For the current page, find a DOM element and get a child DOM element by xpath expression
// Description: For the current page, find 0 DOM element <form> and get its child DOM element by xpath expression
// Classes used: XHEForm, XHEInterface, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: For the current page, get 0 DOM element <form> and get its first child DOM element by xpath expression, search at the first level of the tree

// Get DOM element <form> by number 0
$targetForm = DOM::$form->get_by_number(0);

// Check that the DOM element is received
if ($targetForm->inner_number != -1) {
    // Get the first found child DOM element by xpath expression as XHEInterface, exact match of value, search for descendant at the first level of the tree
    $targetFormChild = $targetForm->get_child_by_xpath("/a[2]");

    // Check that the DOM element is received
    if ($targetFormChild->inner_number != -1) {
        // Call the get_tag() method for the element to get its tag name.
        $targetFormChild->get_tag();
    }
}

// Stop the application
WINDOW::$app->quit();
?>
