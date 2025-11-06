<?php

// Scenario: For current page, find a listbox element and get index of selected option
// Description: For current page, find a listbox element and get index of selected option
// Classes used: XHESelectElement, XHEInterface, XHEBrowser, XHEApplication

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

// Navigate to polygon page if page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Example 1: Get index of selected option

// Get listbox element by number 2
$targetListbox = DOM::$listbox->get_by_number(2);

// Check that DOM element was found
if ($targetListbox->inner_number != -1)
{
    // Get index of selected option
    echo($targetListbox->get_selected_index() . "\n");
}

// Stop application
WINDOW::$app->quit();
?>