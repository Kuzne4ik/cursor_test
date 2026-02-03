<?php

// Scenario: Scroll a collection of DOM elements
// Description: This example demonstrates how to get a collection of elements and scroll each element
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

// Example: Get all div elements and scroll each

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Scroll all divs down
    $results = $divs->scroll("down");
    
    // Check if all elements were scrolled successfully
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully scrolled down " . $successCount . " out of " . $divs->count() . " divs\n";
    
    // Scroll all divs up
    $results = $divs->scroll("up");
    
    // Check if all elements were scrolled successfully
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully scrolled up " . $successCount . " out of " . $divs->count() . " divs\n";
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>