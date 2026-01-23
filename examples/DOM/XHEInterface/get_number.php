<?php

// Scenario: For current page, find a DOM element and get its number
// Description: For current page, find a DOM element and get its number
// Classes used: XHEImage, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Get element number by its src

// Get image element by src attribute, exact match
$imageElement = DOM::$image->get_by_attribute("src", TEST_SCREENSHOTS_URL . "01.jpg", true);

// Check that the DOM element was found
if ($imageElement->inner_number != -1)
{
    // Get element number
    echo($imageElement->get_number() . "\n");
}

echo("\n");

// Example 2: Get image number by its src

// Get image element by src attribute, not exact match
$imageElement = DOM::$image->get_by_attribute("src", "02.jpg", false);

// Check that the DOM element was found
if ($imageElement->inner_number != -1)
{
    // Get image number
    echo($imageElement->get_number("image") . "\n");
}

// Stop the application
WINDOW::$app->quit();
?>