<?php

// Scenario: Get the length of an element collection
// Description: This example demonstrates how to get a collection of elements and determine the number of elements in the collection
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
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Example: Get all listbox elements and determine the number of list-boxes

// Get all listbox elements on the page
$listBoxes = DOM::$listbox->get_all();

// Get the length of the list-boxes collection
$anchorsCount = $listBoxes->count();

// Process each listbox if there are any
if ($anchorsCount > 0)
{
    echo "Found " . $anchorsCount . " listbox elements on the page\n";
    // Get length for all listbox elements
    $ids = $listBoxes->get_length();

    // Display IDs
    echo "Lengths for all list-boxes:\n";
    foreach ($ids as $index => $id) {
        echo "Listbox " . ($index + 1) . ": " . $id . "\n";
    }
}
else
{
    echo "No listbox elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>