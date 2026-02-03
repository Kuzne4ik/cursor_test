<?php
// Scenario: Convert an image to grayscale
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Path to the source image
$sourceImagePath = "images/color_image.png";

// Path for the resulting grayscale image
$grayImagePath = "images/gray_image.png";

// Make sure the source image file exists
if (file_exists($sourceImagePath)) {
    echo "Source image found at: " . $sourceImagePath . "\n";
    
    // Convert the image to grayscale
    echo "Converting image to grayscale...\n";
    $result = DOM::$image->save_as_gray($sourceImagePath, $grayImagePath);
    
    if ($result) {
        echo "Successfully converted image to grayscale\n";
        echo "Grayscale image saved to: " . $grayImagePath . "\n";
        
        // Verify the new image was created
        if (file_exists($grayImagePath)) {
            echo "Grayscale image file exists and has been saved\n";
            
            // Get file size of the new image
            $fileSize = filesize($grayImagePath);
            echo "Grayscale image file size: " . $fileSize . " bytes\n";
        } else {
            echo "Warning: Grayscale image file was not created\n";
        }
    } else {
        echo "Failed to convert image to grayscale\n";
    }

} else {
    echo "Source image file not found at: " . $sourceImagePath . "\n";
    
    // For demonstration purposes
    echo "For this example to work, you would need an image file at: " . $sourceImagePath . "\n";
}

// Остановить работу
WINDOW::$app->quit();