<?php

// Scenario: Check if a DOM element is checked
// Description: For current page, find a checkbox element and check its state
// Classes used: XHECheckButton, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Check and uncheck a checkbox

// Navigate to the polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "checkbox.html");

// Get DOM element <input type="checkbox"> by number 4
$targetCheckbox = DOM::$checkbox->get_by_number(4);

// Check that the DOM element was found
if ($targetCheckbox->inner_number != -1) {
    // Check the checkbox
    echo $targetCheckbox->check();
    
    // Get checked state
    echo $targetCheckbox->is_checked();
    
    // Wait for 2 seconds
    sleep(2);
    
    // Uncheck the checkbox
    echo $targetCheckbox->check(false);
    
    // Get checked state again
    if (!$targetCheckbox->is_checked()) {
        echo "not checked";
    }
}

// Stop the application
WINDOW::$app->quit();
?>