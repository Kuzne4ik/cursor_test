<?php
// Scenario: Example of getting an element's inner text by its name attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements containing text
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get inner text of element by its name attribute
$elementName = "mouseover1";

// Get the inner text of the element with name="mouseover1"
$innerText = DOM::$anchor->get_inner_text_by_name($elementName);

if ($innerText !== "") {
    echo "\n\nInner text of element with name '$elementName': $innerText\n\n";
} else {
    echo "\n\nFailed to get inner text of element with name '$elementName'\n\n";
}

// Example 2: Get inner text of another element by its name attribute
$elementName = "onclick1";

// Get the inner text of the element with name="onclick1"
$innerText = DOM::$anchor->get_inner_text_by_name($elementName);

if ($innerText !== "") {
    echo "Inner text of element with name '$elementName': $innerText\n\n";
} else {
    echo "Failed to get inner text of element with name '$elementName'\n\n";
}

// Example 3: Get inner text of element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementName = "f0_mouseover1";

// Get the inner text of an element within the first frame
$innerText = DOM::$anchor->get_inner_text_by_name($elementName, 0);

if ($innerText !== "") {
    echo "Inner text of element with name '$elementName' in frame 0: $innerText\n\n";
} else {
    echo "Element with name '$elementName' not found in frame 0 or does not have inner text\n\n";
}

// Quit the application
WINDOW::$app->quit();