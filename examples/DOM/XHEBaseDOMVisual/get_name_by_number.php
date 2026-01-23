<?php
// Scenario: Get the name attribute value of an element by its number on the page
// XHE host and initialization
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with form elements having name attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Get name of element by its number (valid element)
$elementNumber = 0;  // First element on the page
$name = DOM::$input->get_name_by_number($elementNumber);

if ($name !== "") {
    echo "\n\nName of element at position $elementNumber: $name";
} else {
    echo "\n\nElement at position $elementNumber has no name attribute or doesn't exist";
}

// Example 2: Get name of another element by its number
$elementNumber = 2;  // Third element on the page
$name = DOM::$input->get_name_by_number($elementNumber);

if ($name !== "") {
    echo "\n\nName of element at position $elementNumber: $name";
} else {
    echo "\n\nElement at position $elementNumber has no name attribute or doesn't exist";
}

// Example 3: Get name of element by its number within a specific frame
// First check if frames are available
$framesCount = DOM::$frame->get_count();
if ($framesCount > 0) {
    // Get name of element in the first frame (frame=0)
    $elementNumber = 0;  // First element in the frame
    $name = DOM::$input->get_name_by_number($elementNumber, 0);
    
    if ($name !== "") {
        echo "\n\nName of element at position $elementNumber in frame 0: $name";
    } else {
        echo "\n\nElement at position $elementNumber in frame 0 has no name attribute or doesn't exist";
    }
} else {
    echo "\n\nNo frames found on the page";
}

// Quit the application
WINDOW::$app->quit();