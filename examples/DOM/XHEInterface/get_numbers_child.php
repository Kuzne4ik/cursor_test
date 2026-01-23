<?php

// Scenario: For current page, find a DOM element and get numbers of its child elements
// Description: For current page, find a DOM element and get numbers of its child elements
// Classes used: XHEForm, XHEInterface, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "btn.html");

// Example 1: Get numbers of all elements in form with number 0

// Get form element by number 0
$targetForm = DOM::$form->get_by_number(0);

// Check that DOM element is received
if ($targetForm->inner_number != -1)
{
    // Get numbers of all child elements
    echo($targetForm->get_numbers_child("") . "\n");
}

// Example 2: Get numbers of all elements in form with number 0 (including sub-elements)

// Get form element by number 0
$targetForm = DOM::$form->get_by_number(0);

// Check that DOM element is received
if ($targetForm->inner_number != -1)
{
    // Get numbers of all child elements (including sub-elements)
    echo($targetForm->get_numbers_child("", true) . "\n");
}

// Example 3: Get numbers of all anchors in form with number 0 (including sub-elements)

// Get form element by number 0
$targetForm = DOM::$form->get_by_number(0);

// Check that DOM element is received
if ($targetForm->inner_number != -1)
{
    // Get numbers of all anchor child elements (including sub-elements)
    echo($targetForm->get_numbers_child("anchor", true) . "\n");
}

// Example 4: Get numbers of all buttons in form with number 0 (including sub-elements)

// Get form element by number 0
$targetForm = DOM::$form->get_by_number(0);

// Check that DOM element is received
if ($targetForm->inner_number != -1)
{
    // Get numbers of all button child elements (including sub-elements)
    echo($targetForm->get_numbers_child("btn", true) . "\n");
}

// Stop application
WINDOW::$app->quit();
?>