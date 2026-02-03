<?php
// Scenario: Demonstrate the is_exist_by_id function for checking if DOM elements exist by their id attribute
// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements that have id attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for();

// Example 1: Check if an element exists by its id (existing element)
echo "Example 1: Checking if an element exists by its id (existing element)\n";
$elementId = "id1"; // ID of an existing element

// Check if element exists
$exists = DOM::$anchor->is_exist_by_id($elementId, true);

// Check the result
if ($exists) {
    echo "Element with id '{$elementId}' exists by id {$elementId}.\n";
} else {
    echo "Element with id '{$elementId}' does not exist by id {$elementId}.\n";
}

// Example 2: Check if an element exists in a specific frame by id
echo "\n\nExample 3: Checking if an element exists in a specific frame by id\n";
$elementId = "id_f0_mouseover1"; // ID of an element in a frame
$frameNumber = 0; // First frame

// Check if element exists in frame
$exists = DOM::$anchor->is_exist_by_id($elementId, false, $frameNumber);

// Check the result
if ($exists) {
    echo "Element with id '{$elementId}' exists in frame {$frameNumber} by id contains {$elementId}.\n";
} else {
    echo "Element with id '{$elementId}' does not exist in frame {$frameNumber} by id contains {$elementId}.\n";
}


// Quit the application
WINDOW::$app->quit();
?>