<?php

// Scenario: Get all attributes values for a collection of elements
// Description: This example demonstrates how to get a collection of elements and retrieve all attribute values for each element
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

// Example: Get all anchor elements and retrieve all attribute values for each anchor

// Get all anchor elements on the page
$anchors = DOM::$anchor->get_all();

// Check that we have found at least one anchor
if ($anchors->count() > 0)
{
    echo "Found " . $anchors->count() . " anchor elements\n";
    
    // Get all attribute values for all anchor elements
    $allAttributeValues = $anchors->get_all_attributes_values();
    
    // Display attribute values
    echo "All attribute values for all anchors:\n";
    foreach ($allAttributeValues as $index => $attributeValuesStr) {
        echo "Anchor " . ($index + 1) . " attribute values:\n";
        $attributeValues = explode('<br>', $attributeValuesStr);
        if (is_array($attributeValues)) {
            foreach ($attributeValues as $value) {
                echo "  '" . $value . "'\n";
            }
        } else {
            echo "  No attribute values found\n";
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