<?php

// Scenario: For the current page, find a DOM element and get the next element in the DOM tree
// Description: For the current page, find a DOM element and get the next element in the DOM tree
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: For the current page, get a DOM element and get the next element in the DOM tree

// Get the anchor object by 'name' attribute, as XHEInterface
$targetAnchor = DOM::$anchor->get_by_name("carnote");

// Check that the DOM element is received
if ($targetAnchor->inner_number != -1)
{
    // Get the next element in the DOM tree
    $obj_p = $targetAnchor->get_next();
    
    // Check that the next element is received
    if ($obj_p->inner_number != -1)
    {
        // Get tag and number of next element
        echo($obj_p->get_tag()." ".$obj_p->get_number("element") . "\n");
    }
}

// Example 2: For the current page, get a DOM element and get the previous element in the DOM tree

// Get the anchor object by 'name' attribute, as XHEInterface
$targetAnchor = DOM::$anchor->get_by_name("carnote");

// Check that the DOM element is received
if ($targetAnchor->inner_number != -1)
{
    // Get the previous element in the DOM tree
    $obj_p = $targetAnchor->get_prev();
    
    // Check that the previous element is received
    if ($obj_p->inner_number != -1)
    {
        // Get tag and number of previous element
        echo($obj_p->get_tag() . " " . $obj_p->get_number("element") . "\n");
    }
}

// Example 3: For the current page, get a DOM element and get its tag and number

// Get the anchor object by 'name' attribute, as XHEInterface
$targetAnchor = DOM::$anchor->get_by_name("carnote");

// Check that the DOM element is received
if ($targetAnchor->inner_number != -1)
{
    // Get tag and number of current element
    echo($targetAnchor->get_tag() . " " . $targetAnchor->get_number("element") . "\n");
}

// Stop the application
WINDOW::$app->quit();
?>