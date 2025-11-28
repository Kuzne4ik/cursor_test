<?php
// Scenario: Example of checking if an element is disabled by its number

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with form inputs
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example 1: Basic usage - check if an input is disabled by its number
$inputNumber = 0;

// Check if the first input (index 0) is disabled
$isDisabled = DOM::$input->is_disabled_by_number($inputNumber);

if ($isDisabled) {
    echo "input #$inputNumber is disabled\n\n";
} else {
    echo "input #$inputNumber is not disabled\n\n";
}

// Example 2: Check if another input is disabled by its number
$inputNumber = 4;

// Check if the fifth input (index 4) is disabled - this input has disabled attribute
$isDisabled = DOM::$input->is_disabled_by_number($inputNumber);

if ($isDisabled) {
    echo "input #$inputNumber is disabled\n\n";
} else {
    echo "input #$inputNumber is not disabled\n\n";
}

// Example 3: Check if an input within a specific frame is disabled
// This example assumes there is a frame with index 0 on the page
$inputNumber = 3;

// Check if an input within the first frame is disabled - input #3 in frame has disabled attribute
$isDisabled = DOM::$input->is_disabled_by_number($inputNumber, 0);

if ($isDisabled) {
    echo "input #$inputNumber in frame 0 is disabled\n\n";
} else {
    echo "input #$inputNumber in frame 0 not found or is not disabled\n\n";
}

// Quit the application
WINDOW::$app->quit();