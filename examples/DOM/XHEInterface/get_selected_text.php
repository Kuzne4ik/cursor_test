<?php

// Scenario: For current page, find a listbox element and get text of selected option
// Description: For current page, find a listbox element and get text of selected option
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

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Example 1: Get text of selected option

// Get listbox element by number 2
$targetListbox = DOM::$listbox->get_by_number(2);

// Check that the DOM element is received
if ($targetListbox->inner_number != -1)
{
    // Get text of selected option
    echo($targetListbox->get_selected_text() . "\n");
}

// Stop the application
WINDOW::$app->quit();
?>