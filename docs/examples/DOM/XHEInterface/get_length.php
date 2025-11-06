<?php

// Scenario: For</arg_value> current page, get a DOM element <select> and get the number of options for selection
// Description: For</arg_value> current page, get a DOM element <select> by 'id' and get the number of options for selection
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
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: For</arg_value> current page, get a DOM element <select> by 'id' and get the number of options for selection

// For</arg_value> current page, get a DOM element <select> by 'id', not an exact match of attribute value
$targetListbox = DOM::$listbox->get_by_attribute('id', 'id1', false);

// Check that DOM element is received
if ($targetListbox->inner_number == -1) {
    // For DOM element, get its height
    $targetListbox->get_length();
}

// Stop application
WINDOW::$app->quit();
?>
