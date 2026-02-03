<?php

// Scenario: Move cursor to a specific position in a collection of textarea elements
// Description: This example demonstrates how to get a collection of textarea elements and move the cursor to a specific position in each textarea
// Classes used: XHEInterfaces, XHETextarea, XHEBrowser, XHEApplication

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

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "textarea.html");

// Example: Get all textarea elements and move cursor to a specific position

// Get all textarea elements on the page
$textareas = DOM::$textarea->get_all();

// Check that we have found at least one textarea
if ($textareas->count() > 0)
{
    echo "Found " . $textareas->count() . " textarea elements\n";
    
    // Define the position to move the cursor to (position 5)
    $position = 5;
    
    // Move cursor to position 5 in all textareas
    $results = $textareas->seek_to_pos($position);
    
    // Check if cursor was moved successfully in all textareas
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully moved cursor to position " . $position . " in " . $successCount . " out of " . $textareas->count() . " textareas\n";
}
else
{
    echo "No textarea elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>