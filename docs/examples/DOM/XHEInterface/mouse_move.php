<?php

// Scenario: Move mouse relative to a DOM element
// Description: For current page, find a DOM element and move mouse relative to it
// Classes used: XHEButton, XHEAnchor, XHEInterface, XHEBrowser, XHEApplication, XHEMouse

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

// Example 1: Move mouse relative to a button element

// Navigate to google
echo WEB::$browser->navigate("http://google.ru");

// Get DOM element <button> by name
$targetButton = DOM::$button->get_by_name("btnI");

// Check that the DOM element was found
if ($targetButton->inner_number != -1) {
    // Move mouse relative to the element with offset (1,1)
    echo $targetButton->mouse_move(1,1);
    
    // Click at current mouse position
    echo SYSTEM::$mouse->click();
    
    // Wait for page to load
    WEB::$browser->wait_js();
}

echo("\n\n");

// Example 2: Move mouse relative to multiple anchor elements

// Navigate to test site
echo WEB::$browser->navigate(TEST_SITE_URL);

// Get DOM element <a> by number 110
$targetAnchor1 = DOM::$anchor->get_by_number(110);

// Check that the DOM element was found
if ($targetAnchor1->inner_number != -1) {
    // Move mouse relative to the element with offset (1,1)
    echo $targetAnchor1->mouse_move(1,1);
    
    sleep(1);
    
    // Get DOM element <a> by number 100
    $targetAnchor2 = DOM::$anchor->get_by_number(100);
    
    // Check that the DOM element was found
    if ($targetAnchor2->inner_number != -1) {
        // Move mouse relative to the element with offset (1,1)
        echo $targetAnchor2->mouse_move(1,1);
        
        sleep(1);
        
        // Get DOM element <a> by number 10
        $targetAnchor3 = DOM::$anchor->get_by_number(10);
        
        // Check that the DOM element was found
        if ($targetAnchor3->inner_number != -1) {
            // Move mouse relative to the element with offset (1,1) and speed 1
            echo $targetAnchor3->mouse_move(1,1,1);
        }
    }
}

// Stop the application
WINDOW::$app->quit();
?>