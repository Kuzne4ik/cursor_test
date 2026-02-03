<?php
// Scenario: Get element number by its name attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example 1: Get number of element by name
$elementName = "id0";
$number = DOM::$input->get_number_by_name($elementName);

if ($number >= 0) {
    echo "\nElement with name '$elementName' has number: $number";
} else {
    echo "\nElement with name '$elementName' not found";
}

// Example 2: Get number of element by name in frame (frame=0)
$frameNumber = 0;
$frameElementName = "fr_id0";
$number = DOM::$input->get_number_by_name($frameElementName, $frameNumber);

if ($number >= 0) {
    echo "\nElement with name '$frameElementName' in frame $frameNumber has number: $number";
} else {
    echo "\nElement with name '$frameElementName' not found in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();