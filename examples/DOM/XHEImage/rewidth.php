<?php
// Scenario: Change the width of an image while maintaining aspect ratio
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Path to the source image
$sourceImagePath = "images/original_image.png";

// Make sure the source image file exists
if (file_exists($sourceImagePath)) {
    echo "Source image found at: " . $sourceImagePath . "\n";
    
    // Example 1: Change width to 300 pixels (height will be adjusted automatically)
    $rewidthImagePath1 = "images/rewidth_300.png";
    $newWidth1 = 300;
    
    echo "Changing image width to " . $newWidth1 . " pixels...\n";
    $result1 = DOM::$image->rewidth($sourceImagePath, $rewidthImagePath1, $newWidth1);
    
    if ($result1) {
        echo "Successfully changed image width to " . $newWidth1 . " pixels\n";
        echo "Rewidthed image saved to: " . $rewidthImagePath1 . "\n";
        
        // Verify the new image was created
        if (file_exists($rewidthImagePath1)) {
            echo "Rewidthed image file exists and has been saved\n";
            
            // Get file size of the new image
            $fileSize1 = filesize($rewidthImagePath1);
            echo "Rewidthed image file size: " . $fileSize1 . " bytes\n";
        } else {
            echo "Warning: Rewidthed image file was not created\n";
        }
    } else {
        echo "Failed to change image width to " . $newWidth1 . " pixels\n";
    }

} else {
    echo "Source image file not found at: " . $sourceImagePath . "\n";
    
    // For demonstration purposes
    echo "For this example to work, you would need an image file at: " . $sourceImagePath . "\n";
}

// Остановить работу
WINDOW::$app->quit();