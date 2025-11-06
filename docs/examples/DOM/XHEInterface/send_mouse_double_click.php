<?php

// Scenario: Send mouse double click event to a DOM element
// Description: For current page, find an image element and send a mouse double click event to it
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

// Example 1: Send mouse double click event to an image element

// Navigate to Google
echo WEB::$browser->navigate("http://google.ru") . "\n";

// Get DOM element <img> by number 0
$targetImage = DOM::$image->get_by_number(0);

// Check that DOM element was found
if ($targetImage->inner_number != -1) {
    // Double click on the element with text 'Google'
    echo "2. Double click on the element with text 'Google': ";
    echo $targetImage->send_mouse_double_click($targetImage->get_width()/2, -10);
}

// Stop the application
WINDOW::$app->quit();
?>