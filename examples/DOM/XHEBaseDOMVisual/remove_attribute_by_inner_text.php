<?php
// Scenario: Remove attribute of DOM elements by inner text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with text elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Remove an attribute from an element by exact inner text
$innerText = "Блог";
$exactly = true;
$attrName = "data-action";

// First, let's check if the attribute exists
$attrValue = DOM::$anchor->get_attribute_by_inner_text($innerText, $exactly, $attrName);
if ($attrValue !== "") {
    echo "Element with inner text '{$innerText}' has attribute '{$attrName}' with value: '{$attrValue}'\n";
    
    // Remove the attribute
    $removeResult = DOM::$anchor->remove_attribute_by_inner_text($innerText, $exactly, $attrName);
    if ($removeResult) {
        echo "Successfully removed attribute '{$attrName}' from element with inner text '{$innerText}'\n";
        
        // Verify the attribute was removed
        $checkAttr = DOM::$anchor->get_attribute_by_inner_text($innerText, $exactly, $attrName);
        if ($checkAttr === "") {
            echo "Verification: Attribute '{$attrName}' has been successfully removed from element with inner text '{$innerText}'\n";
        } else {
            echo "Warning: Attribute '{$attrName}' still exists with value: '{$checkAttr}'\n";
        }
    } else {
        echo "Failed to remove attribute '{$attrName}' from element with inner text '{$innerText}'\n";
    }
} else {
    echo "Element with inner text '{$innerText}' does not have attribute '{$attrName}'\n";
}

// Example 2: Remove an attribute from an element by partial inner text
$partialInnerText = "Блог";
$exactly2 = false;
$partialAttrName = "data-category";

// First, let's check if the attribute exists
$attrValue2 = DOM::$anchor->get_attribute_by_inner_text($partialInnerText, $exactly2, $partialAttrName);
if ($attrValue2 !== "") {
    echo "Element with partial inner text '{$partialInnerText}' has attribute '{$partialAttrName}' with value: '{$attrValue2}'\n";
    
    // Remove the attribute
    $removeResult2 = DOM::$anchor->remove_attribute_by_inner_text($partialInnerText, $exactly2, $partialAttrName);
    if ($removeResult2) {
        echo "Successfully removed attribute '{$partialAttrName}' from element with partial inner text '{$partialInnerText}'\n";
        
        // Verify the attribute was removed
        $checkAttr2 = DOM::$anchor->get_attribute_by_inner_text($partialInnerText, $exactly2, $partialAttrName);
        if ($checkAttr2 === "") {
            echo "Verification: Attribute '{$partialAttrName}' has been successfully removed from element with partial inner text '{$partialInnerText}'\n";
        } else {
            echo "Warning: Attribute '{$partialAttrName}' still exists with value: '{$checkAttr2}'\n";
        }
    } else {
        echo "Failed to remove attribute '{$partialAttrName}' from element with partial inner text '{$partialInnerText}'\n";
    }
} else {
    echo "Element with partial inner text '{$partialInnerText}' does not have attribute '{$partialAttrName}'\n";
}

// Example 3: Remove an attribute from an element within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$frameInnerText = "Frame0: Блог";
$exactly3 = true;
$frameAttrName = "data-frame-attr";

// First, let's add a custom attribute to an element in the frame
$addResult = DOM::$anchor->add_attribute_by_inner_text($frameInnerText, $exactly3, $frameAttrName, "test-value", $frameNumber);
if ($addResult) {
    echo "Successfully added attribute '{$frameAttrName}' to element with inner text '{$frameInnerText}' in frame {$frameNumber}\n";
    
    // Now remove the attribute
    $removeResult3 = DOM::$anchor->remove_attribute_by_inner_text($frameInnerText, $exactly3, $frameAttrName, $frameNumber);
    if ($removeResult3) {
        echo "Successfully removed attribute '{$frameAttrName}' from element with inner text '{$frameInnerText}' in frame {$frameNumber}\n";
        
        // Verify the attribute was removed
        $checkAttr3 = DOM::$anchor->get_attribute_by_inner_text($frameInnerText, $exactly3, $frameAttrName, $frameNumber);
        if ($checkAttr3 === "") {
            echo "Verification: Attribute '{$frameAttrName}' has been successfully removed from element with inner text '{$frameInnerText}' in frame {$frameNumber}\n";
        } else {
            echo "Warning: Attribute '{$frameAttrName}' still exists with value: '{$checkAttr3}'\n";
        }
    } else {
        echo "Failed to remove attribute '{$frameAttrName}' from element with inner text '{$frameInnerText}' in frame {$frameNumber}\n";
    }
} else {
    echo "Could not add attribute '{$frameAttrName}' to element with inner text '{$frameInnerText}' in frame {$frameNumber}. Skipping removal test.\n";
}

// Quit the application
WINDOW::$app->quit();