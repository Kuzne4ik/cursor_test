<?php

// Scenario: Get elements by attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find specific elements by their attributes within that collection
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

// Example: Get all div elements and then find specific divs by their attributes within that collection

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Try to find a div with a specific ID attribute (exact match)
    $targetAttrName = "id";
    $targetAttrValue = "example";
    $divByAttr = $divs->get_by_attribute($targetAttrName, $targetAttrValue, true);
    
    // Check if the div with the specified attribute was found
    if ($divByAttr && $divByAttr->is_exist())
    {
        echo "\nFound div with attribute '" . $targetAttrName . "' = '" . $targetAttrValue . "' (exact match):\n";
        echo "Div inner text: " . $divByAttr->get_inner_text() . "\n";
        echo "Div inner number: " . $divByAttr->inner_number . "\n";
        
        // Get the class attribute of the found div
        $divClass = $divByAttr->get_attribute("class");
        echo "Div class: " . $divClass . "\n";
    }
    else
    {
        echo "\nNo div with attribute '" . $targetAttrName . "' = '" . $targetAttrValue . "' (exact match) found in the collection\n";
    }
    
    // Try to find a div with a partial class attribute match in div elements
    $partialAttrName = "class";
    $partialAttrValue = "example";
    $divByPartialAttr = $divs->get_by_attribute($partialAttrName, $partialAttrValue, false);
    
    // Check if the div with the partial attribute was found in div elements and exists
    if ($divByPartialAttr && $divByPartialAttr->is_exist())
    {
        echo "\nFound div with partial attribute '" . $partialAttrName . "' = '" . $partialAttrValue . "':\n";
        echo "Div inner text: " . $divByPartialAttr->get_inner_text() . "\n";
        echo "Div inner number: " . $divByPartialAttr->inner_number . "\n";
        echo "Full class attribute: " . $divByPartialAttr->get_attribute("class") . "\n";

    }
    else
    {
        echo "\nNo div with partial attribute '" . $partialAttrName . "' = '" . $partialAttrValue . "' found in the collection\n";
    }

}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>