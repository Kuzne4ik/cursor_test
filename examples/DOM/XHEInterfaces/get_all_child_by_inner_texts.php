
<?php

// Scenario: Get all child elements by inner text from a collection
// Description: This example demonstrates how to get a collection of elements and then find all child elements with specific inner text
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

// Example: Get all div elements and then find all child elements with specific inner text

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
$divsLength = $divs->count();
if ($divsLength > 0)
{
    echo "Found " . $divsLength . " div elements\n";
    
    // Try to find all child elements with a specific inner text (exact match)
    $targetText = "Example";
    $childrenByExactText = $divs->get_all_child_by_inner_text($targetText, true);
    
    // Check if any children with the exact inner text were found
    $exactCount = count($childrenByExactText);
    if ($exactCount > 0)
    {
        echo "Found " . $exactCount . " child elements with inner text '" . $targetText . "' (exact match)\n";
    }
    else
    {
        echo "No child elements with inner text '" . $targetText . "' (exact match) found\n";
    }
    
    // Try to find all child elements with a partial inner text match
    $partialText = "Exam";
    $childrenByPartialText = $divs->get_all_child_by_inner_text($partialText, false);
    
    // Check if any children with the partial inner text were found
    $partialCount = count($childrenByPartialText);
    if ($partialCount > 0)
    {
        echo "Found " . $partialCount . " child elements with partial inner text '" . $partialText . "'\n";
    }
    else
    {
        echo "No child elements with partial inner text '" . $partialText . "' found\n";
    }
    
    // Try to find all child elements with another inner text and include to search sub childs
    $targetText2 = "Test";
    $childrenByText2 = $divs->get_all_child_by_inner_text($targetText2, true, true);
    
    // Check if any children with the second inner text were found
    $text2Count = count($childrenByText2);
    if ($text2Count > 0)
    {
        echo "Found " . $text2Count . " child elements with inner text '" . $targetText2 . "'\n";
    }
    else
    {
        echo "No child elements with inner text '" . $targetText2 . "' found\n";
    }
    
    // Try to find all child elements with a non-existent inner text
    $nonExistentText = "NonExistent";
    $childrenByNonExistentText = $divs->get_all_child_by_inner_text($nonExistentText, true);
    
    // Check if any children with the non-existent inner text were found
    $nonExistentCount = count($childrenByNonExistentText);
    if ($nonExistentCount > 0)
    {
        echo "Unexpectedly found " . $nonExistentCount . " child elements with inner text '" . $nonExistentText . "'\n";
    }
    else
    {
        echo "As expected, no child elements with inner text '" . $nonExistentText . "' found\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>