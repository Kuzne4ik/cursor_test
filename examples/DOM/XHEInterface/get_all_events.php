<?php

// Scenario: For the current page, find a DOM element and get all names of event-attributes
// Description: For the current page, find a DOM element as XHEInterface and get all names of event-attributes
// Classes used: XHEAnchor, XHEBrowser, XHEApplication, XHEInterface

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
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get the DOM element anchor by id with text 'onclick' and get all names of event-attributes

// Get the anchor object by id with text 'onclick', attribute value is not an exact match and get it as XHEInterface
$targetAnchor = DOM::$anchor->get_by_attribute('id', 'onclick', false);

// Get all names of event-attributes for the anchor object, as a string with separator '<br>'
$targetAnchorEventsString = $targetAnchor->get_all_events();
// Split the string into an array
$targetAnchorEvents = explode("<br>", $targetAnchorEventsString);
// Output all names of event-attributes to the console one by one
foreach($targetAnchorEvents as $targetAnchorEvent)
    echo($targetAnchorEvent . "\n");

// Stop the application
WINDOW::$app->quit();
?>