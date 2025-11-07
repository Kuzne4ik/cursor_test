<?php

// Scenario: Get all child elements by attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find all child elements with a specific attribute for each element in the collection
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

// Example: Get all div elements and then find all child elements with a specific attribute for each div

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Process each div to find all child elements with a specific attribute
    for ($i = 0; $i < $divs->count(); $i++)
    {
        // Get the current div
        $currentDiv = $divs->get($i);
        
        // Check that the element exists
        if ($currentDiv && $currentDiv->is_exist())
        {
            echo "\nProcessing div #" . ($i + 1) . "\n";
            echo "Div ID: " . $currentDiv->get_id() . "\n";
            echo "Div class: " . $currentDiv->get_attribute("class") . "\n";
            echo "Div inner text: " . $currentDiv->get_inner_text() . "\n";
            
            // Try to find all child elements with a specific ID attribute (exact match)
            $targetAttrName = "id";
            $targetAttrValue = "example";
            $childrenById = $currentDiv->get_all_child_by_attribute($targetAttrName, $targetAttrValue, true);
            
            // Check if any children with the specified attribute were found
            if ($childrenById->count() > 0)
            {
                echo "Found " . $childrenById->count() . " child elements with attribute '" . $targetAttrName . "' = '" . $targetAttrValue . "' (exact match):\n";
                
                // Process each found child
                for ($j = 0; $j < $childrenById->count(); $j++)
                {
                    $child = $childrenById->get($j);
                    
                    if ($child && $child->is_exist())
                    {
                        echo "\nChild #" . ($j + 1) . " with attribute '" . $targetAttrName . "' = '" . $targetAttrValue . "':\n";
                        echo "Child exists\n";
                    }
                }
            }
            else
            {
                echo "No child elements with attribute '" . $targetAttrName . "' = '" . $targetAttrValue . "' (exact match) found\n";
            }
            
            // Try to find all child elements with a partial class attribute match search and include to search sub childs
            $partialAttrName = "class";
            $partialAttrValue = "example";
            $childrenByPartialAttr = $currentDiv->get_all_child_by_attribute($partialAttrName, $partialAttrValue, false, true);
            
            // Check if any children with the partial attribute were found
            if ($childrenByPartialAttr->count() > 0)
            {
                echo "\nFound " . $childrenByPartialAttr->count() . " child elements with partial attribute '" . $partialAttrName . "' = '" . $partialAttrValue . "':\n";
                
                // Process each found child
                for ($j = 0; $j < $childrenByPartialAttr->count(); $j++)
                {
                    $child = $childrenByPartialAttr->get($j);
                    
                    if ($child && $child->is_exist())
                    {
                        echo "\nChild #" . ($j + 1) . " with partial attribute '" . $partialAttrName . "' = '" . $partialAttrValue . "':\n";
                        echo "Child exists\n";
                    }
                }
            }
            else
            {
                echo "\nNo child elements with partial attribute '" . $partialAttrName . "' = '" . $partialAttrValue . "' found\n";
            }

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