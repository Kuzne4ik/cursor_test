<?php

// Scenario: Perform mouse click on a DOM element
// Description: For current page, find a DOM element and perform a mouse click on it
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Perform mouse click on an anchor element

// Navigate to google
echo WEB::$browser->navigate("http://google.ru");

// Get DOM element <a> by number 6
$targetAnchor = DOM::$anchor->get_by_number(6);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Perform mouse click on the element with offset (1,1)
    echo $targetAnchor->mouse_click(1,1);
    
    // Wait for page to load
    WEB::$browser->wait_js();
}

echo("\n\n");

// Example 2: Perform mouse click on another anchor element

// Navigate to test site
echo WEB::$browser->navigate(TEST_SITE_URL);

// Get DOM element <a> by number 110
$targetAnchor = DOM::$anchor->get_by_number(110);

// Check that the DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Perform mouse click on the element with offset (2,12)
    echo $targetAnchor->mouse_click(2,12);
}

// Stop the application
WINDOW::$app->quit();
?>