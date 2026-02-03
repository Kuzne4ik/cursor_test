<?php
// Scenario: Remove attribute of DOM elements by attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with HTML elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Remove an attribute from an element by exact attribute match
$attrName = "id";
$attrValue = "id_mouseover1";
$exactly = true;
$removeAttrName = "data-action";

// First, let's check if the element exists and has the attribute to remove
$findedElement = DOM::$anchor->get_by_attribute($attrName, $attrValue, $exactly);
if ($findedElement->is_exist()) {
    // Check if the attribute to remove exists
    $attrValueToRemove = DOM::$anchor->get_attribute_by_attribute($attrName, $attrValue, $exactly, $removeAttrName);
    if ($attrValueToRemove !== "") {
        echo "Element with attribute '{$attrName}'='{$attrValue}' has attribute '{$removeAttrName}' with value: '{$attrValueToRemove}'\n";
        
        // Remove the attribute
        $removeResult = DOM::$anchor->remove_attribute_by_attribute($attrName, $attrValue, $exactly, $removeAttrName);
        if ($removeResult) {
            echo "Successfully removed attribute '{$removeAttrName}' from element with attribute '{$attrName}'='{$attrValue}'\n";
            
            // Verify the attribute was removed
            $checkAttr = DOM::$anchor->get_attribute_by_attribute($attrName, $attrValue, $exactly, $removeAttrName);
            if ($checkAttr === "") {
                echo "Verification: Attribute '{$removeAttrName}' has been successfully removed from element with attribute '{$attrName}'='{$attrValue}'\n";
            } else {
                echo "Warning: Attribute '{$removeAttrName}' still exists with value: '{$checkAttr}'\n";
            }
        } else {
            echo "Failed to remove attribute '{$removeAttrName}' from element with attribute '{$attrName}'='{$attrValue}'\n";
        }
    } else {
        echo "Element with attribute '{$attrName}'='{$attrValue}' does not have attribute '{$removeAttrName}'\n";
    }
} else {
    echo "Element with attribute '{$attrName}'='{$attrValue}' does not exist\n";
}

// Example 2: Remove an attribute from an element by partial attribute match
$partialAttrName = "data-type";
$partialAttrValue = "link";
$exactly2 = false;
$partialRemoveAttrName = "data-action";

// First, let's check if the element exists and has the attribute to remove
$element2 = DOM::$anchor->get_by_attribute($partialAttrName, $partialAttrValue, $exactly2);
if ($element2->is_exist()) {
    // Check if the attribute to remove exists
    $attrValueToRemove2 = DOM::$anchor->get_attribute_by_attribute($partialAttrName, $partialAttrValue, $exactly2, $partialRemoveAttrName);
    if ($attrValueToRemove2 !== "") {
        echo "Element with partial attribute '{$partialAttrName}'='{$partialAttrValue}' has attribute '{$partialRemoveAttrName}' with value: '{$attrValueToRemove2}'\n";
        
        // Remove the attribute
        $removeResult2 = DOM::$anchor->remove_attribute_by_attribute($partialAttrName, $partialAttrValue, $exactly2, $partialRemoveAttrName);
        if ($removeResult2) {
            echo "Successfully removed attribute '{$partialRemoveAttrName}' from element with partial attribute '{$partialAttrName}'='{$partialAttrValue}'\n";
            
            // Verify the attribute was removed
            $checkAttr2 = DOM::$anchor->get_attribute_by_attribute($partialAttrName, $partialAttrValue, $exactly2, $partialRemoveAttrName);
            if ($checkAttr2 === "") {
                echo "Verification: Attribute '{$partialRemoveAttrName}' has been successfully removed from element with partial attribute '{$partialAttrName}'='{$partialAttrValue}'\n";
            } else {
                echo "Warning: Attribute '{$partialRemoveAttrName}' still exists with value: '{$checkAttr2}'\n";
            }
        } else {
            echo "Failed to remove attribute '{$partialRemoveAttrName}' from element with partial attribute '{$partialAttrName}'='{$partialAttrValue}'\n";
        }
    } else {
        echo "Element with partial attribute '{$partialAttrName}'='{$partialAttrValue}' does not have attribute '{$partialRemoveAttrName}'\n";
    }
} else {
    echo "Element with partial attribute '{$partialAttrName}'='{$partialAttrValue}' does not exist\n";
}

// Example 3: Remove an attribute from an element within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$frameAttrName = "id";
$frameAttrValue = "id_f0_mouseover1";
$exactly3 = true;
$frameRemoveAttrName = "data-frame-attr";

// First, let's add a custom attribute to an element in the frame
$addResult = DOM::$anchor->add_attribute_by_attribute($frameAttrName, $frameAttrValue, $exactly3, $frameRemoveAttrName, "test-value", $frameNumber);
if ($addResult) {
    echo "Successfully added attribute '{$frameRemoveAttrName}' to element with attribute '{$frameAttrName}'='{$frameAttrValue}' in frame {$frameNumber}\n";
    
    // Now remove the attribute
    $removeResult3 = DOM::$anchor->remove_attribute_by_attribute($frameAttrName, $frameAttrValue, $exactly3, $frameRemoveAttrName, $frameNumber);
    if ($removeResult3) {
        echo "Successfully removed attribute '{$frameRemoveAttrName}' from element with attribute '{$frameAttrName}'='{$frameAttrValue}' in frame {$frameNumber}\n";
        
        // Verify the attribute was removed
        $checkAttr3 = DOM::$anchor->get_attribute_by_attribute($frameAttrName, $frameAttrValue, $exactly3, $frameRemoveAttrName, $frameNumber);
        if ($checkAttr3 === "") {
            echo "Verification: Attribute '{$frameRemoveAttrName}' has been successfully removed from element with attribute '{$frameAttrName}'='{$frameAttrValue}' in frame {$frameNumber}\n";
        } else {
            echo "Warning: Attribute '{$frameRemoveAttrName}' still exists with value: '{$checkAttr3}'\n";
        }
    } else {
        echo "Failed to remove attribute '{$frameRemoveAttrName}' from element with attribute '{$frameAttrName}'='{$frameAttrValue}' in frame {$frameNumber}\n";
    }
} else {
    echo "Could not add attribute '{$frameRemoveAttrName}' to element with attribute '{$frameAttrName}'='{$frameAttrValue}' in frame {$frameNumber}. Skipping removal test.\n";
}

// Quit the application
WINDOW::$app->quit();