<?php

// Scenario: Run selected command on a DOM element
// Description: For current page, find a DOM element and run selected command on it
// Classes used: XHEInput, XHEInterface, XHEApplication

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

// Example 1: Run selected command on an input element

// Get DOM element <input> by number 0
$targetInput = DOM::$input->get_by_number(0);

// Check that DOM element was found
if ($targetInput->inner_number != -1) {
    // Send input "L" to the element
    echo $targetInput->send_input("L");
}

// Stop the application
WINDOW::$app->quit();
?>