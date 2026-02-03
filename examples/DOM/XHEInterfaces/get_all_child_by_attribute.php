<?php

// Scenario: Get all child elements by attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find all child elements with a specific attribute
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

// Example: Get all div elements and then find all child elements with a specific attribute

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
$divsLength = $divs->count();
if ($divsLength > 0)
{
    echo "Found " . $divsLength . " div elements\n";
    
    // Try to find all child elements with a specific ID attribute (exact match)
    $targetAttrName = "id";
    $targetAttrValue = "example";
    $childrenById = $divs->get_all_child_by_attribute($targetAttrName, $targetAttrValue, true);
    
    // Check if any children with the specified attribute were found
    $childrenByIdCount = count($childrenById);
    if ($childrenByIdCount > 0)
    {
        echo "Found " . $childrenByIdCount . " child elements with attribute '" . $targetAttrName . "' = '" . $targetAttrValue . "' (exact match)\n";
        
        // Check each found child
        $successCount = 0;
        foreach ($childrenById as $child) {
            if ($child && $child->is_exist()) {
                $successCount++;
            }
        }
        
        echo "Successfully verified " . $successCount . " out of " . $childrenByIdCount . " child elements exist\n";
    }
    else
    {
        echo "No child elements with attribute '" . $targetAttrName . "' = '" . $targetAttrValue . "' (exact match) found\n";
    }
    
    // Try to find all child elements with a partial class attribute match search and include to search sub childs
    $partialAttrName = "class";
    $partialAttrValue = "example";
    $childrenByPartialAttr = $divs->get_all_child_by_attribute($partialAttrName, $partialAttrValue, false, true);
    
    // Check if any children with the partial attribute were found
    $childrenByPartialAttrCount = count($childrenByPartialAttr);
    if ($childrenByPartialAttrCount > 0)
    {
        echo "\nFound " . $childrenByPartialAttrCount . " child elements with partial attribute '" . $partialAttrName . "' = '" . $partialAttrValue . "':\n";
        
        // Check each found child
        $successCount = 0;
        foreach ($childrenByPartialAttr as $child) {
            if ($child && $child->is_exist()) {
                $successCount++;
            }
        }
        
        echo "Successfully verified " . $successCount . " out of " . $childrenByPartialAttrCount . " child elements exist\n";
    }
    else
    {
        echo "\nNo child elements with partial attribute '" . $partialAttrName . "' = '" . $partialAttrValue . "' found\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>