<?php

// Scenario: For the current page, get a DOM element and get its inner text
// Description: For the current page, get a DOM element <div> by 'id' and get its inner text
// Classes used: XHEDiv, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: For the current page, get DOM element <div> by 'id' and get the value of its inner text

// For the current page, get DOM element <div> by 'id', not an exact match of attribute value
$targetAnchor = DOM::$anchor->get_by_attribute("id",'id1', false);

// Check that the DOM element is received
if ($targetAnchor->inner_number != -1)
{
    // For the DOM element, get the value of inner text
    $targetAnchor->get_inner_text();
}


// Stop the application
WINDOW::$app->quit();
?>
