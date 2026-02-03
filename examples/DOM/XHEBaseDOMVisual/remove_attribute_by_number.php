<?php
// Scenario: Remove attribute of DOM elements by number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Remove an attribute from the first element (index 0)
$elementNumber = 0;
$attrName = "title";

// First, let's check if the attribute exists
$attrValue = DOM::$anchor->get_attribute_by_number($elementNumber, $attrName);
if ($attrValue !== "") {
    echo "Element #{$elementNumber} has attribute '{$attrName}' with value: '{$attrValue}'\n";
    
    // Remove the attribute
    $removeResult = DOM::$anchor->remove_attribute_by_number($elementNumber, $attrName);
    if ($removeResult) {
        echo "Successfully removed attribute '{$attrName}' from element #{$elementNumber}\n";
        
        // Verify the attribute was removed
        $checkAttr = DOM::$anchor->get_attribute_by_number($elementNumber, $attrName);
        if ($checkAttr === "") {
            echo "Verification: Attribute '{$attrName}' has been successfully removed from element #{$elementNumber}\n";
        } else {
            echo "Warning: Attribute '{$attrName}' still exists with value: '{$checkAttr}'\n";
        }
    } else {
        echo "Failed to remove attribute '{$attrName}' from element #{$elementNumber}\n";
    }
} else {
    echo "Element #{$elementNumber} does not have attribute '{$attrName}'\n";
}

// Example 2: Remove an attribute from an element within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$elementNumber3 = 0;
$frameAttrName = "data-frame-attr";

// First, let's add a custom attribute to an element in the frame
$addResult = DOM::$anchor->add_attribute_by_number($elementNumber3, $frameAttrName, "test-value", $frameNumber);
if ($addResult) {
    echo "Successfully added attribute '{$frameAttrName}' to element #{$elementNumber3} in frame {$frameNumber}\n";
    
    // Now remove the attribute
    $removeResult3 = DOM::$anchor->remove_attribute_by_number($elementNumber3, $frameAttrName, $frameNumber);
    if ($removeResult3) {
        echo "Successfully removed attribute '{$frameAttrName}' from element #{$elementNumber3} in frame {$frameNumber}\n";
        
        // Verify the attribute was removed
        $checkAttr3 = DOM::$anchor->get_attribute_by_number($elementNumber3, $frameAttrName, $frameNumber);
        if ($checkAttr3 === "") {
            echo "Verification: Attribute '{$frameAttrName}' has been successfully removed from element #{$elementNumber3} in frame {$frameNumber}\n";
        } else {
            echo "Warning: Attribute '{$frameAttrName}' still exists with value: '{$checkAttr3}'\n";
        }
    } else {
        echo "Failed to remove attribute '{$frameAttrName}' from element #{$elementNumber3} in frame {$frameNumber}\n";
    }
} else {
    echo "Could not add attribute '{$frameAttrName}' to element #{$elementNumber3} in frame {$frameNumber}. Skipping removal test.\n";
}

// Quit the application
WINDOW::$app->quit();