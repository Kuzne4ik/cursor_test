<?php
// Scenario: Examples of using get_all_by_inner_html function to retrieve multiple DOM elements by their inner HTML
// Path to init.php file for connecting to XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
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
        
        echo "\n\n=== Examples of using get_all_by_inner_html function ===\n\n";
        
        // Example 1: Get anchors by exact inner HTML match
        $inner_html = "Блог";
        $anchors = DOM::$anchor->get_all_by_inner_html($inner_html, true);
        
        // Check if the operation was successful
        if ($anchors->get_count() > 0) {
            echo "Successfully retrieved anchors with exact inner HTML '{$inner_html}'\n";
            
            // Get count of anchors
            $count = $anchors->get_count();
            echo "\n\nTotal anchors found with exact inner HTML '{$inner_html}': {$count}";
            
            // Example 2: Iterate through retrieved anchors and display their details
            echo "\n\nIterating through anchors with exact inner HTML '{$inner_html}':";
            for ($i = 0; $i < $count; $i++) {
                $targetAnchor = $anchors->get($i);
                if ($targetAnchor !== false && $targetAnchor->is_exist()) {
                    echo "\nanchor #{$i}:";
                    
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
                    
                    $innerHTML = $targetAnchor->get_inner_html();
                    if ($innerHTML) {
                        echo "\n  Inner HTML: " . $innerHTML;
                    } else {
                        echo "\n  Failed to get inner HTML";
                    }
                } else {
                    echo "\nFailed to get anchor #{$i}";
                }
            }
        } else {
            echo "Failed to retrieve anchors with exact inner HTML '{$inner_html}'\n";
        }
        
        // Example 3: Get anchors by partial inner HTML match
        $inner_html = "onclick";
        $anchors = DOM::$anchor->get_all_by_inner_html($inner_html, false); // exactly = false for partial match
        
        // Check if the operation was successful
        if ($anchors->get_count() > 0) {
            echo "\n\nSuccessfully retrieved anchors with partial inner HTML '{$inner_html}'\n";
            
            // Get count of anchors
            $count = $anchors->get_count();
            echo "\n\nTotal anchors found with partial inner HTML '{$inner_html}': {$count}";
            
            // Example 4: Iterate through anchors with partial HTML match
            echo "\n\nIterating through anchors with partial inner HTML '{$inner_html}':";
            for ($i = 0; $i < $count; $i++) {
                $targetAnchor = $anchors->get($i);
                if ($targetAnchor !== false && $targetAnchor->is_exist()) {
                    echo "\nanchor #{$i}:";
                    
                    $innerHTML = $targetAnchor->get_inner_html();
                    if ($innerHTML) {
                        echo "\n  Inner HTML: " . $innerHTML;
                    } else {
                        echo "\n  Failed to get inner HTML";
                    }
                } else {
                    echo "\nFailed to get anchor #{$i}";
                }
            }
        } else {
            echo "Failed to retrieve anchors with partial inner HTML '{$inner_html}'\n";
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