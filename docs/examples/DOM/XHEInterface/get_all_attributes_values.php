<?php

// Scenario: For the current page, find a DOM element and get all values of its attributes
// Description: For the current Browser page, find a DOM element <a> and get it as XHEInterface, and get all values of its attributes
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Get the anchor object and get all values of its attributes

// Get the anchor object by 'name' attribute, as XHEInterface
$targetAnchorInterface = DOM::$anchor->get_by_name("list");

// Get all attributes from the found anchor object.
// The result of the call is a string with separator "<br>" which contains attribute names
$attributesString = $targetAnchorInterface->get_all_attributes();
// Split the string into an array
$attributes = explode("<br>", $attributesString);
// Output all attribute names to the console one by one
foreach($attributes as $attribute)
    echo($attribute . "\n");

// Stop the application
WINDOW::$app->quit();
?>