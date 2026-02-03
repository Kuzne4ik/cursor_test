<?php
// Scenario: Get element number by its id attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");
WEB::$browser->wait_for(60, 1000);

// Example 1: Get number of element by id
$elementId = "username";
$number = DOM::$input->get_number_by_id($elementId);

if ($number >= 0) {
    echo "\nElement with id '$elementId' has number: $number";
} else {
    echo "\nElement with id '$elementId' not found";
}

// Example 2: Get number of non-existent element
$nonExistentId = "nonexistent-element";
$number = DOM::$input->get_number_by_id($nonExistentId);

if ($number >= 0) {
    echo "\nElement with id '$nonExistentId' has number: $number";
} else {
    echo "\nElement with id '$nonExistentId' not found";
}

// Example 3: Get number of element by id in frame (frame=0)
$frameNumber = 0;
$frameElementId = "frameInput";
$number = DOM::$input->get_number_by_id($frameElementId, $frameNumber);

if ($number >= 0) {
    echo "\nElement with id '$frameElementId' in frame $frameNumber has number: $number";
} else {
    echo "\nElement with id '$frameElementId' not found in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();