<?php
// Scenario: Examples of using get_all_by_alt function to retrieve multiple DOM elements by their alt attribute
// Path to init.php file for connecting to XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
$navigateResult = WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Check if navigation was successful
if ($navigateResult) {
    echo "Successfully navigated to image.html\n";
    
    // Wait for the page to load
    $waitResult = WEB::$browser->wait_for();
    
    if ($waitResult) {
        echo "Page loaded successfully\n";
        
        echo "\n\n=== Examples of using get_all_by_alt function ===\n\n";
        
        // Example 1: Get elements by exact alt match
        $alt = "screenshot";
        $elements = DOM::$image->get_all_by_alt($alt, true);
        
        // Check if the operation was successful
        if ($elements->get_count() > 0) {
            echo "Successfully retrieved elements with exact alt '{$alt}'\n";
            
            // Get count of elements
            $count = $elements->get_count();
            echo "\n\nTotal elements found with exact alt '{$alt}': {$count}";
            
            // Example 2: Iterate through retrieved elements and display their details
            echo "\n\nIterating through elements with exact alt '{$alt}':";
            for ($k = 0; $k < $count; $k++) {
                $targetElement = $elements->get($k);
                if ($targetElement !== false && $targetElement->is_exist()) {
                    echo "\nElement #{$k}:";
                    
                    $name = $targetElement->get_name();
                    if ($name) {
                        echo "\n  Name: " . $name;
                    } else {
                        echo "\n  Failed to get name";
                    }
                    
                    $id = $targetElement->get_id();
                    if ($id) {
                        echo "\n  ID: " . $id;
                    } else {
                        echo "\n  Failed to get ID";
                    }
                    
                    $src = $targetElement->get_src();
                    if ($src) {
                        echo "\n  Src: " . $src;
                    } else {
                        echo "\n  Failed to get src";
                    }
                } else {
                    echo "\nFailed to get element #{$k}";
                }
            }
        } else {
            echo "Failed to retrieve elements with exact alt '{$alt}'\n";
        }
        
        // Example 3: Get elements by partial alt match
        $alt = "screenshot";
        $elements = DOM::$image->get_all_by_alt($alt, false); // exactly = false for partial match
        
        // Check if the operation was successful
        if ($elements->get_count() > 0) {
            echo "\n\nSuccessfully retrieved elements with partial alt '{$alt}'\n";
            
            // Get count of elements
            $count = $elements->get_count();
            echo "\n\nTotal elements found with partial alt '{$alt}': {$count}";
            
            // Example 4: Iterate through elements with partial alt match
            echo "\n\nIterating through elements with partial alt '{$alt}':";
            for ($k = 0; $k < $count; $k++) {
                $targetElement = $elements->get($k);
                if ($targetElement !== false && $targetElement->is_exist()) {
                    echo "\nElement #{$k}:";
                    
                    $tag = $targetElement->get_tag();
                    if ($tag !== false) {
                        echo "\n  Tag: " . $tag;
                    } else {
                        echo "\n  Failed to get tag";
                    }
                    
                    $altAttr = $targetElement->get_alt();
                    if ($altAttr !== false) {
                        echo "\n  Full alt: " . $altAttr;
                    } else {
                        echo "\n  Failed to get alt attribute";
                    }
                } else {
                    echo "\nFailed to get element #{$k}";
                }
            }
        } else {
            echo "Failed to retrieve elements with partial alt '{$alt}'\n";
        }
        
        // Example 5: Get elements by alt and filter by tag
        $alt = "captcha";
        $elements = DOM::$image->get_all_by_alt($alt, true);
        
        // Check if the operation was successful
        if ($elements->get_count() > 0) {
            echo "\n\nSuccessfully retrieved elements with alt '{$alt}' for filtering\n";
            
            $imgElements = [];
            $inputElements = [];
            
            for ($k = 0; $k < $elements->get_count(); $k++) {
                $targetElement = $elements->get($k);
                if ($targetElement !== false && $targetElement->is_exist()) {
                    $imgElements[] = $targetElement;

                    $altAttr = $targetElement->get_alt();
                    $src = $targetElement->get_src();

                    if ($altAttr !== false && $src !== false) {
                        echo "\nImg element found: alt=" . $altAttr . ", src=" . $src;
                    } else {
                        echo "\nImg element found but failed to get attributes";
                    }
                }
                 else {
                    echo "\nFailed to get element #{$k}";
                }
            }
            
            echo "\n\nTotal img elements with alt '{$alt}': " . count($imgElements);
            echo "\nTotal input elements with alt '{$alt}': " . count($inputElements);
        } else {
            echo "Failed to retrieve elements with alt '{$alt}' for filtering\n";
        }
        
        // Example 6: Get elements by alt and interact with them
        $alt = "рисунок 1";
        $elements = DOM::$image->get_all_by_alt($alt, true);
        
        // Check if the operation was successful
        if ($elements->get_count() > 0) {
            echo "\n\nSuccessfully retrieved elements with alt '{$alt}' for interaction\n";
            
            echo "\n\nInteracting with elements containing exact alt '{$alt}':";
            for ($k = 0; $k < $elements->get_count(); $k++) {
                $targetElement = $elements->get($k);
                if ($targetElement !== false && $targetElement->is_exist()) {
                    echo "\nElement #{$k}:";
                    
                    $tag = $targetElement->get_tag();
                    if ($tag !== false) {
                        echo "\n  Tag: " . $tag;
                    } else {
                        echo "\n  Failed to get tag";
                    }
                    
                    // If it's an image, get its details
                    if ($tag === "img") {
                        $altAttr = $targetElement->get_alt();
                        $src = $targetElement->get_src();
                        $width = $targetElement->get_width();
                        $height = $targetElement->get_height();
                        
                        if ($altAttr !== false) {
                            echo "\n  Image alt: " . $altAttr;
                        } else {
                            echo "\n  Failed to get image alt";
                        }
                        
                        if ($src !== false) {
                            echo "\n  Image src: " . $src;
                        } else {
                            echo "\n  Failed to get image src";
                        }
                        
                        if ($width !== false) {
                            echo "\n  Image width: " . $width;
                        } else {
                            echo "\n  Failed to get image width";
                        }
                        
                        if ($height !== false) {
                            echo "\n  Image height: " . $height;
                        } else {
                            echo "\n  Failed to get image height";
                        }
                    }
                    
                    // If it's an input, get its details
                    if ($tag === "input") {
                        $altAttr = $targetElement->get_alt();
                        $type = $targetElement->get_attribute("type");
                        $value = $targetElement->get_value();
                        $name = $targetElement->get_name();
                        
                        if ($altAttr !== false) {
                            echo "\n  Input alt: " . $altAttr;
                        } else {
                            echo "\n  Failed to get input alt";
                        }
                        
                        if ($type !== false) {
                            echo "\n  Input type: " . $type;
                        } else {
                            echo "\n  Failed to get input type";
                        }
                        
                        if ($value !== false) {
                            echo "\n  Input value: " . $value;
                        } else {
                            echo "\n  Failed to get input value";
                        }
                        
                        if ($name !== false) {
                            echo "\n  Input name: " . $name;
                        } else {
                            echo "\n  Failed to get input name";
                        }
                    }
                } else {
                    echo "\nFailed to get element #{$k}";
                }
            }
        } else {
            echo "Failed to retrieve elements with alt '{$alt}' for interaction\n";
        }
        
        // Example 7: Get elements by alt in a specific frame (frame=0)
        $alt = "screenshot";
        $elements = DOM::$image->get_all_by_alt($alt, true, "0");
        
        // Check if frame exists first
        $frameExists = DOM::$frame->is_exist_by_number(0);
        
        if ($frameExists) {
            echo "\n\nFrame 0 exists\n";
            
            // Check if the operation was successful
            if ($elements !== false) {
                echo "Successfully retrieved elements with alt '{$alt}' in frame 0\n";
                
                // Get count of elements in frame
                $count = $elements->get_count();
                echo "\n\nTotal elements found with alt '{$alt}' in frame 0: {$count}";
            } else {
                echo "Failed to retrieve elements with alt '{$alt}' in frame 0\n";
            }
        } else {
            echo "\n\nFrame 0 does not exist\n";
        }
        
        // Example 8: Get elements by alt containing special characters
        $alt = "рисунок";
        $elements = DOM::$image->get_all_by_alt($alt, false);
        
        // Check if the operation was successful
        if ($elements !== false) {
            echo "\n\nSuccessfully retrieved elements with alt containing '{$alt}'\n";
            
            // Get count of elements
            $count = $elements->get_count();
            echo "\n\nTotal elements found with alt containing '{$alt}': {$count}";
        } else {
            echo "Failed to retrieve elements with alt containing '{$alt}'\n";
        }
    } else {
        echo "Failed to wait for page to load\n";
    }
} else {
    echo "Failed to navigate to image.html\n";
}

// Quit the application
WINDOW::$app->quit();
?>