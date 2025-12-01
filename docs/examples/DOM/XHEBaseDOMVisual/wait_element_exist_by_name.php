<?php
// Scenario: Example of waiting for a DOM element to exist by its name attribute

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with DOM elements
$pageUrl = TEST_POLYGON_URL . "input.html";
echo("Example 1: Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Wait for an element with name "id0" to exist
$elementName = "id0";
echo("Example 1: Wait for element with name: $elementName\n");
$elementExists = DOM::$input->wait_element_exist_by_name($elementName);

if ($elementExists) {
    echo("Example 1: Element input with name '$elementName' exists on the page\n");
    
    // Get element to perform additional operations
    echo("Example 1: Get element input by name: $elementName\n");
    $findedElement = DOM::$input->get_by_name($elementName);
    
    if ($findedElement->is_exist()) {
        echo("Example 1: Successfully retrieved element input with name '$elementName'\n");
    } else {
        echo("Example 1: Failed to retrieve element with name '$elementName'\n");
    }
} else {
    echo("Example 1: Element with name '$elementName' does not exist on the page\n");
}

// Example 2: Wait for an element in frame 0
$frameNumber = 0;
   
    // Wait for an element with name "fr_id0" in frame 0 to exist
$elementInFrameName = "fr_id0";
$frameNumberStr = (string)$frameNumber;
echo("Example 2: Wait for element input with name: $elementInFrameName in frame $frameNumber\n");
$elementInFrameExists = DOM::$input->wait_element_exist_by_name($elementInFrameName, $frameNumberStr);
        
if ($elementInFrameExists) {
    echo("Example 2: Element input with name '$elementInFrameName' exists in frame $frameNumber\n");
            
    // Get element from frame 0
    echo("Example 2: Get element with name: $elementInFrameName from frame $frameNumber\n");
    $elementInFrame = DOM::$input->get_by_name($elementInFrameName, $frameNumberStr);
            
    if ($elementInFrame->is_exist()) {
        echo("Example 2: Successfully retrieved element with name '$elementInFrameName' from frame $frameNumber\n");
    } else {
        echo("Example 2: Failed to retrieve element with name '$elementInFrameName' from frame $frameNumber\n");
    }
} else {
    echo("Example 2: Element with name '$elementInFrameName' does not exist in frame $frameNumber\n");
}

// Quit the application
WINDOW::$app->quit();