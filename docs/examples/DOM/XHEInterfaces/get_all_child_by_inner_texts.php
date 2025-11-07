
<?php
// Scenario: Demonstrate how to get all child elements by inner texts from each element in a collection using XHEInterfaces

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "divs.html");

// Example: Get all div elements and then find all child elements with specific inner text for each div

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";
    
    // Process each div to find all child elements with specific inner text
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
            
            // Try to find all child elements with a specific inner text (exact match)
            $targetText = "Example";
            $childrenByExactText = $currentDiv->get_all_child_by_inner_text($targetText, true);
            
            // Check if any children with the exact inner text were found
            if ($childrenByExactText->count() > 0)
            {
                echo "Found " . $childrenByExactText->count() . " child elements with inner text '" . $targetText . "' (exact match):\n";
                
                // Process each found child
                for ($j = 0; $j < $childrenByExactText->count(); $j++)
                {
                    $child = $childrenByExactText->get($j);
                    
                    if ($child->is_exist())
                    {
                        echo "\nChild #" . ($j + 1) . " with inner text '" . $targetText . "':\n";
                        echo "Child exists\n";
                        
                        // Get the inner text of the child
                        $childInnerText = $child->get_inner_text();
                        echo "Child inner text: " . $childInnerText . "\n";
                        
                    }
                }
            }
            else
            {
                echo "No child elements with inner text '" . $targetText . "' (exact match) found\n";
            }
            
            // Try to find all child elements with a partial inner text match
            $partialText = "Exam";
            $childrenByPartialText = $currentDiv->get_all_child_by_inner_text($partialText, false);
            
            // Check if any children with the partial inner text were found
            if ($childrenByPartialText->count() > 0)
            {
                echo "\nFound " . $childrenByPartialText->count() . " child elements with partial inner text '" . $partialText . "':\n";
                
                // Process each found child
                for ($j = 0; $j < $childrenByPartialText->count(); $j++)
                {
                    $child = $childrenByPartialText->get($j);
                    
                    if ($child && $child->is_exist())
                    {
                        echo "\nChild #" . ($j + 1) . " with partial inner text '" . $partialText . "':\n";
                        echo "Child exists\n";
                        
                        // Get the inner text of the child
                        $childInnerText = $child->get_inner_text();
                        echo "Child inner text: " . $childInnerText . "\n";
                        
                    }
                }
            }
            else
            {
                echo "\nNo child elements with partial inner text '" . $partialText . "' found\n";
            }
            
            // Try to find all child elements with another inner text and include to search sub childs
            $targetText2 = "Test";
            $childrenByText2 = $currentDiv->get_all_child_by_inner_text($targetText2, true, true);
            
            // Check if any children with the second inner text were found
            if ($childrenByText2->count() > 0)
            {
                echo "\nFound " . $childrenByText2->count() . " child elements with inner text '" . $targetText2 . "':\n";
                
                // Process each found child
                for ($j = 0; $j < $childrenByText2->count(); $j++)
                {
                    $child = $childrenByText2->get($j);
                    
                    if ($child && $child->is_exist())
                    {
                        echo "\nChild #" . ($j + 1) . " with inner text '" . $targetText2 . "':\n";
                        echo "Child exists\n";
                        
                        // Get the inner text of the child
                        $childInnerText = $child->get_inner_text();
                        echo "Child inner text: " . $childInnerText . "\n";
                    }
                }
            }
            else
            {
                echo "\nNo child elements with inner text '" . $targetText2 . "' found\n";
            }
            
            // Try to find all child elements with a non-existent inner text
            $nonExistentText = "NonExistent";
            $childrenByNonExistentText = $currentDiv->get_all_child_by_inner_text($nonExistentText, true);
            
            // Check if any children with the non-existent inner text were found
            if ($childrenByNonExistentText->count() > 0)
            {
                echo "\nUnexpectedly found " . $childrenByNonExistentText->count() . " child elements with inner text '" . $nonExistentText . "'\n";
            }
            else
            {
                echo "\nAs expected, no child elements with inner text '" . $nonExistentText . "' found\n";
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