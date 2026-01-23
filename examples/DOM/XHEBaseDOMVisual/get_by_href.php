<?php
// Scenario: Get a DOM element interface by href attribute and check if it exists
// Include the XHE framework initialization
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get element by exact href match
$href = "https://example.com";
$foundElement = DOM::$anchor->get_by_href($href, true);

// Check if element exists
if ($foundElement->is_exist()) {
    echo "\n\nElement with exact href '{$href}' found successfully";
    
    // Get and display element details
    echo "\nElement tag: " . $foundElement->get_tag();
    echo "\nElement inner text: " . $foundElement->get_inner_text();
} else {
    echo "\n\nElement with exact href '{$href}' not found";
}

// Example 2: Get element by partial href match
$partialHref = "example";
$foundPartialElement = DOM::$anchor->get_by_href($partialHref, false);

// Check if element exists
if ($foundPartialElement->is_exist()) {
    echo "\n\nElement with partial href '{$partialHref}' found successfully";
    
    // Get and display element details
    echo "\nElement tag: " . $foundPartialElement->get_tag();
    echo "\nElement inner text: " . $foundPartialElement->get_inner_text();
} else {
    echo "\n\nElement with partial href '{$partialHref}' not found";
}

// Example 3: Get element by href within a specific frame (frame=0)
$href = "https://frame-example.com";
$findedElement = DOM::$anchor->get_by_href($href, true, "0");

// Check if element exists
if ($foundPartialElement->is_exist()) {
    echo "\n\nElement with href '{$href}' found in frame 0";
    
    // Get and display element details
    echo "\nElement tag: " . $foundPartialElement->get_tag();
    echo "\nElement inner text: " . $foundPartialElement->get_inner_text();
} else {
    echo "\n\nElement with href '{$href}' not found in frame 0";
}

// Quit the application
WINDOW::$app->quit();