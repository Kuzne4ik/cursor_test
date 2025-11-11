<?php
// Scenario: Examples of working with DOM elements in frames

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with frames
WEB::$browser->navigate(TEST_POLYGON_URL . "frames.html");

// Wait for frame 0 to be available
$frameExists = DOM::$frame->is_exist_by_number(0);

if ($frameExists) {
    echo "Frame 0 exists on the page\n";
    
    // Get an element from frame 0 by number
    $elementInFrame = DOM::$element->get_by_number(0, "0");
    
    if ($elementInFrame->is_exist()) {
        echo "Element with number 0 exists in frame 0\n";
        
        // Set focus to the element in frame
        DOM::$element->set_focus_by_number(0, "0");
        echo "Focus set to element with number 0 in frame 0\n";
        
        // Click on the element in frame
        DOM::$element->click_by_number(0, "0");
        echo "Clicked on element with number 0 in frame 0\n";
        
        // Set value of the element in frame
        DOM::$element->set_value_by_number(0, "test value in frame", "0");
        echo "Set value of element with number 0 in frame 0\n";
        
        // Get value of the element in frame
        $value = DOM::$element->get_value_by_number(0, "0");
        echo "Value of element with number 0 in frame 0: " . $value . "\n";
        
        // Get attribute of the element in frame
        $attribute = DOM::$element->get_attribute_by_number(0, "type", "0");
        echo "Attribute 'type' of element with number 0 in frame 0: " . $attribute . "\n";
        
        // Send event to the element in frame
        DOM::$element->send_event_by_number(0, "onfocus", "0");
        echo "Sent 'onfocus' event to element with number 0 in frame 0\n";
        
        // Get inner text of the element in frame
        $innerText = DOM::$element->get_inner_text_by_number(0, "0");
        echo "Inner text of element with number 0 in frame 0: " . $innerText . "\n";
        
        // Get inner HTML of the element in frame
        $innerHtml = DOM::$element->get_inner_html_by_number(0, "0");
        echo "Inner HTML of element with number 0 in frame 0: " . $innerHtml . "\n";
    } else {
        echo "Element with number 0 does not exist in frame 0\n";
    }
} else {
    echo "Frame 0 does not exist on the page\n";
}

// Example with nested frames - frame 0:0 (first frame inside first frame)
$nestedFrameExists = DOM::$frame->is_exist_by_number(0, "0:0");

if ($nestedFrameExists) {
    echo "Nested frame 0:0 exists on the page\n";
    
    // Get an element from nested frame
    $elementInNestedFrame = DOM::$element->get_by_number(0, "0:0");
    
    if ($elementInNestedFrame->is_exist()) {
        echo "Element with number 0 exists in nested frame 0:0\n";
        
        // Click on the element in nested frame
        DOM::$element->click_by_number(0, "0:0");
        echo "Clicked on element with number 0 in nested frame 0:0\n";
    } else {
        echo "Element with number 0 does not exist in nested frame 0:0\n";
    }
} else {
    echo "Nested frame 0:0 does not exist on the page\n";
}

// Quit the application
WINDOW::$app->quit();