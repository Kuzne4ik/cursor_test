<?php
// Scenario: Example of getting all attributes of elements by attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with various elements
$navigateResult = WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Check if navigation was successful
if ($navigateResult) {
    echo "Successfully navigated to anchor.html\n";
    
    // Wait for the page to load
    $waitResult = WEB::$browser->wait_for();
    
    if ($waitResult) {
        echo "Page loaded successfully\n";
        
        // Example 1: Basic usage - get all attributes of elements by attribute
        $attrName = "name";
        $attrValue = "mouseover1";
        
        // Get all attributes of elements with attribute "name" equal to "mouseover1"
        $attributes = DOM::$element->get_all_attributes_by_attribute("id", $attrName, $attrValue, true);
        
        // Check if the operation was successful
        if ($attributes !== false) {
            echo "Successfully retrieved attributes for elements with attribute '$attrName'='$attrValue'\n";
        } else {
            echo "Failed to retrieve attributes for elements with attribute '$attrName'='$attrValue'\n";
        }
        
        echo "All attributes of elements with attribute '$attrName'='$attrValue':\n";
        if (is_array($attributes) && count($attributes) > 0) {
            foreach ($attributes as $index => $attrArray) {
                echo "Element " . ($index + 1) . " attributes:\n";
                if (is_array($attrArray) && count($attrArray) > 0) {
                    foreach ($attrArray as $name => $value) {
                        echo "  $name: '$value'\n";
                    }
                } else {
                    echo "  No attributes found\n";
                }
                echo "\n";
            }
        } else {
            echo "No attributes found for elements with attribute '$attrName'='$attrValue'\n";
        }
        echo "\n";
        
        // Example 2: Get all attributes of elements by another attribute
        $attrName = "data-action";
        $attrValue = "click";
        
        // Get all attributes of elements with attribute "data-action" equal to "click"
        $attributes = DOM::$element->get_all_attributes_by_attribute("id", $attrName, $attrValue, true);
        
        // Check if the operation was successful
        if ($attributes !== false) {
            echo "Successfully retrieved attributes for elements with attribute '$attrName'='$attrValue'\n";
        } else {
            echo "Failed to retrieve attributes for elements with attribute '$attrName'='$attrValue'\n";
        }
        
        echo "All attributes of elements with attribute '$attrName'='$attrValue':\n";
        if (is_array($attributes) && count($attributes) > 0) {
            foreach ($attributes as $index => $attrArray) {
                echo "Element " . ($index + 1) . " attributes:\n";
                if (is_array($attrArray) && count($attrArray) > 0) {
                    foreach ($attrArray as $name => $value) {
                        echo "  $name: '$value'\n";
                    }
                } else {
                    echo "  No attributes found\n";
                }
                echo "\n";
            }
        } else {
            echo "No attributes found for elements with attribute '$attrName'='$attrValue'\n";
        }
        echo "\n";
        
        // Example 3: Get all attributes of elements using partial match
        $attrName = "data-type";
        $attrValue = "link";
        
        // Get all attributes of elements with attribute "data-type" containing "link"
        $attributes = DOM::$element->get_all_attributes_by_attribute("id", $attrName, $attrValue, false);
        
        // Check if the operation was successful
        if ($attributes !== false) {
            echo "Successfully retrieved attributes for elements with attribute '$attrName' containing '$attrValue'\n";
        } else {
            echo "Failed to retrieve attributes for elements with attribute '$attrName' containing '$attrValue'\n";
        }
        
        echo "All attributes of elements with attribute '$attrName' containing '$attrValue':\n";
        if (is_array($attributes) && count($attributes) > 0) {
            foreach ($attributes as $index => $attrArray) {
                echo "Element " . ($index + 1) . " attributes:\n";
                if (is_array($attrArray) && count($attrArray) > 0) {
                    foreach ($attrArray as $name => $value) {
                        echo "  $name: '$value'\n";
                    }
                } else {
                    echo "  No attributes found\n";
                }
                echo "\n";
            }
        } else {
            echo "No attributes found for elements with attribute '$attrName' containing '$attrValue'\n";
        }
        echo "\n";
        
        // Example 4: Get all attributes of elements with a specific attribute within a frame
        // This example assumes there is a frame with index 0 on the page
        $attrName = "id";
        $attrValue = "frm1";
        
        // Check if frame exists first
        $frameExists = DOM::$frame->is_exist_by_number(0);
        
        if ($frameExists) {
            echo "Frame 0 exists\n";
            
            // Get all attributes of elements with attribute "id" equal to "frm1" within the first frame
            $attributes = DOM::$element->get_all_attributes_by_attribute("class", $attrName, $attrValue, true, "0");
            
            // Check if the operation was successful
            if ($attributes !== false) {
                echo "Successfully retrieved attributes for elements with attribute '$attrName'='$attrValue' in frame 0\n";
            } else {
                echo "Failed to retrieve attributes for elements with attribute '$attrName'='$attrValue' in frame 0\n";
            }
            
            echo "All attributes of elements with attribute '$attrName'='$attrValue' in frame 0:\n";
            if (is_array($attributes) && count($attributes) > 0) {
                foreach ($attributes as $index => $attrArray) {
                    echo "Element " . ($index + 1) . " attributes:\n";
                    if (is_array($attrArray) && count($attrArray) > 0) {
                        foreach ($attrArray as $name => $value) {
                            echo "  $name: '$value'\n";
                        }
                    } else {
                        echo "  No attributes found\n";
                    }
                    echo "\n";
                }
            } else {
                echo "No attributes found for elements with attribute '$attrName'='$attrValue' in frame 0\n";
            }
            echo "\n";
        } else {
            echo "Frame 0 does not exist\n";
        }
        
        // Example 5: Get all attributes of elements with a non-existent attribute
        $attrName = "nonexistent";
        $attrValue = "value";
        
        // Get all attributes of elements with a non-existent attribute
        $attributes = DOM::$element->get_all_attributes_by_attribute("id", $attrName, $attrValue, true);
        
        // Check if the operation was successful
        if ($attributes !== false) {
            echo "Unexpectedly retrieved attributes for elements with non-existent attribute '$attrName'='$attrValue'\n";
        } else {
            echo "As expected, failed to retrieve attributes for elements with non-existent attribute '$attrName'='$attrValue'\n";
        }
        
        echo "All attributes of elements with attribute '$attrName'='$attrValue':\n";
        if (is_array($attributes) && count($attributes) > 0) {
            foreach ($attributes as $index => $attrArray) {
                echo "Element " . ($index + 1) . " attributes:\n";
                if (is_array($attrArray) && count($attrArray) > 0) {
                    foreach ($attrArray as $name => $value) {
                        echo "  $name: '$value'\n";
                    }
                } else {
                    echo "  No attributes found\n";
                }
                echo "\n";
            }
        } else {
            echo "No attributes found for elements with attribute '$attrName'='$attrValue' (as expected)\n";
        }
        echo "\n";
        
        // Example 6: Use the retrieved attributes to interact with the elements
        $attrName = "data-status";
        $attrValue = "disabled";
        
        // Get all attributes of elements with attribute "data-status" equal to "disabled"
        $attributes = DOM::$element->get_all_attributes_by_attribute("id", $attrName, $attrValue, true);
        
        // Check if the operation was successful
        if ($attributes !== false) {
            echo "Successfully retrieved attributes for elements with attribute '$attrName'='$attrValue'\n";
        } else {
            echo "Failed to retrieve attributes for elements with attribute '$attrName'='$attrValue'\n";
        }
        
        echo "Interacting with elements that have attribute '$attrName'='$attrValue':\n";
        if (is_array($attributes) && count($attributes) > 0) {
            // Get all numbers of elements with the same attribute
            $numbers = DOM::$element->get_all_numbers_by_attribute($attrName, $attrValue, true);
            
            // Check if the operation was successful
            if ($numbers !== false) {
                echo "Successfully retrieved numbers of elements with attribute '$attrName'='$attrValue'\n";
            } else {
                echo "Failed to retrieve numbers of elements with attribute '$attrName'='$attrValue'\n";
            }
            
            if (is_array($numbers) && count($numbers) > 0) {
                foreach ($numbers as $index => $number) {
                    // Get the element by number
                    $element = DOM::$element->get_by_number($number);
                    
                    // Check if the operation was successful
                    if ($element !== false) {
                        echo "Successfully retrieved element number $number\n";
                        
                        if ($element->is_exist()) {
                            echo "- Element number $number exists.\n";
                            
                            // Display the attributes
                            if (isset($attributes[$index]) && is_array($attributes[$index])) {
                                echo "  Attributes:\n";
                                foreach ($attributes[$index] as $name => $value) {
                                    echo "    $name: '$value'\n";
                                }
                            } else {
                                echo "  No attributes found\n";
                            }
                            echo "\n";
                        } else {
                            echo "- Element number $number does not exist\n";
                        }
                    } else {
                        echo "Failed to retrieve element number $number\n";
                    }
                }
            } else {
                echo "No elements found with attribute '$attrName'='$attrValue'\n";
            }
        } else {
            echo "No attributes found for elements with attribute '$attrName'='$attrValue'\n";
        }
        echo "\n";
    } else {
        echo "Failed to wait for page to load\n";
    }
} else {
    echo "Failed to navigate to anchor.html\n";
}

// Quit the application
WINDOW::$app->quit();