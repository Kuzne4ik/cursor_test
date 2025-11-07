<?php

// Scenario: Get the next sibling element from a collection
// Description: This example demonstrates how to get a collection of elements and retrieve the next sibling element for each
// Classes used: XHEInterfaces, XHEAnchor, XHEBrowser, XHEApplication

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

// Example: Get all anchor elements and retrieve their next sibling elements

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get next sibling elements for all anchors
    $nextElements = $anchors->get_next();
    
    // Display next sibling elements
    echo "Next sibling elements for all anchors:\n";
    foreach ($nextElements as $index => $nextElement) {
        echo "Anchor " . ($index + 1) . ": ";
        
        if ($nextElement && $nextElement->is_exist()) {
            echo "Next element tag: " . $nextElement->get_tag() . "\n";
            echo "  Next element inner text: " . $nextElement->get_inner_text() . "\n";
        } else {
            echo "No next sibling element found\n";
        }
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>