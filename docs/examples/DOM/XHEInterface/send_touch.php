<?php

// Scenario: Send touch event to a DOM element
// Description: For current page, find an anchor element and send touch events to it
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Send touch event to an anchor element

// Navigate to Google
echo WEB::$browser->navigate("http://www.google.ru") . "\n";

// Get DOM element <a> by inner text "About"
$targetAnchor = DOM::$anchor->get_by_inner_text("About");

// Check that DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Move mouse to 'About'
    echo "2. Move mouse to 'About': ";
    echo $targetAnchor->mouse_move(10, 10);
    echo("\n");
    sleep(1);
    echo $targetAnchor->send_touch(0, 0, 10, 10);
}

// Stop application
WINDOW::$app->quit();
?>