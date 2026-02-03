<?php

// Scenario: For current page, find an image element and get its src attribute
// Description: For current page, find an image element and get its src attribute
// Classes used: XHEImage, XHEInterface, XHEBrowser, XHEApplication

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

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Get src of image by its name

// Get image element by name
$targetImage = DOM::$image->get_by_name("screen1");

// Check that the DOM element was found
if ($targetImage->inner_number != -1)
{
    // Get src of image
    echo($targetImage->get_src() . "\n");
}

// Stop the application
WINDOW::$app->quit();
?>