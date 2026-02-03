<?php

// Scenario: Get elements by inner HTML from a collection
// Description: This example demonstrates how to get a collection of elements and then find specific elements by their inner HTML within that collection
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
WEB::$browser->navigate(TEST_POLYGON_URL . "divs.html");

// Example: Get all div elements and then find specific divs by their inner HTML within that collection

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Try to find a div with a specific inner HTML (exact match) in div elements
    $targetHtml = "<p>Example paragraph</p>";
    $divByHtml = $divs->get_by_inner_html($targetHtml, true);
    
    // Check if the div with the specified inner HTML was found in div elements and exists
    if ($divByHtml && $divByHtml->is_exist())
    {
        echo "\nFound div with inner HTML '" . $targetHtml . "' (exact match):\n";
        echo "Div inner number: " . $divByHtml->inner_number . "\n";
        echo "Div ID: " . $divByHtml->get_id() . "\n";
    }
    else
    {
        echo "\nNo div with inner HTML '" . $targetHtml . "' (exact match) found in the collection\n";
    }
    
    // Try to find a div with a partial inner HTML match in div elements
    $partialHtml = "Example";
    $divByPartialHtml = $divs->get_by_inner_html($partialHtml, false);
    
    // Check if the div with the partial inner HTML was found in div elements and exists
    if ($divByPartialHtml && $divByPartialHtml->is_exist())
    {
        echo "\nFound div with partial inner HTML '" . $partialHtml . "':\n";
        echo "Div inner number: " . $divByPartialHtml->inner_number . "\n";
        echo "Div ID: " . $divByPartialHtml->get_id() . "\n";
        echo "Full inner HTML: " . $divByPartialHtml->get_inner_html() . "\n";
    }
    else
    {
        echo "\nNo div with partial inner HTML '" . $partialHtml . "' found in the collection\n";
    }
    
    // Try to find a div with another inner HTML in div elements
    $targetHtml2 = "<span>Test</span>";
    $divByHtml2 = $divs->get_by_inner_html($targetHtml2, true);
    
    // Check if the div with the specified inner HTML was found in div elements and exists
    if ($divByHtml2 && $divByHtml2->is_exist())
    {
        echo "\nFound div with inner HTML '" . $targetHtml2 . "':\n";
        echo "Div inner number: " . $divByHtml2->inner_number . "\n";
        echo "Div ID: " . $divByHtml2->get_id() . "\n";
    }
    else
    {
        echo "\nNo div with inner HTML '" . $targetHtml2 . "' found in the collection\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>