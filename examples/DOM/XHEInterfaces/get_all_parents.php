<?php

// Scenario: Get all parent elements of elements in a collection
// Description: This example demonstrates how to get a collection of elements and then get all parent elements for each element in the collection
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

// Example: Get all anchor elements and then get all parent elements for each anchor

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get all parents for all anchor elements
    $allParents = $anchors->get_all_parents();
    
    // Display parents
    echo "All parents for all anchors:\n";
    foreach ($allParents as $index => $parents) {
        echo "Anchor " . ($index + 1) . " parents:\n";
        if ($parents) {
            foreach ($parents as $parentIndex => $parent) {
                echo "    Parent " . ($parentIndex + 1) . ": \n";
                echo "    Tag: " . $parent->get_tag() . "\n";
                echo "    ID: " . $parent->get_id() . "\n";
                echo "    Class: " . $parent->get_attribute("class") . "\n";
                //echo "    Inner text: " . $parent->get_inner_text() . "\n";
            }
        } else {
            echo "  No parents found\n";
        }
        echo "\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>