<?php

// Scenario: Get all child elements by inner HTML from a collection
// Description: This example demonstrates how to get a collection of elements and then find all child elements with specific inner HTML
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

// Example: Get all div elements and then find all child elements with specific inner HTML

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
$divsLength = $divs->count();
if ($divsLength > 0)
{
    echo "Found " . $divsLength . " div elements\n";
    
    // Try to find all child elements with a specific inner HTML (exact match)
    $targetHtml = "<span>Example</span>";
    $childrenByExactHtml = $divs->get_all_child_by_inner_html($targetHtml, true);
    
    // Check if any children with the exact inner HTML were found
    $exactCount = count($childrenByExactHtml);
    if ($exactCount > 0)
    {
        echo "Found " . $exactCount . " child elements with inner HTML '" . $targetHtml . "' (exact match)\n";
    }
    else
    {
        echo "No child elements with inner HTML '" . $targetHtml . "' (exact match) found\n";
    }
    
    // Try to find all child elements with a partial inner HTML match and include to search sub childs
    $partialHtml = "<span";
    $childrenByPartialHtml = $divs->get_all_child_by_inner_html($partialHtml, false, true);
    
    // Check if any children with the partial inner HTML were found
    $partialCount = count($childrenByPartialHtml);
    if ($partialCount > 0)
    {
        echo "Found " . $partialCount . " child elements with partial inner HTML '" . $partialHtml . "'\n";
    }
    else
    {
        echo "No child elements with partial inner HTML '" . $partialHtml . "' found\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>