<?php

// Scenario: Extract a portion of an image as a new image file

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Path to the source image
$sourceImagePath = "images/screenshot.png";

// Path for the new image (portion of the source)
$newImagePath = "images/portion.png";

// Make sure the source image file exists
if (file_exists($sourceImagePath)) {
    echo "Source image found at: " . $sourceImagePath . "\n";
    
    // Define the rectangular area to extract
    $x = 100;      // X coordinate of the top-left corner
    $y = 150;      // Y coordinate of the top-left corner
    $width = 300;   // Width of the rectangular area
    $height = 200;  // Height of the rectangular area
    
    echo "Extracting rectangular area:\n";
    echo "  X coordinate: " . $x . "\n";
    echo "  Y coordinate: " . $y . "\n";
    echo "  Width: " . $width . "\n";
    echo "  Height: " . $height . "\n";
    
    // Extract the specified portion of the image
    $result = DOM::$image->get_image($sourceImagePath, $newImagePath, $x, $y, $width, $height);
    
    if ($result) {
        echo "Successfully extracted image portion to: " . $newImagePath . "\n";
        
        // Verify the new image was created
        if (file_exists($newImagePath)) {
            echo "New image file exists and has been saved\n";
            
            // Get file size of the new image
            $fileSize = filesize($newImagePath);
            echo "New image file size: " . $fileSize . " bytes\n";
        } else {
            echo "Warning: New image file was not created\n";
        }
    } else {
        echo "Failed to extract image portion\n";
    }
 } else {
    echo "Source image file not found at: " . $sourceImagePath . "\n";
    
    // For demonstration purposes
    echo "For this example to work, you would need an image file at: " . $sourceImagePath . "\n";
}

// Остановить работу
WINDOW::$app->quit();