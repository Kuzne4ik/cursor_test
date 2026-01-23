<?php

// Scenario: Perform a meta click on a collection of DOM elements
// Description: This example demonstrates how to get a collection of buttons and perform a meta click (focus, mouse move, and click) on each element
// Classes used: XHEInterfaces, XHEButton, XHEBrowser, XHEApplication

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

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "button.html");

// Example: Get all button elements and perform a meta click on each

// Get all button elements on the page
$buttons = DOM::$button->get_all();

// Check that we have found at least one button
if ($buttons->count() > 0)
{
    echo "Found " . $buttons->count() . " button elements\n";
    
    // Perform meta click on all buttons
    $results = $buttons->meta_click(true);
    
    // Check if all meta clicks were successful
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully performed meta click on " . $successCount . " out of " . $buttons->count() . " buttons\n";
}
else
{
    echo "No button elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>