<?php
// Scenario: Examples of using get_all_by_inner_text function to retrieve multiple DOM elements by their inner text
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
        
        echo "\n\n=== Examples of using get_all_by_inner_text function ===\n\n";
        
        // Example 1: Get anchors by exact inner text match
        $inner_text = "Блог";
        $anchors = DOM::$anchor->get_all_by_inner_text($inner_text, true);
        
        // Check if the operation was successful
        if ($anchors->get_count() > 0) {
            echo "Successfully retrieved anchors with exact inner text '{$inner_text}'\n";
            
            // Get count of anchors
            $count = $anchors->get_count();
            echo "\n\nTotal anchors found with exact inner text '{$inner_text}': {$count}";
            
            // Example 2: Iterate through retrieved anchors and display their details
            echo "\n\nIterating through anchors with exact inner text '{$inner_text}':";
            for ($k = 0; $k < $count; $k++) {
                $targetAnchor = $anchors->get($k);
                if ($targetAnchor !== false && $targetAnchor->is_exist()) {
                    echo "\nanchor #{$k}:";
                    
                    $name = $targetAnchor->get_name();
                    if ($name) {
                        echo "\n  Name: " . $name;
                    } else {
                        echo "\n  Failed to get name";
                    }
                    
                    $id = $targetAnchor->get_id();
                    if ($id) {
                        echo "\n  ID: " . $id;
                    } else {
                        echo "\n  Failed to get ID";
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
            echo "Failed to retrieve anchors with exact inner text '{$inner_text}'\n";
        }
        
        // Example 3: Get anchors by partial inner text match
        $inner_text = "onclick";
        $anchors = DOM::$anchor->get_all_by_inner_text($inner_text, false); // exactly = false for partial match
        
        // Check if the operation was successful
        if ($anchors->get_count() > 0) {
            echo "\n\nSuccessfully retrieved anchors with partial inner text '{$inner_text}'\n";
            
            // Get count of anchors
            $count = $anchors->get_count();
            echo "\n\nTotal anchors found with partial inner text '{$inner_text}': {$count}";
            
            // Example 4: Iterate through anchors with partial text match
            echo "\n\nIterating through anchors with partial inner text '{$inner_text}':";
            for ($k = 0; $k < $count; $k++) {
                $targetAnchor = $anchors->get($k);
                if ($targetAnchor !== false && $targetAnchor->is_exist()) {
                    echo "\nanchor #{$k}:";
                    
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
            echo "Failed to retrieve anchors with partial inner text '{$inner_text}'\n";
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