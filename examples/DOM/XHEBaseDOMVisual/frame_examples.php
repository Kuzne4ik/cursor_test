<?php
// Scenario: Examples of working with DOM elements in frames
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with frames
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Wait for frame 0 to be available
$frameExists = DOM::$frame->is_exist_by_number(0);

if ($frameExists) {
    echo "Frame 0 exists on the page\n";
    
    // Get an input from frame 0 by number
    $inputInFrame = DOM::$input->get_by_number(0, "0");
    
    if ($inputInFrame->is_exist()) {
        echo "input with number 0 exists in frame 0\n";
        
        // Set focus to the input in frame
        $focusResult = DOM::$input->set_focus_by_number(0, "0");
        if ($focusResult) {
            echo "Focus set to input with number 0 in frame 0\n";
        } else {
            echo "Failed to set focus to input with number 0 in frame 0\n";
        }
        
        // Click on the input in frame
        $clickResult = DOM::$input->click_by_number(0, "0");
        if ($clickResult) {
            echo "Clicked on input with number 0 in frame 0\n";
        } else {
            echo "Failed to click on input with number 0 in frame 0\n";
        }
        
        // Set value of the input in frame
        $setValueResult = DOM::$input->set_value_by_number(0, "test value in frame", "0");
        if ($setValueResult) {
            echo "Set value of input with number 0 in frame 0\n";
        } else {
            echo "Failed to set value of input with number 0 in frame 0\n";
        }
        
        // Get value of the input in frame
        $value = DOM::$input->get_value_by_number(0, "0");
        if ($value !== false) {
            echo "Value of input with number 0 in frame 0: " . $value . "\n";
        } else {
            echo "Failed to get value of input with number 0 in frame 0\n";
        }
        
        // Get attribute 'type' of the input in frame
        $attribute = DOM::$input->get_attribute_by_number(0, "type", "0");
        if ($attribute !== false) {
            echo "Attribute 'type' of input with number 0 in frame 0: " . $attribute . "\n";
        } else {
            echo "Failed to get attribute 'type' of input with number 0 in frame 0\n";
        }
        
        // Send event 'onfocus' to the input in frame
        $eventResult = DOM::$input->send_event_by_number(0, "onfocus", "0");
        if ($eventResult) {
            echo "Sent 'onfocus' event to input with number 0 in frame 0\n";
        } else {
            echo "Failed to send 'onfocus' event to input with number 0 in frame 0\n";
        }
        
        // Get inner text of the input in frame
        $innerText = DOM::$input->get_inner_text_by_number(0, "0");
        if ($innerText !== false) {
            echo "Inner text of input with number 0 in frame 0: " . $innerText . "\n";
        } else {
            echo "Failed to get inner text of input with number 0 in frame 0\n";
        }
    } else {
        echo "input with number 0 does not exist in frame 0\n";
    }
} else {
    echo "Frame 0 does not exist on the page\n";
}

// Example with nested frames - frame 0:0 (first frame inside first frame)
$nestedFrameExists = DOM::$frame->is_exist_by_number(0, "0:0");

if ($nestedFrameExists) {
    echo "Nested frame 0:0 exists on the page\n";
    
    // Get an input from nested frame
    $inputInNestedFrame = DOM::$input->get_by_number(0, "0:0");
    
    if ($inputInNestedFrame->is_exist()) {
        echo "input with number 0 exists in nested frame 0:0\n";
        
        // Click on the input in nested frame
        $nestedClickResult = DOM::$input->click_by_number(0, "0:0");
        if ($nestedClickResult) {
            echo "Clicked on input with number 0 in nested frame 0:0\n";
        } else {
            echo "Failed to click on input with number 0 in nested frame 0:0\n";
        }
    } else {
        echo "input with number 0 does not exist in nested frame 0:0\n";
    }
} else {
    echo "Nested frame 0:0 does not exist on the page\n";
}

// Quit the application
WINDOW::$app->quit();