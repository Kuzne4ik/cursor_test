<?php

// Scenario: Move mouse to a DOM element with different movement patterns
// Description: For current page, find a DOM element and move mouse to it using different movement patterns
// Classes used: XHEElement, XHEAnchor, XHEInterface, XHEBrowser, XHEApplication, XHEMouse

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

// Example 1: Move mouse to a button element

// Navigate to google
echo WEB::$browser->navigate("http://www.google.ru");

// Get DOM element by name
$targetElement = DOM::$element->get_by_name("btnI");

// Check that the DOM element was found
if ($targetElement->inner_number != -1) {
    // Move mouse to the element with offset (1,1)
    echo $targetElement->mouse_move_to(1,1);
}

echo("\n\n");

// Example 2: Move mouse to multiple anchor elements with different movement patterns

// Navigate to test site
echo WEB::$browser->navigate(TEST_SITE_URL);

// Get DOM element <a> by number 110
$targetAnchor1 = DOM::$anchor->get_by_number(110);

// Check that the DOM element was found
if ($targetAnchor1->inner_number != -1) {
    // Move mouse to the element with curve pattern and 2000ms duration
    echo $targetAnchor1->mouse_move_to(1,1,"curve",2000);
    
    sleep(1);
    
    // Get DOM element <a> by number 100
    $targetAnchor2 = DOM::$anchor->get_by_number(100);
    
    // Check that the DOM element was found
    if ($targetAnchor2->inner_number != -1) {
        // Move mouse to the element with chaotic pattern and 2000ms duration
        echo $targetAnchor2->mouse_move_to(1,1,"chaotic",2000);
        
        sleep(1);
        
        // Get DOM element <a> by number 10
        $targetAnchor3 = DOM::$anchor->get_by_number(10);
        
        // Check that the DOM element was found
        if ($targetAnchor3->inner_number != -1) {
            // Move mouse to the element with circle pattern and 2000ms duration
            echo $targetAnchor3->mouse_move_to(1,1,"circle",2000);
            
            // Click at current mouse position
            echo "\n" . SYSTEM::$mouse->click();
            
            // Wait for page to load
            WEB::$browser->wait_js();
        }
    }
}

// Stop the application
WINDOW::$app->quit();
?>