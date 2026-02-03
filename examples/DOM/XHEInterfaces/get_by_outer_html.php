<?php

// Scenario: Get elements by outer HTML from a collection
// Description: This example demonstrates how to get a collection of elements and then find specific elements by their outer HTML within that collection
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

// Example: Get all div elements and then find specific divs by their outer HTML within that collection

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Try to find a div with a specific outer HTML (exact match)  in div elements
    $targetHtml = "<div id=\"example\"><p>Example paragraph</p></div>";
    $divByHtml = $divs->get_by_outer_html($targetHtml, true);
    
    // Check if the div with the specified outer HTML was found in div elements and exists
    if ($divByHtml && $divByHtml->is_exist())
    {
        echo "\nFound div with outer HTML '" . $targetHtml . "' (exact match):\n";
        echo "Div inner number: " . $divByHtml->inner_number . "\n";
        echo "Div ID: " . $divByHtml->get_id() . "\n";
        
        // Get the class attribute of the found div
        $divClass = $divByHtml->get_attribute("class");
        echo "Div class: " . $divClass . "\n";
    }
    else
    {
        echo "\nNo div with outer HTML '" . $targetHtml . "' (exact match) found in the collection\n";
    }
    
    // Try to find a div with a partial outer HTML match in div elements
    $partialHtml = "Example";
    $divByPartialHtml = $divs->get_by_outer_html($partialHtml, false);
    
    // Check if the div with the partial outer HTML was found in div elements and exists
    if ($divByPartialHtml && $divByPartialHtml->is_exist())
    {
        echo "\nFound div with partial outer HTML '" . $partialHtml . "':\n";
        echo "Div inner number: " . $divByPartialHtml->inner_number . "\n";
        echo "Div ID: " . $divByPartialHtml->get_id() . "\n";
        echo "Full outer HTML: " . $divByPartialHtml->get_outer_html() . "\n";
        
        // Get the parent element of the found div
        $parentElement = $divByPartialHtml->get_parent();
        
        if ($parentElement && $parentElement->is_exist())
        {
            echo "Parent element exists\n";
        }
    }
    else
    {
        echo "\nNo div with partial outer HTML '" . $partialHtml . "' found in the collection\n";
    }
    
    // Try to find a div with another outer HTML in div elements
    $targetHtml2 = "<div id=\"test\"><span>Test</span></div>";
    $divByHtml2 = $divs->get_by_outer_html($targetHtml2, true);
    
    // Check if the div with the specified outer HTML was found in div elements and exists
    if ($divByHtml2 && $divByHtml2->is_exist())
    {
        echo "\nFound div with outer HTML '" . $targetHtml2 . "':\n";
        echo "Div inner number: " . $divByHtml2->inner_number . "\n";
        echo "Div ID: " . $divByHtml2->get_id() . "\n";
    }
    else
    {
        echo "\nNo div with outer HTML '" . $targetHtml2 . "' found in the collection\n";
    }
    
    // Display all div outer HTMLs in the collection for reference
    echo "\nAll div outer HTMLs in the collection:\n";
    for ($k = 0; $k < $divs->count(); $k++)
    {
        $currentDiv = $divs->get($k);
        
        if ($currentDiv && $currentDiv->is_exist())
        {
            $divOuterHtml = $currentDiv->get_outer_html();
            $divId = $currentDiv->get_id();
            
            echo "Div #" . ($k + 1) . ": ID = '" . $divId . "', Outer HTML = '" . $divOuterHtml . "'\n";
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