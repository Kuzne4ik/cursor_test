<?php

// Scenario: For the current page, find a DOM element and get the tag names of all its parents in the DOM tree
// Description: For the current page, find a DOM element as XHEInterface and get the tag names of the chain of all its parents in the DOM tree
// Classes used: XHEAnchor, XHEBrowser, XHEApplication, XHEInterface, XHEInterfaces

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

// Example 1: Get the DOM element anchor by id with text 'onclick' and get the tag names of all its parents in the DOM tree

// Get the anchor object by id with text 'onclick', attribute value is not an exact match and get it as XHEInterface
$targetAnchor = DOM::$anchor->get_by_attribute('id', 'onclick', false);

// Get all parent elements for the current anchor DOM element, as a collection object of type XHEInterfaces
$divParents = $targetAnchor->get_all_parents();

// For the collection object of type XHEInterfaces, call the get_tag() method on each element of the collection to get its tag name.
// As a result of execution, an array of tag name strings for parent elements of the current DOM element will be returned.
$targetDivParentTags = $divParents->get_tag();
// Output all tags to the console one by one
foreach ($targetDivParentTags as $parentTag)
    echo($parentTag . "\n");

// Stop the application
WINDOW::$app->quit();
?>