<?php

// Scenario: For current page, find an input element and get its type
// Description: For current page, find an input element and get its type
// Classes used: XHEInput, XHEInterface, XHEBrowser, XHEApplication

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
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example 1: Get type of input by its name

// Get input element by name
$targetInput = DOM::$input->get_by_name("Name");

// Check that DOM element was found
if ($targetInput->inner_number != -1)
{
    // Get type of input
    echo($targetInput->get_type() . "\n");
}

// Example 2: Get type of input in frame 0 and its dimensions by its name

// Get input element by name in frame 0
$targetInput = DOM::$input->get_by_name("Name", 0);

// Check that DOM element was found
if ($targetInput->inner_number != -1)
{
    // Get type and dimensions of input
    echo($targetInput->get_type() . " " . $targetInput->get_width() . " " . $targetInput->get_height() . "\n");
}

// Stop application
WINDOW::$app->quit();
?>