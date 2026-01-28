<?php

// Scenario: Get text of selected options in a collection of listbox elements
// Description: This example demonstrates how to get a collection of listbox elements and retrieve text of selected option in each listbox
// Classes used: XHEInterfaces, XHEListbox, XHEBrowser, XHEApplication

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

// Example: Get all listbox elements and retrieve text of selected options

// Get all listbox elements on the page
$listboxes = DOM::$listbox->get_all();

// Check that we have found at least one listbox
if ($listboxes->count()> 0)
{
    echo "Found " . $listboxes->count(). " listbox elements\n";
    
    // First, select an option in each listbox
    $listboxes->select_index(1);
    
    // Get text of selected options in all listboxes
    $results = $listboxes->get_selected_text();
    
    // Display selected text for each listbox
    foreach ($results as $k => $selectedText) {
        echo "Listbox " . ($k + 1) . " selected text: " . $selectedText . "\n";
    }
}
else
{
    echo "No listbox elements found on the page\n";
}

// Stop the application
WINDOW::$app->quit();
?>