<?php

// Scenario: Select value in a listbox element
// Description: For current page, find a listbox element and select an option by its value attribute
// Classes used: XHEListbox, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Select value in a listbox element

// Navigate to test site
echo WEB::$browser->navigate(TEST_POLYGON_URL . "listbox.html");

// Get DOM element <select> by number 1
$targetListbox = DOM::$listbox->get_by_number(1);

// Check that DOM element was found
if ($targetListbox->inner_number != -1) {
    // Select option by value "ru"
    echo $targetListbox->select_value("ru");
}

// Stop the application
WINDOW::$app->quit();
?>