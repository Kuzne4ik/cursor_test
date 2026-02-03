<?php

// Scenario: Get outer text for a collection of elements
// Description: This example demonstrates how to get a collection of elements and retrieve outer text for each element
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

// Example: Get all div elements and retrieve outer text for each div

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Get outer text for all div elements
    $outer_texts = $divs->get_outer_text();
    
    // Display outer text
    echo "Outer text for all divs:\n";
    foreach ($outer_texts as $index => $text) {
        echo "Div " . ($index + 1) . ": " . $text . "\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>