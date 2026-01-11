<?php
// Scenario: Example of getting the count of elements on a page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get the count of all elements on the page
$elementCount = DOM::$element->get_count();
echo "Total number of elements on the page: $elementCount\n\n";

// Example 2: Get the count of inputs 

// Note: This is a demonstration of getting input count
$inputCount = DOM::$input->get_count();
echo "Number of input on page: $inputCount\n\n";

// Example 3: Get the count of elements within a specific frame
// This example assumes there is a frame with index 0 on the page
$frameElementCount = DOM::$element->get_count(0);
echo "Number of elements in frame 0: $frameElementCount\n\n";

// Example 4: Get the count of elements within a nested frame
// This example assumes there is a frame structure with nested frames
// The frame parameter "0:1" means the second frame (index 1) inside the first frame (index 0)
$nestedFrameElementCount = DOM::$element->get_count("0:1");
echo "Number of elements in a nested frame '0:1': $nestedFrameElementCount\n\n";

// Quit the application
WINDOW::$app->quit();