<?php

// Scenario: Get a child element by its number from an element
// Description: This example demonstrates how to get an element and retrieve its child elements by index
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
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example: Get a div element and retrieve its child elements by index

// Get a div element on the page
$div = DOM::$div->get_by_number(0);

// Check that we have found the div
if ($div && $div->is_exist())
{
    echo "Found div element\n";
    echo "Div inner HTML: " . $div->get_inner_html() . "\n";
    
    // Get the count of child elements
    $childCount = $div->get_child_count();
    echo "Number of child elements: " . $childCount . "\n";
    
    // If there are child elements, get the first one
    if ($childCount > 0)
    {
        // Get the first child element (index 0)
        $firstChild = $div->get_child_by_number(0);
        
        if ($firstChild && $firstChild->is_exist())
        {
            echo "First child (index 0):\n";
            echo "  Tag: " . $firstChild->get_tag() . "\n";
            echo "  Inner text: " . $firstChild->get_inner_text() . "\n";
        }
        else
        {
            echo "Failed to get the first child element\n";
        }
        
        // If there are at least 2 child elements, get the second one
        if ($childCount > 1)
        {
            // Get the second child element (index 1)
            $secondChild = $div->get_child_by_number(1);
            
            if ($secondChild && $secondChild->is_exist())
            {
                echo "Second child (index 1):\n";
                echo "  Tag: " . $secondChild->get_tag() . "\n";
                echo "  Inner text: " . $secondChild->get_inner_text() . "\n";
            }
            else
            {
                echo "Failed to get the second child element\n";
            }
        }
    }
    else
    {
        echo "No child elements found\n";
    }
}
else
{
    echo "No div element found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>