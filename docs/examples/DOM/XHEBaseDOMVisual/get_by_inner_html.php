<?php
// Scenario: Example of getting an element by its inner HTML

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Basic usage - get an element by its inner HTML
$innerHtml = "Форма 1"; // Inner HTML of a H4

// Get the element by its inner HTML (exact match)
$foundElement = DOM::$h4->get_by_inner_html($innerHtml, true);

// Check if the element exists
if ($foundElement->is_exist()) {
    echo "Element with inner HTML '$innerHtml' exists.\n";
    
    // Get element information
    $attributes = $foundElement->get_all_attributes();
    $innerText = $foundElement->get_inner_text();
    
    // Get tag name from attributes
    $tagName = isset($attributes['tagname']) ? $attributes['tagname'] : 'unknown';
    
    echo "Tag name: $tagName\n";
    echo "Inner text: '$innerText'\n";
} else {
    echo "Element with inner HTML '$innerHtml' does not exist.\n";
}
echo "\n";

// Quit the application
WINDOW::$app->quit();