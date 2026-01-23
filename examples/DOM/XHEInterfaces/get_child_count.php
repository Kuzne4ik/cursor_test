<?php

// Scenario: Get the count of child elements for elements in a collection
// Description: This example demonstrates how to get a collection of elements and count their child elements
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

// Example: Get all div elements and count their child elements

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";

    // Get child count (for each div element in divs)
    $childCounts = $divs->get_child_count(false);

    $resultCount = count($divs);
    echo "\nFor Iterate for each div element child count\n";

   for ($i = 0; $i < $resultCount; $i++) {
       echo "\nFor div element number " . ($i + 1) . " child count: " . $childCounts[$i] . "\n";
    }

    // Get child count (for each div element in divs) and include count sub childs
    $childCounts2 = $divs->get_child_count(true);

    $resultCount = count($divs);
    echo "\nFor Iterate for each div element child count include count sub childs\n";

    for ($i = 0; $i < $resultCount; $i++) {
        echo "\nFor div element number " . ($i + 1) . " child count: " . $childCounts2[$i] . "\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>