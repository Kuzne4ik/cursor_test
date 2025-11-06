<?php

// Scenario: Apply blackhat transformation to an image

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Path to the source image
$sourceImagePath = "images/original_image.png";

// Path for the resulting blackhat image
$blackhatImagePath = "images/blackhat_image.png";

// Make sure the source image file exists
if (file_exists($sourceImagePath)) {
    echo "Source image found at: " . $sourceImagePath . "\n";
    
    // Apply blackhat transformation to the image
    echo "Applying blackhat transformation to the image...\n";
    $result = DOM::$image->save_as_blackhat($sourceImagePath, $blackhatImagePath);
    
    if ($result) {
        echo "Successfully applied blackhat transformation\n";
        echo "Blackhat image saved to: " . $blackhatImagePath . "\n";
        
        // Verify the new image was created
        if (file_exists($blackhatImagePath)) {
            echo "Blackhat image file exists and has been saved\n";
            
            // Get file size of the new image
            $fileSize = filesize($blackhatImagePath);
            echo "Blackhat image file size: " . $fileSize . " bytes\n";
        } else {
            echo "Warning: Blackhat image file was not created\n";
        }
    } else {
        echo "Failed to apply blackhat transformation\n";
    }
} else {
    echo "Source image file not found at: " . $sourceImagePath . "\n";
    
    // For demonstration purposes
    echo "For this example to work, you would need an image file at: " . $sourceImagePath . "\n";
}

// Остановить работу
WINDOW::$app->quit();