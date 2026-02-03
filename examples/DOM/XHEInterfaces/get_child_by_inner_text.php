<?php

// Scenario: Get a child element by its inner text from elements in a collection
// Description: This example demonstrates how to get a collection of elements and retrieve their child elements by inner text
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

// Example: Get all div elements and retrieve their child elements by inner text

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";

    // Try to find a child element with specific inner text (exact match) and include sub childs to search (for each div element in divs)
    $searchText = "Example";
    $childByExactTexts = $divs->get_child_by_inner_text($searchText, true);

    if (count($childByExactTexts) > 0) {
        $childByExactTextsCount = count($childByExactTexts);
        echo "For Iterate for each div element in results\n";

        for ($k = 0; $k < $childByExactTextsCount; $k++) {
            $childByExactText = $childByExactTexts[$k];
			echo "\nFor div element number " . ($k + 1) ." in results: \n";
            if ($childByExactText->is_exist()) {
                echo "Found child with exact inner text '" . $searchText . "':\n";
                echo "  Tag: " . $childByExactText->get_tag() . "\n";
                echo "  Inner text: " . $childByExactText->get_inner_text() . "\n";
            } else {
                echo "No child found with exact inner text '" . $searchText . "'\n";
            }
        }
    }
    
    // Try to find a child element containing specific text (partial match) and include sub childs to search (for each div element in divs)
    $partialSearchText = "amp";
    $childByPartialTexts = $divs->get_child_by_inner_text($partialSearchText, false);

    if (count($childByPartialTexts) > 0) {
        $childByPartialTextsCount = count($childByPartialTexts);
        echo "\nFor Iterate for each div element in results\n";

        for ($k = 0; $k < $childByPartialTextsCount; $k++) {
            $childByPartialText = $childByPartialTexts[$k];
			echo "\nFor div element number " . ($k + 1) ." in results: \n";
            if ($childByPartialText->is_exist()) {
                echo "Found child containing text '" . $partialSearchText . "':\n";
                echo "  Tag: " . $childByPartialText->get_tag() . "\n";
                echo "  Inner text: " . $childByPartialText->get_inner_text() . "\n";
            } else {
                echo "No child found containing text '" . $partialSearchText . "'\n";
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