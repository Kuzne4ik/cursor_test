<?php

// Scenario: Select options in a collection of listbox elements by value
// Description: This example demonstrates how to get a collection of listbox elements and select options in each listbox by value
// Classes used: XHEInterfaces, XHEListbox, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Example: Get all listbox elements and select options by value

// Get all listbox elements on the page
$listboxes = DOM::$listbox->get_all();

// Check that we have found at least one listbox
if ($listboxes->count() > 0)
{
    echo "Found " . $listboxes->count() . " listbox elements\n";
    
    // Select option with value "1" in all listboxes
    $results = $listboxes->select_value("1", true);
    
    // Check if selection was successful in all listboxes
    $successCount = 0;
    foreach ($results as $result) {
        if ($result) {
            $successCount++;
        }
    }
    
    echo "Successfully selected option with value '1' in " . $successCount . " out of " . $listboxes->count() . " listboxes\n";
}
else
{
    echo "No listbox elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>