<?php
// Scenario: Get the position (X and Y coordinates) of where an image appears within another image
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Path to the main image (where we're searching)
$mainImagePath = "images/main_screenshot.png";

// Path to the sub-image (what we're looking for)
$subImagePath = "images/logo_to_find.png";

// Make sure both image files exist
if (file_exists($mainImagePath) && file_exists($subImagePath)) {
    echo "Both image files found\n";
    echo "Main image: " . $mainImagePath . "\n";
    echo "Sub-image to find: " . $subImagePath . "\n";
    
    // Get the position of where the sub-image appears in the main image
    // Using default similarity coefficient (0.95)
    $position = DOM::$image->get_pos_of_image($mainImagePath, $subImagePath);
    
    if ($position->x >= 0 && $position->y >= 0) {
        echo "Sub-image found at position:\n";
        echo "X coordinate: " . $position->x . "\n";
        echo "Y coordinate: " . $position->y . "\n";
        
        // Use the position to click at that location
        SYSTEM::$mouse->click($position->x, $position->y);
        echo "Clicked at the found position\n";
    } else {
        echo "Sub-image not found in the main image\n";
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