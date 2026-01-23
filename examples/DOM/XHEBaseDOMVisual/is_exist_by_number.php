<?php
// Scenario: Demonstrate the is_exist_by_number function for checking if DOM elements exist by their number
// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with multiple elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for();

// Example 1: Check if an element exists by its number (existing element)
echo "Example 1: Checking if an element exists by its number (existing element)\n";
$elementNumber = 0; // First element on the page

// Check if element exists
$exists = DOM::$anchor->is_exist_by_number($elementNumber);

// Check the result
if ($exists) {
    echo "Element with number {$elementNumber} exists.\n";
} else {
    echo "Element with number {$elementNumber} does not exist.\n";
}

// Example 2: Check if an element exists in a specific frame
echo "\n\nExample 2: Checking if an element exists in a specific frame\n";
$elementNumber = 0; // First element in the frame
$frameNumber = 0; // First frame

// Check if element exists in frame
$exists = DOM::$anchor->is_exist_by_number($elementNumber, $frameNumber);

// Check the result
if ($exists) {
    echo "Element with number {$elementNumber} exists in frame {$frameNumber}.\n";
} else {
    echo "Element with number {$elementNumber} does not exist in frame {$frameNumber}.\n";
}

// Quit the application
WINDOW::$app->quit();
?>