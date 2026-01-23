<?php

// Scenario: For the current page, find a DOM element as an object and clone this object
// Description: For the current page, find a DOM element <a> as an object and clone this object
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

// Example 1: For the current page, get DOM element <a> by 'href' attribute, as XHEInterface object, and make a clone of the object

// For the current page, get DOM element as XHEInterface object <a> by 'href' attribute, attribute value is not an exact match
$targetAnchor = DOM::$anchor->get_by_attribute("href",'site.com',false);

// Make a clone of the XHEInterface object into a variable
$cloneAnchorObject = $targetAnchor->get_clone();


// Stop the application
WINDOW::$app->quit();
?>