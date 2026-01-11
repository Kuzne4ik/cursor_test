<?php
// Scenario: Example of getting an element's inner text by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements containing text
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get inner text of the first element
$elementNumber = 0;

// Get the inner text of the first anchor element
$innerText = DOM::$anchor->get_inner_text_by_number($elementNumber);

if ($innerText !== "") {
    echo "\n\nInner text of element number $elementNumber: $innerText\n\n";
} else {
    echo "\n\nFailed to get inner text of element number $elementNumber\n\n";
}

// Example 2: Get inner text of the second element
$elementNumber = 1;

// Get the inner text of the second anchor element
$innerText = DOM::$anchor->get_inner_text_by_number($elementNumber);

if ($innerText !== "") {
    echo "Inner text of element number $elementNumber: $innerText\n\n";
} else {
    echo "Failed to get inner text of element number $elementNumber\n\n";
}

// Example 3: Get inner text of element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementNumber = 0;

// Get the inner text of the first element within the first frame
$innerText = DOM::$anchor->get_inner_text_by_number($elementNumber, 0);

if ($innerText !== "") {
    echo "Inner text of element number $elementNumber in frame 0: $innerText\n\n";
} else {
    echo "Element number $elementNumber not found in frame 0 or does not have inner text\n\n";
}

// Quit the application
WINDOW::$app->quit();