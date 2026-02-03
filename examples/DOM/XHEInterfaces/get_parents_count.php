<?php

// Scenario: Get the count of parent elements for elements in a collection
// Description: This example demonstrates how to get a collection of elements and then count the parent elements for each element in the collection
// Classes used: XHEInterfaces, XHEAnchor, XHEBrowser, XHEApplication

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

// Example: Get all anchor elements and then count the parent elements for each anchor

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count()> 0)
{
    echo "Found " . $anchors->count(). " anchor elements\n";

    // Get $parent count for all anchor elements
    $parentCounts = $anchors->get_parents_count();

    // Display parent counts
    echo "Parent counts for anchors:\n";
    foreach ($parentCounts as $index => $cnt) {
        echo "Anchor " . ($index + 1) . ": " . $cnt . "\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>