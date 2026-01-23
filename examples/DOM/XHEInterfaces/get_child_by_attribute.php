<?php

// Scenario: Get a child element by its attribute from elements in a collection
// Description: This example demonstrates how to get a collection of elements and retrieve their child elements by attribute
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

// Example: Get all div elements and retrieve their child elements by attribute

// Get all div elements on the page
$divs = DOM::$div->get_all();

// Check that we have found at least one div
if ($divs->count() > 0)
{
    echo "Found " . $divs->count() . " div elements\n";

    // Try to find a child element with a specific id attribute (exact match) and include sub childs to search (for each div element in divs)
    $atr_name = "class";
    $atr_value = "inner";
    $childByIds = $divs->get_child_by_attribute($atr_name, $atr_value, false, false);

    if (count($childByIds) > 0) {
        $childByIdsCount = count($childByIds);
        echo "For Iterate for each div element in results\n";

        for ($i = 0; $i < $childByIdsCount; $i++) {
            $childById = $childByIds[$i];
			echo "\nFor div element number " . ($i + 1) ." in results: \n";
            if ($childById->is_exist()) {
                echo "Found child with $atr_name='$atr_value':\n";
                echo "  Tag: " . $childById->get_tag() . "\n";
                echo "  ID: " . $childById->get_id() . "\n";
                echo "  Inner text: " . $childById->get_inner_text() . "\n";
            } else {
                echo "No child found with $atr_name='$atr_value'\n";
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