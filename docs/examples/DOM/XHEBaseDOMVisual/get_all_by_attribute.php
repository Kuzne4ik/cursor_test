<?php
// Scenario: Examples of using get_all_by_attribute function to retrieve multiple DOM elements by their attributes

// Path to init.php file for connecting to XHE API
$xhe_host = "127.0.0.1:7010";
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
        
        echo "\n\n=== Examples of using get_all_by_attribute function ===\n\n";
        
        // Example 1: Get elements by exact attribute match
        $attr_name = "name";
        $attr_value = "mouseover1";
        $elements = DOM::$anchor->get_all_by_attribute($attr_name, $attr_value, true);
        
        // Check if the operation was successful
        if ($elements->get_count() > 0) {
            echo "Successfully retrieved elements with exact attribute '{$attr_name}'='{$attr_value}'\n";
            
            // Get count of elements
            $count = $elements->get_count();
            echo "\n\nTotal elements found with exact attribute '{$attr_name}'='{$attr_value}': {$count}";
            
            // Example 2: Iterate through retrieved elements and display their details
            echo "\n\nIterating through elements with exact attribute '{$attr_name}'='{$attr_value}':";
            for ($i = 0; $i < $count; $i++) {
                $targetElement = $elements->get($i);
                if ($targetElement !== false && $targetElement->is_exist()) {
                    echo "\nElement #{$i}:";
                    
                    $tag = $targetElement->get_tag();
                    if ($tag !== false) {
                        echo "\n  Tag: " . $tag;
                    } else {
                        echo "\n  Failed to get tag";
                    }
                    
                    $name = $targetElement->get_name();
                    if ($name !== false) {
                        echo "\n  Name: " . $name;
                    } else {
                        echo "\n  Failed to get name";
                    }
                    
                    $id = $targetElement->get_id();
                    if ($id !== false) {
                        echo "\n  ID: " . $id;
                    } else {
                        echo "\n  Failed to get ID";
                    }
                    
                    $attr = $targetElement->get_attribute($attr_name);
                    if ($attr !== false) {
                        echo "\n  Attribute '{$attr_name}': " . $attr;
                    } else {
                        echo "\n  Failed to get attribute '{$attr_name}'";
                    }
                    
                    $value = $targetElement->get_value();
                    if ($value !== false) {
                        echo "\n  Value: " . $value;
                    } else {
                        echo "\n  Failed to get value";
                    }
                } else {
                    echo "\nFailed to get element #{$i}";
                }
            }
        } else {
            echo "Failed to retrieve elements with exact attribute '{$attr_name}'='{$attr_value}'\n";
        }
        
        // Example 3: Get elements by partial attribute match
        $attr_name = "data-action";
        $attr_value = "click";
        $elements = DOM::$anchor->get_all_by_attribute($attr_name, $attr_value, false); // exactly = false for partial match
        
        // Check if the operation was successful
        if ($elements !== false) {
            echo "\n\nSuccessfully retrieved elements with partial attribute '{$attr_name}' containing '{$attr_value}'\n";
            
            // Get count of elements
            $count = $elements->get_count();
            echo "\n\nTotal elements found with partial attribute '{$attr_name}' containing '{$attr_value}': {$count}";
            
            // Example 4: Iterate through elements with partial attribute match
            echo "\n\nIterating through elements with partial attribute '{$attr_name}' containing '{$attr_value}':";
            for ($i = 0; $i < $count; $i++) {
                $targetElement = $elements->get($i);
                if ($targetElement !== false && $targetElement->is_exist()) {
                    echo "\nElement #{$i}:";
                    
                    $tag = $targetElement->get_tag();
                    if ($tag !== false) {
                        echo "\n  Tag: " . $tag;
                    } else {
                        echo "\n  Failed to get tag";
                    }
                    
                    $attr = $targetElement->get_attribute($attr_name);
                    if ($attr !== false) {
                        echo "\n  Full attribute '{$attr_name}': " . $attr;
                    } else {
                        echo "\n  Failed to get attribute '{$attr_name}'";
                    }
                } else {
                    echo "\nFailed to get element #{$i}";
                }
            }
        } else {
            echo "Failed to retrieve elements with partial attribute '{$attr_name}' containing '{$attr_value}'\n";
        }
        
        // Example 5: Get elements by attribute and filter by tag
        $attr_name = "data-type";
        $attr_value = "link";
        $elements = DOM::$anchor->get_all_by_attribute($attr_name, $attr_value, true);
        
        // Check if the operation was successful
        if ($elements !== false) {
            echo "\n\nSuccessfully retrieved elements with attribute '{$attr_name}'='{$attr_value}' for filtering\n";
            
            $linkElements = [];
            $otherElements = [];
            
            for ($i = 0; $i < $elements->get_count(); $i++) {
                $targetElement = $elements->get($i);
                if ($targetElement !== false && $targetElement->is_exist()) {
                    $tag = $targetElement->get_tag();
                    if ($tag !== false) {
                        if ($tag === "a") {
                            $linkElements[] = $targetElement;
                            
                            $attr = $targetElement->get_attribute($attr_name);
                            $innerText = $targetElement->get_inner_text();
                            
                            if ($attr !== false && $innerText !== false) {
                                echo "\nLink element found: {$attr_name}=" . $attr . ", text=" . $innerText;
                            } else {
                                echo "\nLink element found but failed to get attributes";
                            }
                        } else {
                            $otherElements[] = $targetElement;
                            
                            $attr = $targetElement->get_attribute($attr_name);
                            $innerText = $targetElement->get_inner_text();
                            
                            if ($attr !== false && $innerText !== false) {
                                echo "\nOther element found: {$attr_name}=" . $attr . ", text=" . $innerText;
                            } else {
                                echo "\nOther element found but failed to get attributes";
                            }
                        }
                    } else {
                        echo "\nFailed to get tag for element #{$i}";
                    }
                } else {
                    echo "\nFailed to get element #{$i}";
                }
            }
            
            echo "\n\nTotal link elements with attribute '{$attr_name}'='{$attr_value}': " . count($linkElements);
            echo "\nTotal other elements with attribute '{$attr_name}'='{$attr_value}': " . count($otherElements);
        } else {
            echo "Failed to retrieve elements with attribute '{$attr_name}'='{$attr_value}' for filtering\n";
        }
        
        // Example 6: Get elements by attribute and interact with them
        $attr_name = "data-status";
        $attr_value = "disabled";
        $elements = DOM::$anchor->get_all_by_attribute($attr_name, $attr_value, true);
        
        // Check if the operation was successful
        if ($elements !== false) {
            echo "\n\nSuccessfully retrieved elements with attribute '{$attr_name}'='{$attr_value}' for interaction\n";
            
            echo "\n\nInteracting with elements containing exact attribute '{$attr_name}'='{$attr_value}':";
            for ($i = 0; $i < $elements->get_count(); $i++) {
                $targetElement = $elements->get($i);
                if ($targetElement !== false && $targetElement->is_exist()) {
                    echo "\nElement #{$i}:";
                    
                    $tag = $targetElement->get_tag();
                    if ($tag !== false) {
                        echo "\n  Tag: " . $tag;
                    } else {
                        echo "\n  Failed to get tag";
                    }
                    
                    // Get element details
                    $attr = $targetElement->get_attribute($attr_name);
                    if ($attr !== false) {
                        echo "\n  Attribute '{$attr_name}': " . $attr;
                    } else {
                        echo "\n  Failed to get attribute '{$attr_name}'";
                    }
                    
                    $innerText = $targetElement->get_inner_text();
                    if ($innerText !== false) {
                        echo "\n  Inner text: " . $innerText;
                    } else {
                        echo "\n  Failed to get inner text";
                    }
                    
                    $name = $targetElement->get_name();
                    if ($name !== false) {
                        echo "\n  Name: " . $name;
                    } else {
                        echo "\n  Failed to get name";
                    }
                    
                    $id = $targetElement->get_id();
                    if ($id !== false) {
                        echo "\n  ID: " . $id;
                    } else {
                        echo "\n  Failed to get ID";
                    }
                } else {
                    echo "\nFailed to get element #{$i}";
                }
            }
        } else {
            echo "Failed to retrieve elements with attribute '{$attr_name}'='{$attr_value}' for interaction\n";
        }
        
        // Example 7: Get elements by attribute in a specific frame (frame=0)
        $attr_name = "data-frame";
        $attr_value = "main";
        $elements = DOM::$anchor->get_all_by_attribute($attr_name, $attr_value, true, "0");
        
        // Check if frame exists first
        $frameExists = DOM::$frame->is_exist_by_number(0);
        
        if ($frameExists) {
            echo "\n\nFrame 0 exists\n";
            
            // Check if the operation was successful
            if ($elements !== false) {
                echo "Successfully retrieved elements with attribute '{$attr_name}'='{$attr_value}' in frame 0\n";
                
                // Get count of elements in frame
                $count = $elements->get_count();
                echo "\n\nTotal elements found with attribute '{$attr_name}'='{$attr_value}' in frame 0: {$count}";
            } else {
                echo "Failed to retrieve elements with attribute '{$attr_name}'='{$attr_value}' in frame 0\n";
            }
        } else {
            echo "\n\nFrame 0 does not exist\n";
        }
        
        // Example 8: Get elements by custom data attribute
        $attr_name = "data-category";
        $attr_value = "seo";
        $elements = DOM::$anchor->get_all_by_attribute($attr_name, $attr_value, true);
        
        // Check if the operation was successful
        if ($elements !== false) {
            echo "\n\nSuccessfully retrieved elements with custom data attribute '{$attr_name}'='{$attr_value}'\n";
            
            // Get count of elements
            $count = $elements->get_count();
            echo "\n\nTotal elements found with custom data attribute '{$attr_name}'='{$attr_value}': {$count}";
        } else {
            echo "Failed to retrieve elements with custom data attribute '{$attr_name}'='{$attr_value}'\n";
        }
        
        // Example 9: Get elements by aria attribute
        $attr_name = "alt";
        $attr_value = "Ссылка mouseover 1";
        $elements = DOM::$anchor->get_all_by_attribute($attr_name, $attr_value, true);
        
        // Check if the operation was successful
        if ($elements !== false) {
            echo "\n\nSuccessfully retrieved elements with attribute '{$attr_name}'='{$attr_value}'\n";
            
            echo "\n\nChecking attributes of elements with attribute '{$attr_name}'='{$attr_value}':";
            for ($i = 0; $i < $elements->get_count(); $i++) {
                $targetElement = $elements->get($i);
                if ($targetElement !== false && $targetElement->is_exist()) {
                    echo "\nElement #{$i}:";
                    
                    $tag = $targetElement->get_tag();
                    if ($tag !== false) {
                        echo "\n  Tag: " . $tag;
                    } else {
                        echo "\n  Failed to get tag";
                    }
                    
                    $attr = $targetElement->get_attribute($attr_name);
                    if ($attr !== false) {
                        echo "\n  Attribute '{$attr_name}': " . $attr;
                    } else {
                        echo "\n  Failed to get attribute '{$attr_name}'";
                    }
                    
                    $class = $targetElement->get_attribute("class");
                    if ($class !== false) {
                        echo "\n  Class: " . $class;
                    } else {
                        echo "\n  Failed to get class";
                    }
                    
                    $title = $targetElement->get_attribute("title");
                    if ($title !== false) {
                        echo "\n  Title: " . $title;
                    } else {
                        echo "\n  Failed to get title";
                    }
                } else {
                    echo "\nFailed to get element #{$i}";
                }
            }
        } else {
            echo "Failed to retrieve elements with attribute '{$attr_name}'='{$attr_value}'\n";
        }
        
        // Example 10: Case sensitivity comparison
        $attr_name = "name";
        $attr_value = "MOUSEOVER1";
        $elementsExact = DOM::$anchor->get_all_by_attribute($attr_name, $attr_value, true); // Case-sensitive exact match
        $elementsPartial = DOM::$anchor->get_all_by_attribute($attr_name, $attr_value, false); // Case-insensitive partial match
        
        // Check if the operations were successful
        if ($elementsExact !== false && $elementsPartial !== false) {
            echo "\n\nCase sensitivity comparison for attribute '{$attr_name}'='{$attr_value}':";
            echo "\nExact match (case-sensitive): " . $elementsExact->get_count() . " elements";
            echo "\nPartial match (case-insensitive): " . $elementsPartial->get_count() . " elements";
        } else {
            echo "Failed to retrieve elements for case sensitivity comparison\n";
        }
    } else {
        echo "Failed to wait for page to load\n";
    }
} else {
    echo "Failed to navigate to anchor.html\n";
}

// Quit the application
WINDOW::$app->quit();
?>