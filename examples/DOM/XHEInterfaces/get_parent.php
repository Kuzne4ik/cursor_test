<?php

// Scenario: Get parent elements of elements in a collection
// Description: This example demonstrates how to get a collection of elements and then get the parent element for each element in the collection
// Classes used: XHEInterfaces, XHEAnchor, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example: Get all anchor elements and then get the parent element for each anchor

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get parent elements for all anchors at once
    $parentElements = $anchors->get_parent();
    
    // Display results
    echo "\nGetting parent elements for all anchors\n";
    
    // Process each anchor and its parent
    $hrefs = $anchors->get_href();
    $inner_texts = $anchors->get_inner_text();
    
    for ($k = 0; $k < $anchors->count(); $k++)
    {
        echo "\nProcessing anchor #" . ($k + 1) . "\n";
        echo "Anchor href: " . $hrefs[$k] . "\n";
        echo "Anchor inner text: " . $inner_texts[$k] . "\n";
        
        // Check if parent element exists
        if ($parentElements[$k] && $parentElements[$k]->is_exist())
        {
            echo "Parent element found:\n";
            echo "  Parent tag: " . $parentElements[$k]->get_tag() . "\n";
            echo "  Parent ID: " . $parentElements[$k]->get_id() . "\n";
            echo "  Parent class: " . $parentElements[$k]->get_attribute("class") . "\n";
            echo "  Parent inner text: " . $parentElements[$k]->get_inner_text() . "\n";
            
            // Add a new attribute to the parent to mark it as processed
            $attrResult = $parentElements[$k]->set_attribute("data-parent-of-anchor", ($k + 1));
            
            if ($attrResult)
            {
                echo "  Successfully added data-parent-of-anchor attribute to parent\n";
            }
            else
            {
                echo "  Failed to add data-parent-of-anchor attribute to parent\n";
            }
        }
        else
        {
            echo "No parent element found for anchor #" . ($k + 1) . "\n";
        }
    }
    
    // Example: Get parent elements by attribute
    echo "\nExample: Get parent elements by attribute\n";
    
    // Get anchors with a specific attribute
    $targetAttribute = "class";
    $targetValue = "example";
    $anchorsByAttribute = $anchors->get_all_by_attribute($targetAttribute, $targetValue, true);
    
    // Check if we found any anchors with the specified attribute
    if ($anchorsByAttribute && $anchorsByAttribute->count() > 0)
    {
        echo "Found " . $anchorsByAttribute->count() . " anchor elements with attribute '" . $targetAttribute . "' = '" . $targetValue . "'\n";
        
        // Get parent elements for all attribute anchors at once
        $parentElementsByAttribute = $anchorsByAttribute->get_parent();
        
        // Display results
        echo "\nGetting parent elements for attribute anchors\n";
        
        // Process each attribute anchor and its parent
        $hrefsByAttribute = $anchorsByAttribute->get_href();
        
        for ($k = 0; $k < $anchorsByAttribute->count(); $k++)
        {
            echo "\nProcessing attribute anchor #" . ($k + 1) . "\n";
            echo "Anchor href: " . $hrefsByAttribute[$k] . "\n";
            
            // Check if parent element exists
            if ($parentElementsByAttribute[$k] && $parentElementsByAttribute[$k]->is_exist())
            {
                echo "Parent element found:\n";
                echo "  Parent tag: " . $parentElementsByAttribute[$k]->get_tag() . "\n";
                echo "  Parent ID: " . $parentElementsByAttribute[$k]->get_id() . "\n";
                
                // Add a new attribute to the parent
                $attrResult = $parentElementsByAttribute[$k]->set_attribute("data-parent-of-attr-anchor", ($k + 1));
                
                if ($attrResult)
                {
                    echo "  Successfully added data-parent-of-attr-anchor attribute to parent\n";
                }
                else
                {
                    echo "  Failed to add data-parent-of-attr-anchor attribute to parent\n";
                }
            }
            else
            {
                echo "No parent element found for attribute anchor #" . ($k + 1) . "\n";
            }
        }
    }
    else
    {
        echo "No anchor elements with attribute '" . $targetAttribute . "' = '" . $targetValue . "' found\n";
    }
    
    // Example: Get parent elements with a specific level
    echo "\nExample: Get parent elements with a specific level\n";
    
    // Get the first anchor
    $firstAnchor = $anchors->get(0);
    
    // Check that the element exists
    if ($firstAnchor && $firstAnchor->is_exist())
    {
        echo "Processing first anchor for parent levels\n";
        echo "First anchor href: " . $firstAnchor->get_href() . "\n";
        
        // Get parent elements at different levels
        for ($level = 1; $level <= 3; $level++)
        {
            // Get the parent element at the specified level
            $parentElement = $firstAnchor->get_parent($level);
            
            // Check if the parent element exists
            if ($parentElement && $parentElement->is_exist())
            {
                echo "Parent element at level " . $level . " found:\n";
                echo "  Parent tag: " . $parentElement->get_tag() . "\n";
                echo "  Parent ID: " . $parentElement->get_id() . "\n";
                echo "  Parent class: " . $parentElement->get_attribute("class") . "\n";
                
                // Add a new attribute to the parent to mark its level
                $attrResult = $parentElement->set_attribute("data-parent-level-" . $level, "first-anchor");
                
                if ($attrResult)
                {
                    echo "  Successfully added data-parent-level-" . $level . " attribute to parent\n";
                }
                else
                {
                    echo "  Failed to add data-parent-level-" . $level . " attribute to parent\n";
                }
            }
            else
            {
                echo "No parent element found at level " . $level . "\n";
            }
        }
    }
    else
    {
        echo "No first anchor element found\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>