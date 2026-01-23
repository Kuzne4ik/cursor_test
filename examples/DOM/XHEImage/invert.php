<?php
// Scenario: Invert the colors of an image
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Path to the source image
$sourceImagePath = "images/original_image.png";

// Path for the resulting inverted image
$invertedImagePath = "images/inverted_image.png";

// Make sure the source image file exists
if (file_exists($sourceImagePath)) {
    echo "Source image found at: " . $sourceImagePath . "\n";
    
    // Invert the colors of the image
    echo "Inverting image colors...\n";
    $result = DOM::$image->invert($sourceImagePath, $invertedImagePath);
    
    if ($result) {
        echo "Successfully inverted image colors\n";
        echo "Inverted image saved to: " . $invertedImagePath . "\n";
        
        // Verify the new image was created
        if (file_exists($invertedImagePath)) {
            echo "Inverted image file exists and has been saved\n";
            
            // Get file size of the new image
            $fileSize = filesize($invertedImagePath);
            echo "Inverted image file size: " . $fileSize . " bytes\n";
        } else {
            echo "Warning: Inverted image file was not created\n";
        }
    } else {
        echo "Failed to invert image colors\n";
    }

} else {
    echo "Source image file not found at: " . $sourceImagePath . "\n";
    
    // For demonstration purposes
    echo "For this example to work, you would need an image file at: " . $sourceImagePath . "\n";
}

// Остановить работу
WINDOW::$app->quit();