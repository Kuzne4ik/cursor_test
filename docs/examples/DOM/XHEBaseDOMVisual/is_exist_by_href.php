<?php
// Scenario: Demonstrate the is_exist_by_href function for checking if DOM elements exist by their href attribute

// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements that have href attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for();

// Example 1: Check if an element exists by its href (existing element)
echo "Example 1: Checking if an element exists by its href (existing element)\n";
$elementHref = "#"; // Common href value for anchor links

// Check if element exists
$exists = DOM::$anchor->is_exist_by_href($elementHref, true);

// Check the result
if ($exists) {
    echo "Element with href '{$elementHref}' exists.\n";
} else {
    echo "Element with href '{$elementHref}' does not exist.\n";
}

// Example 2: Check if an element exists in a specific frame
echo "\n\nExample 3: Checking if an element exists in a specific frame\n";
$elementHref = "https://example.com/frame0/mouseover1"; // Href of an element in a frame
$frameNumber = 0; // First frame

// Check if element exists in frame by contains href value
$exists = DOM::$anchor->is_exist_by_href($elementHref, false, $frameNumber);

// Check the result
if ($exists) {
    echo "Element contains href '{$elementHref}' exists in frame {$frameNumber}.\n";
} else {
    echo "Element contains href '{$elementHref}' does not exist in frame {$frameNumber}.\n";
}

// Quit the application
WINDOW::$app->quit();
?>