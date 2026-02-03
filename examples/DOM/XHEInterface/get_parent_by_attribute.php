<?php

// Scenario: For current page, find a DOM element and get its parent element by attribute
// Description: For current page, find a DOM element and get its parent element by attribute
// Classes used: XHEButton, XHEInterface, XHEBrowser, XHEApplication

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

// Navigate to the polygon page if page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "btn.html");

// Example 1: Get tags of parent element with specified attribute value

// Get button element by number 0
$targetButton = DOM::$btn->get_by_number(0);

// Check that the DOM element was found
if ($targetButton->inner_number != -1)
{
    // Get parent element by attribute
    $parentElement = $targetButton->get_parent_by_attribute("class", "suggest", false);
    
    // Check that the parent element was found
    if ($parentElement->inner_number != -1)
    {
        // Get tag of parent element
        echo($parentElement->get_tag() . "\n");
    }
}

// Example 2: Get non-existent parent element with specified attribute value

// Get button element by number 0
$targetButton = DOM::$btn->get_by_number(0);

// Check that the DOM element was found
if ($targetButton->inner_number != -1)
{
    // Get non-existent parent element by attribute
    $parentElement = $targetButton->get_parent_by_attribute("class", "nonexistent", false);
    
    // Check that the parent element was not found
    if ($parentElement->inner_number == -1)
    {
        echo("No such element\n");
    }
}

// Stop the application
WINDOW::$app->quit();
?>