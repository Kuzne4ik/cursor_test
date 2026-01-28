<?php

// Scenario: Get a child element by its inner HTML from elements in a collection
// Description: This example demonstrates how to get a collection of elements and retrieve their child elements by inner HTML
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
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example: Get all div elements and retrieve their child elements by inner HTML

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";

    // Try to find a child element with specific inner HTML (exact match)
    $searchHtml = "<span>"; // This should be adjusted based on the actual content
    $childByExactHtmls = $divs->get_child_by_inner_html($searchHtml, true);

    if (count($childByExactHtmls) > 0) {
        $childByExactHtmlsCount = count($childByExactHtmls);
        echo "For Iterate for each div element in results\n";

        for ($k = 0; $k < $childByExactHtmlsCount; $k++) {
            $childByExactHtml = $childByExactHtmls[$k];
            echo "\nFor div element number " . ($k + 1) ." in results: \n";
            if ($childByExactHtml->is_exist()) {
                echo "Found child with exact inner HTML '" . $searchHtml . "':\n";
                echo "  Tag: " . $childByExactHtml->get_tag() . "\n";
                echo "  Inner HTML: " . $childByExactHtml->get_inner_html() . "\n";
            } else {
                echo "No child found with exact inner HTML '" . $searchHtml . "'\n";
            }
        }
    }
    
    // Try to find a child element containing specific HTML (partial match)
    $partialSearchHtml = "span"; // This should be adjusted based on the actual content
    $childByPartialHtmls = $divs->get_child_by_inner_html($partialSearchHtml, false);

    if (count($childByPartialHtmls) > 0) {
        $childByPartialHtmlsCount = count($childByPartialHtmls);
        echo "For Iterate for each div element in results\n";

        for ($k = 0; $k < $childByPartialHtmlsCount; $k++) {
            $childByPartialHtml = $childByPartialHtmls[$k];
            echo "\nFor div element number " . ($k + 1) ." in results: \n";
            if ($childByPartialHtml->is_exist()) {
                echo "Found child containing HTML '" . $partialSearchHtml . "':\n";
                echo "  Tag: " . $childByPartialHtml->get_tag() . "\n";
                echo "  Inner HTML: " . $childByPartialHtml->get_inner_html() . "\n";
            } else {
                echo "No child found containing HTML '" . $partialSearchHtml . "'\n";
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