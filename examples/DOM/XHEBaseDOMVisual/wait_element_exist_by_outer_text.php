<?php
// Scenario: Example of waiting for a DOM element to exist by its outer text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with DOM elements
WEB::$browser->navigate(TEST_POLYGON_URL . "elements.html");

// Wait for an element with outer text "Click here to submit" to exist
$elementExists = DOM::$element->wait_element_exist_by_outer_text("Click here to submit");

if ($elementExists) {
    echo "Element with outer text 'Click here to submit' exists on the page\n";
    
    // Get the element to perform additional operations
    $findedElement = DOM::$element->get_by_outer_text("Click here to submit");
    
    if ($findedElement->is_exist()) {
        echo "Successfully retrieved element with outer text 'Click here to submit'\n";
        echo "Element tag name: " . $findedElement->get_name() . "\n";
    } else {
        echo "Failed to retrieve element with outer text 'Click here to submit'\n";
    }
} else {
    echo "Element with outer text 'Click here to submit' does not exist on the page\n";
}

// Example with exact match parameter
$elementExistsExact = DOM::$element->wait_element_exist_by_outer_text("Click here to submit", true);

if ($elementExistsExact) {
    echo "Element with exact outer text 'Click here to submit' exists on the page\n";
} else {
    echo "Element with exact outer text 'Click here to submit' does not exist on the page\n";
}

// Example with frame parameter - wait for an element in frame 0
$frameExists = DOM::$frame->is_exist_by_number(0);

if ($frameExists) {
    echo "Frame 0 exists on the page\n";
    
    // Wait for an element with outer text "Frame Button" in frame 0 to exist
    $elementInFrameExists = DOM::$element->wait_element_exist_by_outer_text("Frame Button", false, "0");
    
    if ($elementInFrameExists) {
        echo "Element with outer text 'Frame Button' exists in frame 0\n";
        
        // Get the element from frame 0
        $elementInFrame = DOM::$element->get_by_outer_text("Frame Button", false, "0");
        
        if ($elementInFrame->is_exist()) {
            echo "Successfully retrieved element with outer text 'Frame Button' from frame 0\n";
            echo "Element tag name: " . $elementInFrame->get_name() . "\n";
        } else {
            echo "Failed to retrieve element with outer text 'Frame Button' from frame 0\n";
        }
    } else {
        echo "Element with outer text 'Frame Button' does not exist in frame 0\n";
    }
} else {
    echo "Frame 0 does not exist on the page\n";
}

// Quit the application
WINDOW::$app->quit();