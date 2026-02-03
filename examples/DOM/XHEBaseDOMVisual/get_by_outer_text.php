<?php
// Scenario: Example of getting an element by its outer text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get an element by its outer text
$outerText = "`id_mouseover1`"; // Outer text that exists in anchor.html (line 40)

// Get the element by its outer text (exact match)
$findedElement = DOM::$anchor->get_by_outer_text($outerText, true);

// Check if the element exists
if ($findedElement->is_exist()) {
    echo "Element with outer text '$outerText' exists.\n";
    
    // Get element information
    $tagName = $findedElement->get_tag();
    $innerHtml = $findedElement->get_inner_html();
    
    echo "Tag name: $tagName\n";
    echo "Inner HTML: '$innerHtml'\n";
} else {
    echo "Element with outer text '$outerText' does not exist.\n";
}
echo "\n";

// Example 2: Get an element by partial outer text match
$partialOuterText = "Сайт"; // Partial text that exists in multiple elements

// Get the element by partial outer text match
$findedElement = DOM::$anchor->get_by_outer_text($partialOuterText, false);

// Check if the element exists
if ($findedElement->is_exist()) {
    echo "Element with outer text containing '$partialOuterText' exists.\n";
    
    // Get element information
    $tagName = $findedElement->get_tag();
    $innerHtml = $findedElement->get_inner_html();
    
    echo "Tag name: $tagName\n";
    echo "Inner HTML: '$innerHtml'\n";
} else {
    echo "Element with outer text containing '$partialOuterText' does not exist.\n";
}
echo "\n";

// Example 3: Get an element by outer text within a frame
// This example gets an element from frame 0 (first iframe on the page)
$frameOuterText = "Frame0: onmouseover 1"; // Outer text that exists in frame 0 (line 27)

// Get the element by exact outer text match within a frame
$findedElement = DOM::$anchor->get_by_outer_text($frameOuterText, true, "0");

// Check if the element exists
if ($findedElement->is_exist()) {
    echo "Element with outer text '$frameOuterText' in frame 0 exists.\n";
    
    // Get element information
    $tagName = $findedElement->get_tag();
    $innerHtml = $findedElement->get_inner_html();
    
    echo "Tag name: $tagName\n";
    echo "Inner HTML: '$innerHtml'\n";
} else {
    echo "Element with outer text '$frameOuterText' in frame 0 does not exist.\n";
}
echo "\n";

// Quit the application
WINDOW::$app->quit();