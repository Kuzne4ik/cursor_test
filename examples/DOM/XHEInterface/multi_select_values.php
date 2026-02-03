<?php

// Scenario: Multiple select options in a listbox by values
// Description: For current page, find a listbox element and select multiple options by their values
// Classes used: XHEListbox, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Multiple select options in a listbox by values

// Navigate to polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Get DOM element <select> by number 1
$targetListbox = DOM::$listbox->get_by_number(1);

// Check that DOM element was found
if ($targetListbox->inner_number != -1) {
    // Select multiple options by values ("ru,us")
    echo $targetListbox->multi_select_values("ru,us");
}

// Stop the application
WINDOW::$app->quit();
?>