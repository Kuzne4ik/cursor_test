<?php

// Scenario: Scroll a DOM element in different directions
// Description: For current page, find a DOM element and scroll it in different directions
// Classes used: XHEBody, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Scroll a body element in different directions

// Navigate to test site
echo WEB::$browser->navigate(TEST_SITE_URL);

sleep(3);

// Get DOM element <body> by number 0
$targetBody = DOM::$body->get_by_number(0);

// Check that DOM element was found
if ($targetBody->inner_number != -1) {
    // Scroll page down 3 times
    echo $targetBody->scroll("pageDown");
    echo $targetBody->scroll("pageDown");
    echo $targetBody->scroll("pageDown");
    
    usleep(100000);
    
    // Scroll down 3 times
    echo $targetBody->scroll("down");
    echo $targetBody->scroll("down");
    echo $targetBody->scroll("down");

    usleep(100000);
    
    // Scroll up 3 times
    echo $targetBody->scroll("up");
    echo $targetBody->scroll("up");
    echo $targetBody->scroll("up");

    usleep(100000);
    
    // Scroll page up 3 times
    echo $targetBody->scroll("pageUp");
    echo $targetBody->scroll("pageUp");
    echo $targetBody->scroll("pageUp");

    usleep(100000);
}

// Stop the application
WINDOW::$app->quit();
?>