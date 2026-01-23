<?php
// Scenario: Resize an image with different scale types
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
    
    // Example 1: Resize image to 200% (double the size) using bilinear interpolation (default)
    $resizedImagePath1 = "images/resized_200_percent.png";
    $scale1 = 2.0;  // 200% of original size
    $scaleType1 = 1; // Bilinear interpolation
    
    echo "Resizing image to 200% using bilinear interpolation...\n";
    $result1 = DOM::$image->resize($sourceImagePath, $resizedImagePath1, $scale1, $scaleType1);
    
    if ($result1) {
        echo "Successfully resized image to 200%\n";
        echo "Resized image saved to: " . $resizedImagePath1 . "\n";
        
        // Verify the new image was created
        if (file_exists($resizedImagePath1)) {
            $fileSize1 = filesize($resizedImagePath1);
            echo "Resized image file size: " . $fileSize1 . " bytes\n";
        } else {
            echo "Warning: Resized image file was not created\n";
        }
    } else {
        echo "Failed to resize image to 200%\n";
    }

} else {
    echo "Source image file not found at: " . $sourceImagePath . "\n";
    
    // For demonstration purposes
    echo "For this example to work, you would need an image file at: " . $sourceImagePath . "\n";
}

// Остановить работу
WINDOW::$app->quit();