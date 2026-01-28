<?php

// Scenario: Get all elements by ID from a collection
// Description: This example demonstrates how to get a collection of elements and then find all elements with a specific ID within that collection
// Classes used: XHEInterfaces, XHEDiv, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "divs.html");

// Example: Get all div elements and then find all divs with a specific ID within that collection

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Try to find all divs with a specific ID
    $targetId = "example";
    $divsById = $divs->get_all_by_id($targetId);
    
    // Check if any divs with the specified ID were found
    if ($divsById->count() > 0)
    {
        echo "\nFound " . $divsById->count() . " div elements with ID '" . $targetId . "':\n";
        
        // Process each found div
        for ($k = 0; $k < $divsById->count(); $k++)
        {
            $currentDiv = $divsById->get($k);
            
            if ($currentDiv && $currentDiv->is_exist())
            {
                echo "\nDiv #" . ($k + 1) . " with ID '" . $targetId . "':\n";
                echo "Div inner text: " . $currentDiv->get_inner_text() . "\n";
                echo "Div inner number: " . $currentDiv->inner_number . "\n";
            }
        }
    }
    else
    {
        echo "\nNo div elements with ID '" . $targetId . "' found in the collection\n";
    }
    
    // Try to find all divs with another ID
    $targetId2 = "test";
    $divsById2 = $divs->get_all_by_id($targetId2);
    
    // Check if any divs with the specified ID were found
    if ($divsById2->count() > 0)
    {
        echo "\nFound " . $divsById2->count() . " div elements with ID '" . $targetId2 . "':\n";
        
        // Process each found div
        for ($k = 0; $k < $divsById2->count(); $k++)
        {
            $currentDiv = $divsById2->get($k);
            
            if ($currentDiv && $currentDiv->is_exist())
            {
                echo "\nDiv #" . ($k + 1) . " with ID '" . $targetId2 . "':\n";
                echo "Div inner text: " . $currentDiv->get_inner_text() . "\n";
                echo "Div inner number: " . $currentDiv->inner_number . "\n";
            }
        }
    }
    else
    {
        echo "\nNo div elements with ID '" . $targetId2 . "' found in the collection\n";
    }
    
    // Try to find all divs with a non-existent ID
    $nonExistentId = "nonexistent";
    $divsByNonExistentId = $divs->get_all_by_id($nonExistentId);
    
    // Check if any divs with the non-existent ID were found
    if ($divsByNonExistentId->count() > 0)
    {
        echo "\nUnexpectedly found " . $divsByNonExistentId->count() . " div elements with ID '" . $nonExistentId . "'\n";
    }
    else
    {
        echo "\nAs expected, no div elements with ID '" . $nonExistentId . "' found in the collection\n";
    }
    
    // Display all div IDs in the collection for reference
    echo "\nAll div IDs in the collection:\n";
    for ($k = 0; $k < $divs->count(); $k++)
    {
        $currentDiv = $divs->get($k);
        
        if ($currentDiv && $currentDiv->is_exist())
        {
            $divId = $currentDiv->get_id();
            $divInnerText = $currentDiv->get_inner_text();
            $divClass = $currentDiv->get_attribute("class");
            
            echo "Div #" . ($k + 1) . ": ID = '" . $divId . "', Class = '" . $divClass . "', Text = '" . $divInnerText . "'\n";
        }
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>