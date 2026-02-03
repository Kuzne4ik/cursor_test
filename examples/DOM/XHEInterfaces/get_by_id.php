<?php

// Scenario: Get elements by ID from a collection
// Description: This example demonstrates how to get a collection of elements and then find specific elements by ID within that collection
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

// Example: Get all div elements and then find specific divs by ID within that collection

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Try to find a div with a specific ID (exact match) in div elements
    $targetId = "example";
    $divById = $divs->get_by_id($targetId, true);
    
    // Check if the div with the specified ID was found in div elements and exists
    if ($divById && $divById->is_exist())
    {
        echo "\nFound div with ID '" . $targetId . "':\n";
        echo "Div inner text: " . $divById->get_inner_text() . "\n";
        echo "Div inner number: " . $divById->inner_number . "\n";
        echo "Div name: " . $divById->get_name() . "\n";
    }
    else
    {
        echo "\nNo div with ID '" . $targetId . "' found in the collection\n";
    }
    
    // Try to find a div with a partial ID match in div elements
    $targetId2 = "test";
    $divById2 = $divs->get_by_id($targetId2, false);
    
    // Check if the div with the specified ID was found in div elements and exists
    if ($divById2 && $divById2->is_exist())
    {
        echo "\nFound div with ID '" . $targetId2 . "':\n";
        echo "Div inner text: " . $divById2->get_inner_text() . "\n";
        echo "Div inner number: " . $divById2->inner_number . "\n";
        echo "Full ID: " . $divById2->get_id() . "\n";
    }
    else
    {
        echo "\nNo div with ID '" . $targetId2 . "' found in the collection\n";
    }
    
    // Try to find a div with a non-existent ID (exact match) in div elements
    $nonExistentId = "nonexistent";
    $divByNonExistentId = $divs->get_by_id($nonExistentId, true);
    
    // Check if the div with the non-existent ID was found in div elements and exists
    if ($divByNonExistentId && $divByNonExistentId->is_exist())
    {
        echo "\nUnexpectedly found div with ID '" . $nonExistentId . "'\n";
    }
    else
    {
        echo "\nAs expected, no div with ID '" . $nonExistentId . "' found in the collection\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>