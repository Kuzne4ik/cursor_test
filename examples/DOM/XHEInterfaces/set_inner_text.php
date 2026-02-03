<?php

// Scenario: Set inner text for a collection of elements
// Description: This example demonstrates how to get a collection of elements and set inner text for each element
// Classes used: XHEInterfaces, XHEDiv, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example: Get all div elements and set inner text for each div

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Define the inner text to set for all divs
    $text = "New inner text for all divs";
    
    // Set the inner text for all div elements
    $results = $divs->set_inner_text($text);
    
    // Check if inner text was set successfully in all divs
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully set inner text '" . $text . "' in " . $successCount . " out of " . $divs->count() . " divs\n";
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>