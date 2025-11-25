<?php
// Scenario: Example of getting an element by its outer HTML

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get an element by its outer HTML
$outerHtml = "Прикольная прога"; // Outer HTML text that exists in anchor.html (line 101)

// Get the element by its outer HTML (exact match)
$findedElement = DOM::$anchor->get_by_outer_html($outerHtml, true);

// Check if the element exists
if ($findedElement->is_exist()) {
    echo "Element with outer HTML '$outerHtml' exists.\n";
    
    // Get element information
    $tagName = $findedElement->get_tag();
    $innerHtml = $findedElement->get_inner_html();
    
    echo "Tag name: $tagName\n";
    echo "Inner HTML: '$innerHtml'\n";
} else {
    echo "Element with outer HTML '$outerHtml' does not exist.\n";
}
echo "\n";

// Example 2: Get an element by partial outer HTML match
$partialOuterHtml = "Ссылка"; // Partial outer HTML text

// Get the element by its outer HTML (partial match)
$partialElement = DOM::$anchor->get_by_outer_html($partialOuterHtml, false);

// Check if the element exists
if ($partialElement->is_exist()) {
    echo "Element with partial outer HTML '$partialOuterHtml' exists.\n";
    
    // Get element information
    $tagName = $partialElement->get_tag();
    $innerHtml = $partialElement->get_inner_html();
    
    echo "Tag name: $tagName\n";
    echo "Inner HTML: '$innerHtml'\n";
} else {
    echo "Element with partial outer HTML '$partialOuterHtml' does not exist.\n";
}
echo "\n";

// Quit the application
WINDOW::$app->quit();