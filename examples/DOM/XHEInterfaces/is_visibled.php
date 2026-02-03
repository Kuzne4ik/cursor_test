<?php

// Scenario: Check if elements in a collection are visible
// Description: This example demonstrates how to get a collection of elements and check if each element is visible
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

// Example: Get all anchor elements and check if each element is visible

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Check if all anchor elements are visible
    $visibleStates = $anchors->is_visibled();
    
    // Display visibility states
    echo "Visibility states for all anchors:\n";
    foreach ($visibleStates as $index => $isVisible) {
        $state = $isVisible ? "visible" : "not visible";
        echo "Anchor " . ($index + 1) . ": " . $state . "\n";
    }
}
else
{
    echo "No anchor elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>