<?php
// Scenario: Get all positions where an image appears within another image
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Path to the main image (where we're searching)
$mainImagePath = "images/main_screenshot.png";

// Path to the sub-image (what we're looking for)
$subImagePath = "images/button_to_find.png";

// Make sure both image files exist
if (file_exists($mainImagePath) && file_exists($subImagePath)) {
    echo "Both image files found\n";
    echo "Main image: " . $mainImagePath . "\n";
    echo "Sub-image to find: " . $subImagePath . "\n";
    
    // Get all positions where the sub-image appears in the main image
    // Using default similarity coefficient (0.95)
    $positions = DOM::$image->get_all_pos_of_image($mainImagePath, $subImagePath);
    
    if (count($positions) > 0) {
        echo "Found " . count($positions) . " instances of the sub-image in the main image\n";
        
        // Loop through all found positions
        foreach ($positions as $index => $position) {
            echo "Instance " . ($index + 1) . ":\n";
            echo "  X coordinate: " . $position->x . "\n";
            echo "  Y coordinate: " . $position->y . "\n";
        }
    } else {
        echo "Sub-image not found in the main image\n";
    }
    
    // Try with a lower similarity coefficient (0.8) for more flexible matching
    $positions2 = DOM::$image->get_all_pos_of_image($mainImagePath, $subImagePath, 0.8);
    
    if (count($positions2) > 0) {
        echo "\nWith 0.8 similarity, found " . count($positions2) . " instances of the sub-image\n";
        
        // Loop through all found positions
        foreach ($positions2 as $index => $position) {
            echo "Instance " . ($index + 1) . ":\n";
            echo "  X coordinate: " . $position->x . "\n";
            echo "  Y coordinate: " . $position->y . "\n";
        }
    } else {
        echo "Sub-image not found even with lower similarity\n";
    }
} else {
    echo "One or both image files not found\n";
    
    // For demonstration purposes
    echo "For this example to work, you would need:\n";
    echo "- A main image file at: " . $mainImagePath . "\n";
    echo "- A sub-image file at: " . $subImagePath . "\n";
}

// Остановить работу
WINDOW::$app->quit();