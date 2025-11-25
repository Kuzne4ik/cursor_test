<?php
// Scenario: This example demonstrates how to use get_by_alt function to find DOM elements by their alt attribute.
// The function allows searching for elements by alt text with exact or partial matching, and within specific frames.

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with elements having alt attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");
WEB::$browser->wait_for();

// Example 1: Get element by exact alt text match
echo "\n\nExample 1: Get element by exact alt text match";
$alt = "screenshot1";
$element = DOM::$image->get_by_alt($alt, true);

// Check if element exists
if ($element->is_exist()) {
    echo "\nElement with exact alt '{$alt}' found successfully";
    // Get and display element details
    echo "\nElement tag: " . $element->get_tag();
    echo "\nElement alt attribute: " . $element->get_alt();
    echo "\nElement src attribute: " . $element->get_src();
} else {
    echo "\nElement with exact alt '{$alt}' not found";
}

// Example 2: Get element by partial alt text match
echo "\n\nExample 2: Get element by partial alt text match";
$partialAlt = "captcha";
$element = DOM::$image->get_by_alt($partialAlt, false);

// Check if element exists
if ($element->is_exist()) {
    echo "\nElement with partial alt '{$partialAlt}' found successfully";
    // Get and display element details
    echo "\nElement tag: " . $element->get_tag();
    echo "\nElement alt attribute: " . $element->get_alt();
    echo "\nElement src attribute: " . $element->get_src();
} else {
    echo "\nElement with partial alt '{$partialAlt}' not found";
}

// Example 3: Get element by alt text within a specific frame (frame=0)
echo "\n\nExample 3: Get element by alt text within a specific frame (frame=0)";
// First check if frames are available
$framesCount = DOM::$frame->get_count();
if ($framesCount > 0) {
    $frameAlt = "screenshot1";
    $element = DOM::$image->get_by_alt($frameAlt, true, "0");

    // Check if element exists
    if ($element->is_exist()) {
        echo "\nElement with alt '{$frameAlt}' found in frame 0";
        // Get and display element details
        echo "\nElement tag: " . $element->get_tag();
        echo "\nElement alt attribute: " . $element->get_alt();
        echo "\nElement src attribute: " . $element->get_src();
    } else {
        echo "\nElement with alt '{$frameAlt}' not found in frame 0";
    }
} else {
    echo "\nNo frames found on the page";
}

// Example 4: Check if element with specific alt exists (exact match by default)
echo "\n\nExample 4: Check if element with specific alt exists";
$checkAlt = "captcha";
$element = DOM::$image->get_by_alt($checkAlt, true);

if ($element->is_exist()) {
    echo "\nElement with alt '{$checkAlt}' exists on page";
    echo "\nElement inner number: " . $element->inner_number;
} else {
    echo "\nElement with alt '{$checkAlt}' does not exist on page";
    echo "\nNote: There are multiple elements with alt='captcha' on the page (lines 34 and 38)";
}

// Quit the application
WINDOW::$app->quit();