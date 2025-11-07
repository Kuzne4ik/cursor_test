<?php

// Scenario: Get all child elements by outer text from a collection
// Description: This example demonstrates how to get a collection of elements and then find all child elements with specific outer text
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

// Example: Get all div elements and then find all child elements with specific outer text

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
$divsLength = $divs->count();
if ($divsLength > 0)
{
    echo "Found " . $divsLength . " div elements\n";
    
    // Try to find all child elements with a specific outer text (exact match)
    $targetText = "Example";
    $childrenByExactText = $divs->get_all_child_by_outer_text($targetText, true);
    
    // Check if any children with the exact outer text were found
    $exactCount = count($childrenByExactText);
    if ($exactCount > 0)
    {
        echo "Found " . $exactCount . " child elements with outer text '" . $targetText . "' (exact match)\n";
    }
    else
    {
        echo "No child elements with outer text '" . $targetText . "' (exact match) found\n";
    }
    
    // Try to find all child elements with a partial outer text match and include to search sub childs
    $partialText = "Exam";
    $childrenByPartialText = $divs->get_all_child_by_outer_text($partialText, false, true);
    
    // Check if any children with the partial outer text were found
    $partialCount = count($childrenByPartialText);
    if ($partialCount > 0)
    {
        echo "Found " . $partialCount . " child elements with partial outer text '" . $partialText . "'\n";
    }
    else
    {
        echo "No child elements with partial outer text '" . $partialText . "' found\n";
    }
    
    // Try to find all child elements with a non-existent outer text
    $nonExistentText = "NonExistent";
    $childrenByNonExistentText = $divs->get_all_child_by_outer_text($nonExistentText, true);
    
    // Check if any children with the non-existent outer text were found
    $nonExistentCount = count($childrenByNonExistentText);
    if ($nonExistentCount > 0)
    {
        echo "Unexpectedly found " . $nonExistentCount . " child elements with outer text '" . $nonExistentText . "'\n";
    }
    else
    {
        echo "As expected, no child elements with outer text '" . $nonExistentText . "' found\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>