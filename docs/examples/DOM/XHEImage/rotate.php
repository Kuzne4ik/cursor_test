<?php
// Scenario: Rotate an image by a specified angle
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Path to the source image
$sourceImagePath = "images/original_image.png";

// Make sure the source image file exists
if (file_exists($sourceImagePath)) {
    echo "Source image found at: " . $sourceImagePath . "\n";
    
    // Example 1: Rotate image 90 degrees clockwise
    $rotatedImagePath1 = "images/rotated_90_degrees.png";
    $angle1 = 90;  // Rotation angle in degrees
    
    echo "Rotating image 90 degrees clockwise...\n";
    $result1 = DOM::$image->rotate($sourceImagePath, $rotatedImagePath1, $angle1);
    
    if ($result1) {
        echo "Successfully rotated image 90 degrees\n";
        echo "Rotated image saved to: " . $rotatedImagePath1 . "\n";
        
        // Verify the new image was created
        if (file_exists($rotatedImagePath1)) {
            $fileSize1 = filesize($rotatedImagePath1);
            echo "Rotated image file size: " . $fileSize1 . " bytes\n";
        } else {
            echo "Warning: Rotated image file was not created\n";
        }
    } else {
        echo "Failed to rotate image 90 degrees\n";
    }

} else {
    echo "Source image file not found at: " . $sourceImagePath . "\n";
    
    // For demonstration purposes
    echo "For this example to work, you would need an image file at: " . $sourceImagePath . "\n";
}

// Остановить работу
WINDOW::$app->quit();