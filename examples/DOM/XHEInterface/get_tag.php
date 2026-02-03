<?php

// Scenario: For current page, find a DOM element and get its tag
// Description: For current page, find a DOM element and get its tag
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

// Navigate to polygon page if page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Get tag of image by its name

// Get image element by name
$targetImage = DOM::$image->get_by_name("screen1");

// Check that DOM element was found
if ($targetImage->inner_number != -1)
{
    // Get tag of image
    echo($targetImage->get_tag() . "\n");
}

// Example 2: Get tag of image and its dimensions by its name

// Get image element by name
$targetImage = DOM::$image->get_by_name("screen1");

// Check that DOM element was found
if ($targetImage->inner_number != -1)
{
    // Get tag and dimensions of image
    echo($targetImage->get_tag() . " " . $targetImage->get_width() . " " . $targetImage->get_height() . "\n");
}

// Stop application
WINDOW::$app->quit();
?>