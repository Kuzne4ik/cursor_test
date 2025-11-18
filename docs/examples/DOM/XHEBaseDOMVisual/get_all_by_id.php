<?php
// Scenario: Examples of using get_all_by_id function to retrieve multiple DOM elements by their ID attribute

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
        
        echo "\n\n=== Examples of using get_all_by_id function ===\n\n";
        
        // Example 1: Get anchors by ID
        $id = "id_";
        $anchors = DOM::$anchor->get_all_by_id($id);
        
        // Check if the operation was successful
        if ($anchors->get_count() > 0) {
            echo "Successfully retrieved anchors with ID '{$id}'\n";
            
            // Get count of anchors
            $count = $anchors->get_count();
            echo "\n\nTotal anchors found with ID '{$id}': {$count}";
            
            // Example 2: Iterate through retrieved anchors and display their details
            echo "\n\nIterating through anchors with ID '{$id}':";
            for ($i = 0; $i < $count; $i++) {
                $targetAnchor = $anchors->get($i);
                if ($targetAnchor->is_exist()) {
                    echo "\nanchor #{$i}:";
                    
                    $idAttr = $targetAnchor->get_id();
                    if ($idAttr) {
                        echo "\n  ID: " . $idAttr;
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
                    echo "\nFailed to get anchor #{$i}";
                }
            }
        } else {
            echo "Failed to retrieve anchors with ID '{$id}'\n";
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