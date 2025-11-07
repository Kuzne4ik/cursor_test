<?php

// Scenario: Get parent elements by attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find parent elements with specific attributes for each element in the collection
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

// Example: Get all anchor elements and then find parent elements with specific attributes for each anchor

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get parent elements with ID attribute for all anchors
    $targetId = "container";
    $parentsById = $anchors->get_parent_by_attribute("id", $targetId, true);
    
    // Display parent elements with ID attribute
    echo "Parent elements with ID '" . $targetId . "' (exact match):\n";
    foreach ($parentsById as $index => $parent) {
        echo "Anchor " . ($index + 1) . ": ";
        if ($parent && $parent->is_exist()) {
            echo "Parent tag: " . $parent->get_tag() . "\n";
            echo "  Parent ID: " . $parent->get_id() . "\n";
            echo "  Parent class: " . $parent->get_attribute("class") . "\n";
        } else {
            echo "No parent element with ID '" . $targetId . "' found\n";
        }
    }
    
    // Get parent elements with partial class attribute for all anchors
    $partialClass = "wrap";
    $parentsByPartialClass = $anchors->get_parent_by_attribute("class", $partialClass, false);
    
    // Display parent elements with partial class attribute
    echo "\nParent elements with partial class '" . $partialClass . "':\n";
    foreach ($parentsByPartialClass as $index => $parent) {
        echo "Anchor " . ($index + 1) . ": ";
        if ($parent && $parent->is_exist()) {
            echo "Parent tag: " . $parent->get_tag() . "\n";
            echo "  Parent ID: " . $parent->get_id() . "\n";
            echo "  Parent class: " . $parent->get_attribute("class") . "\n";
        } else {
            echo "No parent element with partial class '" . $partialClass . "' found\n";
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