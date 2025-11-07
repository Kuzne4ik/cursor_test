<?php

// Scenario: Get all child elements by inner HTML from a collection
// Description: This example demonstrates how to get a collection of elements and then find all child elements with specific inner HTML for each element in collection
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

// Example: Get all div elements and then find all child elements with specific inner HTML for each div

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Process each div to find all child elements with specific inner HTML
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
            
            // Try to find all child elements with a specific inner HTML (exact match)
            $targetHtml = "<span>Example</span>";
            $childrenByExactHtml = $currentDiv->get_all_child_by_inner_html($targetHtml, true);
            
            // Check if any children with the exact inner HTML were found
            if ($childrenByExactHtml->count() > 0)
            {
                echo "Found " . $childrenByExactHtml->count() . " child elements with inner HTML '" . $targetHtml . "' (exact match):\n";
                
                // Process each found child
                for ($j = 0; $j < $childrenByExactHtml->count(); $j++)
                {
                    $child = $childrenByExactHtml->get($j);
                    
                    if ($child && $child->is_exist())
                    {
                        echo "\nChild #" . ($j + 1) . " with inner HTML '" . $targetHtml . "':\n";
                        echo "Child exists\n";
                        
                        // Get the inner HTML of the child
                        $childInnerHtml = $child->get_inner_html();
                        echo "Child inner HTML: " . $childInnerHtml . "\n";
                    }
                }
            }
            else
            {
                echo "No child elements with inner HTML '" . $targetHtml . "' (exact match) found\n";
            }
            
            // Try to find all child elements with a partial inner HTML match and include to search sub childs
            $partialHtml = "<span";
            $childrenByPartialHtml = $currentDiv->get_all_child_by_inner_html($partialHtml, false, true);
            
            // Check if any children with the partial inner HTML were found
            if ($childrenByPartialHtml->count() > 0)
            {
                echo "\nFound " . $childrenByPartialHtml->count() . " child elements with partial inner HTML '" . $partialHtml . "':\n";
                
                // Process each found child
                for ($j = 0; $j < $childrenByPartialHtml->count(); $j++)
                {
                    $child = $childrenByPartialHtml->get($j);
                    
                    if ($child && $child->is_exist())
                    {
                        echo "\nChild #" . ($j + 1) . " with partial inner HTML '" . $partialHtml . "':\n";
                        echo "Child exists\n";
                        
                        // Get the inner HTML of the child
                        $childInnerHtml = $child->get_inner_html();
                        echo "Child inner HTML: " . $childInnerHtml . "\n";
                    }
                }
            }
            else
            {
                echo "\nNo child elements with partial inner HTML '" . $partialHtml . "' found\n";
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