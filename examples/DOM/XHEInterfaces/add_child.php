<?php

// Scenario: Add a child element to elements in a collection
// Description: This example demonstrates how to get a collection of elements and add a child element to each
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

// Example: Get all div elements and add a child paragraph to each

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
$divsLength = $divs->count();
if ($divsLength > 0)
{
    echo "Found " . $divsLength . " div elements\n";
    
    // Define the child element tag and HTML content to add to all divs
    $childTag = "p";
    $childHTML = "This is a new paragraph added as a child element.";
    
    // Add the child element to all div elements
    $results = $divs->add_child($childTag, $childHTML);
    
    // Check if child was added successfully to all divs
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully added child element '" . $childTag . "' to " . $successCount . " out of " . $divsLength . " divs\n";
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>