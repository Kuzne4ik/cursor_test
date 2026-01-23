<?php
// Scenario: Demonstrate the is_exist_by_alt function for checking if DOM elements exist by their alt attribute
// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements that have alt attributes (typically images)
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");
WEB::$browser->wait_for();

// Example 1: Check if an element exists by its alt
echo("Example 1: Checking if an element exists by its alt");
$elementAlt = "screenshot1"; // Alt text of an existing image

// Check if element exists
$exists = DOM::$element->is_exist_by_alt($elementAlt, true);

// Check the result
if ($exists) {
    echo "Element with alt '{$elementAlt}' exists.\n";
} else {
    echo "Element with alt '{$elementAlt}' does not exist.\n";
}

// Example 3: Check if an element exists in a specific frame by contains alt
echo "\n\nExample 3: Checking if an element exists in a specific frame  by contains alt\n";
$elementAlt = "screenshot1"; // Alt text of an image in a frame
$frameNumber = 0; // First frame

// Check if element exists in frame by contains alt
$exists = DOM::$element->is_exist_by_alt($elementAlt, false, $frameNumber);

// Check the result
if ($exists) {
    echo "Element contains alt '{$elementAlt}' exists in frame {$frameNumber}.\n";
} else {
    echo "Element contains alt '{$elementAlt}' does not exist in frame {$frameNumber}.\n";
}

// Quit the application
WINDOW::$app->quit();
?>