<?php
// Scenario: Example of waiting for a DOM element to exist by its id attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with DOM elements
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Wait for an element with id "frm1" to exist (form element)
$elementId = "frm1";
$exactly = false;

echo("Example 1: Wait for element with id '$elementId' to exist\n");
$elementExists = DOM::$form->wait_element_exist_by_id($elementId, $exactly);

if ($elementExists) {
    echo("Example 1: Element with id '$elementId' exists on the page\n");
    
    // Get the element to perform additional operations
    $findedElement = DOM::$form->get_by_id($elementId);
    
    if ($findedElement->is_exist()) {
        echo("Example 1: Successfully retrieved element with id '$elementId'\n");
    } else {
        echo("Example 1: Failed to retrieve element with id '$elementId'\n");
    }
} else {
    echo("Example 1: Element with id '$elementId' does not exist on the page\n");
}

// Example 2: Wait for an element in frame 0
$divNumber = 0;
$frameNumber = 0;
echo("Example 2: Check if div $divNumber exists on the page\n");

// Wait for an element with id "frm1" (form element) in frame 0 to exist
$formElementId = "frm1";
$exactly = false;
echo("Example 2: Wait for element form with id '$formElementId' to exist in frame $frameNumber\n");
$elementInFrameExists = DOM::$form->wait_element_exist_by_id($formElementId, $exactly, $frameNumber);
    
if ($elementInFrameExists) {
    echo("Example 2: Element with id '$formElementId' exists in frame $frameNumber\n");
        
    // Get the element from frame 0
    $elementInFrame = DOM::$form->get_by_id($formElementId, $exactly);
        
    if ($elementInFrame->is_exist()) {
        echo("Example 2: Successfully retrieved element with id '$formElementId' from frame $frameNumber\n");
    } else {
            echo("Example 2: Failed to retrieve element with id '$formElementId' from frame $frameNumber\n");
        }
} else {
    echo("Example 2: Element with id '$formElementId' does not exist in frame $frameNumber\n");
}

// Quit the application
WINDOW::$app->quit();