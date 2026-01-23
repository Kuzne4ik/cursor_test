<?php

// Scenario: For the current page, find a DOM element image and get the value of its 'alt' attribute.
// Description: For the current Browser page, find a DOM element <image>, and get it as XHEInterface and get the value of its 'alt' attribute
// Classes used: XHEImage, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Get the image object by 'src' attribute and get the value of its 'alt' attribute.

// Get the image object as XHEInterface by 'name' attribute, not strict match of attribute value
$targetImageInterface = DOM::$image->get_by_attribute("name", "screen1", false);

// Check that the DOM element is received
if ($targetImageInterface->inner_number != -1) {
    // For the found <image> object, get the value of its 'alt' attribute, as a variable
    $targetImageInterfaceAlt = $targetImageInterface->get_alt();
}

// Stop the application
WINDOW::$app->quit();
?>