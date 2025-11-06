<?php

// Scenario: Get the Y coordinate of where an image appears within another image

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Path to the main image (where we're searching)
$mainImagePath = "images/main_screenshot.png";

// Path to the sub-image (what we're looking for)
$subImagePath = "images/logo_to_find.png";

// Make sure both image files exist
if (file_exists($mainImagePath) && file_exists($subImagePath)) {
    echo "Both image files found\n";
    echo "Main image: " . $mainImagePath . "\n";
    echo "Sub-image to find: " . $subImagePath . "\n";
    
    // Get the Y coordinate of where the sub-image appears in the main image
    // Using default similarity coefficient (0.95)
    $yCoord = DOM::$image->get_y_of_image($mainImagePath, $subImagePath);
    
    if ($yCoord >= 0) {
        echo "Sub-image found at Y coordinate: " . $yCoord . "\n";
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