<?php
// Scenario: Examples of using get_all_by_href function to retrieve multiple DOM elements by their href attribute
// Path to init.php file for connecting to XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
$navigateResult = WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Check if navigation was successful
if ($navigateResult) {
    echo "Successfully navigated to anchor.html\n";
    
    // Wait for the page to load
    $waitResult = WEB::$browser->wait_for();
    
    if ($waitResult) {
        echo "Page loaded successfully\n";
        
        echo "\n\n=== Examples of using get_all_by_href function ===\n\n";
        
        // Example 1: Get anchors by exact href match
        $href = "https://example.com/mouseover1";
        $anchors = DOM::$anchor->get_all_by_href($href, true);
        
        // Check if the operation was successful
        if ($anchors) {
            echo "Successfully retrieved anchors with exact href '{$href}'\n";
            
            // Get count of anchors
            $count = $anchors->get_count();
            echo "\n\nTotal anchors found with exact href '{$href}': {$count}";
            
            // Example 2: Iterate through retrieved anchors and display their details
            echo "\n\nIterating through anchors with exact href '{$href}':";
            for ($k = 0; $k < $count; $k++) {
                $targetAnchor = $anchors->get($k);
                if ($targetAnchor !== false && $targetAnchor->is_exist()) {
                    echo "\nanchor #{$k}:";
                    
                    $id = $targetAnchor->get_id();
                    if ($id) {
                        echo "\n  ID: " . $id;
                    } else {
                        echo "\n  Failed to get ID";
                    }
                    
                    $hrefAttr = $targetAnchor->get_href();
                    if ($hrefAttr) {
                        echo "\n  Href: " . $hrefAttr;
                    } else {
                        echo "\n  Failed to get href";
                    }
                    
                    $innerText = $targetAnchor->get_inner_text();
                    if ($innerText) {
                        echo "\n  Inner text: " . $innerText;
                    } else {
                        echo "\n  Failed to get inner text";
                    }
                } else {
                    echo "\nFailed to get anchor #{$k}";
                }
            }
        } else {
            echo "Failed to retrieve anchors with exact href '{$href}'\n";
        }
        
        // Example 3: Get anchors by partial href match
        $href = "https://example.com/";
        $anchors = DOM::$anchor->get_all_by_href($href, false); // exactly = false for partial match
        
        // Check if the operation was successful
        if ($anchors->get_count() > 0) {
            echo "\n\nSuccessfully retrieved anchors with partial href '{$href}'\n";
            
            // Get count of anchors
            $count = $anchors->get_count();
            echo "\n\nTotal anchors found with partial href '{$href}': {$count}";
            
            // Example 4: Iterate through anchors with partial href match
            echo "\n\nIterating through anchors with partial href '{$href}':";
            for ($k = 0; $k < $count; $k++) {
                $targetAnchor = $anchors->get($k);
                if ($targetAnchor !== false && $targetAnchor->is_exist()) {
                    echo "\nanchor #{$k}:";
                    
                    $hrefAttr = $targetAnchor->get_href();
                    if ($hrefAttr) {
                        echo "\n  Full href: " . $hrefAttr;
                    } else {
                        echo "\n  Failed to get href";
                    }
                } else {
                    echo "\nFailed to get anchor #{$k}";
                }
            }
        } else {
            echo "Failed to retrieve anchors with partial href '{$href}'\n";
        }
        
        // Example 4: Get anchors by href in a specific frame (frame=0)
        $href = "https://example.com/frame";
        $anchors = DOM::$anchor->get_all_by_href($href, false, "0");
        
        // Check if frame exists first
        $frameExists = DOM::$frame->is_exist_by_number(0);
        
        if ($frameExists) {
            echo "\n\nFrame 0 exists\n";
            
            // Check if the operation was successful
            if ($anchors) {
                echo "Successfully retrieved anchors with href '{$href}' in frame 0\n";
                
                // Get count of anchors in frame
                $count = $anchors->get_count();
                echo "\n\nTotal anchors found with href '{$href}' in frame 0: {$count}";
            } else {
                echo "Failed to retrieve anchors with href '{$href}' in frame 0\n";
            }
        } else {
            echo "\n\nFrame 0 does not exist\n";
        }
        
    } else {
        echo "Failed to wait for page to load\n";
    }
} else {
    echo "Failed to navigate to anchor.html\n";
}

echo("\n");

// Quit the application
WINDOW::$app->quit();
?>