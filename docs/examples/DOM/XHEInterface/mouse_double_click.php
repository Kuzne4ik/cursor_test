<?php

// Scenario: Perform mouse double click on a DOM element
// Description: For current page, find a DOM element and perform a mouse double click on it
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

// Example 1: Perform mouse double click on an image element

// Navigate to google
echo WEB::$browser->navigate("http://google.ru");

// Get DOM element <img> by id
$targetImage = DOM::$image->get_by_id("logo", false);

// Check that the DOM element was found
if ($targetImage->inner_number != -1) {
    // Perform mouse double click on the element with offset (width+5,5)
    echo $targetImage->mouse_double_click($targetImage->get_width()+5, 5);
}

// Stop the application
WINDOW::$app->quit();
?>