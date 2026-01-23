<?php

// Scenario: Get the shadow root of elements in a collection
// Description: This example demonstrates how to get a collection of elements and retrieve their shadow roots
// Classes used: XHEInterfaces, XHECustom, XHEBrowser, XHEApplication

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

// Navigate to a page with shadow DOM elements if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example: Get all div elements and retrieve their shadow roots

// Get all div elements on the page (elements that might have shadow DOM)
$divElements = DOM::$div->get_all();

// Check that we have found at least one div element
if ($divElements->count() > 0)
{
    echo "Found " . $divElements->count() . " div elements\n";
    
    // Get shadow roots for all div elements at once
    $shadowRoots = $divElements->get_shadow_root();
    
    // Display results
    echo "\nGetting shadow roots for all div elements\n";
    
    // Process each div element and its shadow root
    $tags = $divElements->get_tag();
    $inner_htmls = $divElements->get_inner_html();
    
    for ($i = 0; $i < $divElements->count(); $i++)
    {
        echo "\nProcessing div element #" . ($i + 1) . "\n";
        //echo "Element tag: " . $tags[$i] . "\n";
        //echo "Element inner HTML: " . $inner_htmls[$i] . "\n";
        
        // Check if the shadow root exists
        $currentShadowRoot = $shadowRoots[$i];
        if ($currentShadowRoot->is_exist())
        {
            echo "Shadow root found for element #" . ($i + 1) . "\n";
            
            // Get the inner HTML of the shadow root
            echo "Shadow root inner HTML: " . $currentShadowRoot->get_inner_html() . "\n";
            
            // Get the count of child elements in the shadow root
            $shadowChildCount = $currentShadowRoot->get_child_count();
            echo "Number of child elements in shadow root: " . $shadowChildCount . "\n";
        }
        else
        {
            echo "No shadow root found for element #" . ($i + 1) . "\n";
        }
    }
}
else
{
    echo "No custom elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>