<?php

// Scenario: Get all elements by inner HTML from a collection
// Description: This example demonstrates how to get a collection of elements and then find all elements with specific inner HTML within that collection
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

// Example: Get all div elements and then find all divs with specific inner HTML within that collection

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Try to find all divs with a specific inner HTML (exact match)
    $targetHtml = "<p>Example</p>";
    $divsByHtml = $divs->get_all_by_inner_html($targetHtml, true);
    
    // Check if any divs with the specified inner HTML were found
    if ($divsByHtml->count() > 0)
    {
        echo "\nFound " . $divsByHtml->count() . " div elements with inner HTML '" . $targetHtml . "' (exact match):\n";
        
        // Process each found div
        for ($k = 0; $k < $divsByHtml->count(); $k++)
        {
            $currentDiv = $divsByHtml->get($k);
            
            if ($currentDiv->is_exist())
            {
                echo "\nDiv #" . ($k + 1) . " with inner HTML '" . $targetHtml . "':\n";
                echo "Div ID: " . $currentDiv->get_id() . "\n";
                echo "Div inner number: " . $currentDiv->inner_number . "\n";
            }
        }
    }
    else
    {
        echo "\nNo div elements with inner HTML '" . $targetHtml . "' (exact match) found in the collection\n";
    }
    
    // Try to find all divs with a partial inner HTML match
    $partialHtml = "Example";
    $divsByPartialHtml = $divs->get_all_by_inner_html($partialHtml, false);
    
    // Check if any divs with the partial inner HTML were found
    if ($divsByPartialHtml->count() > 0)
    {
        echo "\nFound " . $divsByPartialHtml->count() . " div elements with partial inner HTML '" . $partialHtml . "':\n";
        
        // Process each found div
        for ($k = 0; $k < $divsByPartialHtml->count(); $k++)
        {
            $currentDiv = $divsByPartialHtml->get($k);
            
            if ($currentDiv->is_exist())
            {
                echo "\nDiv #" . ($k + 1) . " with partial inner HTML '" . $partialHtml . "':\n";
                echo "Div ID: " . $currentDiv->get_id() . "\n";
                echo "Div inner number: " . $currentDiv->inner_number . "\n";
                echo "Full inner HTML: " . $currentDiv->get_inner_html() . "\n";
            }
        }
    }
    else
    {
        echo "\nNo div elements with partial inner HTML '" . $partialHtml . "' found in the collection\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>