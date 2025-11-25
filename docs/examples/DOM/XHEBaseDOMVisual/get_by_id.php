<?php
// Scenario: Example of getting an element by its ID

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for();

// Wait for frames to load
sleep(2);

// Example 1: Basic usage - get an element by its ID
$elementId = "id_mouseover1"; // ID of an anchor element

// Get the element by its ID
$foundElement = DOM::$anchor->get_by_id($elementId);

// Check if the element exists
if ($foundElement->is_exist()) {
    echo "Element with ID '$elementId' exists.\n";
    
    // Get element information
    $attributes = $foundElement->get_all_attributes();
    $innerText = $foundElement->get_inner_text();
    $innerHtml = $foundElement->get_inner_html();
    
    // Get tag name from attributes
    $tagName = isset($attributes['tagname']) ? $attributes['tagname'] : 'unknown';
    
    echo "Tag name: $tagName\n";
    echo "Inner text: '" . $foundElement->get_inner_text() . "'\n";
    echo "Inner HTML: '$innerHtml'\n";
} else {
    echo "Element with ID '$elementId' does not exist.\n";
}
echo "\n";

// Example 2: Get an element by ID within a frame
// This example gets an element from frame 0 (first iframe on the page)
$frameElementId = "id_f0_mouseover1"; // ID of an anchor element in frame 0

// Get the element by its ID within the frame (frame index 0)
$foundFrameElement = DOM::$anchor->get_by_id($frameElementId, true, "0");
    
// Check if the element exists
if ($foundFrameElement->is_exist()) {
    echo "Element with ID '$frameElementId' in frame 0 exists.\n";
    $tagName = $foundFrameElement->get_tag();
    echo "Tag name: $tagName\n";
    $elementHref = $foundFrameElement->get_attribute('href');
       
    echo "Element href: " . $elementHref . "\n";
} else {
        echo "Element with ID '$frameElementId' in frame 0 does not exist.\n";

}

echo "\n";

// Quit the application
WINDOW::$app->quit();