<?php

// Scenario: Get all elements by attribute from a collection
// Description: This example demonstrates how to get a collection of elements and then find all elements with a specific attribute within that collection
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

// Example: Get all div elements and then find all divs with a specific attribute within that collection

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0) {
    echo "Found " . $divs->count() . " div elements\n";

    // Try to find all divs with a specific ID attribute (exact match)
    $targetAttrName = "id";
    $targetAttrValue = "example";
    $divsByAttr = $divs->get_all_by_attribute($targetAttrName, $targetAttrValue, true);

    // Check if any divs with the specified attribute were found
    if ($divsByAttr->count() > 0) {
        echo "\nFound " . $divsByAttr->count() . " div elements with attribute '" . $targetAttrName . "' = '" . $targetAttrValue . "' (exact match):\n";

        // Process each found div
        for ($i = 0; $i < $divsByAttr->count(); $i++) {
            $currentDiv = $divsByAttr->get($i);

            if ($currentDiv->is_exist()) {
                echo "\nDiv #" . ($i + 1) . " with attribute '" . $targetAttrName . "' = '" . $targetAttrValue . "':\n";
                echo "Div inner text: " . $currentDiv->get_inner_text() . "\n";
                echo "Div inner number: " . $currentDiv->inner_number . "\n";

                // Get the class attribute of the found div
                $divClass = $currentDiv->get_attribute("class");
                echo "Div class: " . $divClass . "\n";
            }
        }
    } else {
        echo "\nNo div elements with attribute '" . $targetAttrName . "' = '" . $targetAttrValue . "' (exact match) found in the collection\n";
    }

    // Try to find all divs with a partial class attribute match
    $partialAttrName = "class";
    $partialAttrValue = "example";
    $divsByPartialAttr = $divs->get_all_by_attribute($partialAttrName, $partialAttrValue, false);

    // Check if any divs with the partial attribute were found
    if ($divsByPartialAttr->count() > 0) {
        echo "\nFound " . $divsByPartialAttr->count() . " div elements with partial attribute '" . $partialAttrName . "' = '" . $partialAttrValue . "':\n";

        // Process each found div
        for ($i = 0; $i < $divsByPartialAttr->count(); $i++) {
            $currentDiv = $divsByPartialAttr->get($i);

            if ($currentDiv->is_exist()) {
                echo "\nDiv #" . ($i + 1) . " with partial attribute '" . $partialAttrName . "' = '" . $partialAttrValue . "':\n";
                echo "Div inner text: " . $currentDiv->get_inner_text() . "\n";
                echo "Div inner number: " . $currentDiv->inner_number . "\n";
                echo "Full class attribute: " . $currentDiv->get_attribute("class") . "\n";
            }
        }
    } else {
        echo "\nNo div elements with partial attribute '" . $partialAttrName . "' = '" . $partialAttrValue . "' found in the collection\n";
    }

    // Try to find all divs with another attribute
    $targetAttrName2 = "data-type";
    $targetAttrValue2 = "test";
    $divsByAttr2 = $divs->get_all_by_attribute($targetAttrName2, $targetAttrValue2, true);

    // Check if any divs with the specified attribute were found
    if ($divsByAttr2->count() > 0) {
        echo "\nFound " . $divsByAttr2->count() . " div elements with attribute '" . $targetAttrName2 . "' = '" . $targetAttrValue2 . "':\n";

        // Process each found div
        for ($i = 0; $i < $divsByAttr2->count(); $i++) {
            $currentDiv = $divsByAttr2->get($i);

            if ($currentDiv->is_exist()) {
                echo "\nDiv #" . ($i + 1) . " with attribute '" . $targetAttrName2 . "' = '" . $targetAttrValue2 . "':\n";
                echo "Div inner text: " . $currentDiv->get_inner_text() . "\n";
                echo "Div inner number: " . $currentDiv->inner_number . "\n";
            }
        }
    } else {
        echo "\nNo div elements with attribute '" . $targetAttrName2 . "' = '" . $targetAttrValue2 . "' found in the collection\n";
    }
}
else
{
    echo "No div elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>