<?php
// Scenario: Demonstrates how to set focus to a DOM element by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for the page to load
WEB::$browser->wait(1);

// Set focus to an input element by its number
$focusResult = DOM::$input->set_focus_by_number(0);
if ($focusResult) {
    echo "Successfully set focus to input element with number 0\n";
} else {
    echo "Failed to set focus to input element with number 0\n";
}

// Set focus to an input element by its number in frame 0
$focusResultFrame = DOM::$input->set_focus_by_number(0, "frame1");
if ($focusResultFrame) {
    echo "\nSuccessfully set focus to input element with number 0 in frame 'frame1'\n";
} else {
    echo "\nFailed to set focus to input element with number 0 in frame 'frame1'\n";
}


// Quit the application
WINDOW::$app->quit();