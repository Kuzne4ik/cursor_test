<?php
// Scenario: Get all DOM elements by their number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Get all elements on the page
$elements = DOM::$element->get_all_by_number(0);

if ($elements->get_count() > 0) {
    echo "Found " . $elements->get_count() . " elements\n";
    
    // Get the first element from the collection
    $firstElement = $elements->get(0);
    if ($firstElement->is_exist()) {
        echo "First element exists\n";
        echo "First element inner number: " . $firstElement->inner_number . "\n";
    }
} else {
    echo "No elements found\n";
}

// Example with frame parameter - get all elements in frame 0
$elementsInFrame = DOM::$element->get_all_by_number(0, "0");

if ($elementsInFrame->get_count() > 0) {
    echo "Found " . $elementsInFrame->get_count() . " elements in frame 0\n";
    
    // Get the first element from the collection
    $firstElementInFrame = $elementsInFrame->get(0);
    if ($firstElementInFrame->is_exist()) {
        echo "First element in frame 0 exists\n";
        echo "First element in frame 0 inner number: " . $firstElementInFrame->inner_number . "\n";
    }
} else {
    echo "No elements found in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();