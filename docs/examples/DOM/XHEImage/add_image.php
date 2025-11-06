<?php

// Scenario: Add one image to another (combine images side by side)

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Path to the source image (base image)
$sourceImagePath = "images/logo.png";

// Path to the image to add
$imageToAddPath = "images/icon.png";

// Make sure both source image files exist
if (file_exists($sourceImagePath) && file_exists($imageToAddPath)) {
    echo "Both source images found\n";
    echo "Base image: " . $sourceImagePath . "\n";
    echo "Image to add: " . $imageToAddPath . "\n";
    
    // Example 1: Add the image to the right of the base image
    echo "Adding image to the right of the base image...\n";
    $result1 = DOM::$image->add_image($sourceImagePath, $imageToAddPath, "right");
    
    if ($result1) {
        echo "Successfully combined images (right side)\n";
        echo "Result saved to in source image file: " . $sourceImagePath . "\n";
    } else {
        echo "Failed to combine images (right side)\n";
    }
    
    // Example 2: Add the image to the left of the base image
    echo "\nAdding image to the left of the base image...\n";
    $result2 = DOM::$image->add_image($sourceImagePath, $imageToAddPath, "left");
    
    if ($result2) {
        echo "Successfully combined images (left side)\n";
        echo "Result saved to in source image file: " . $sourceImagePath . "\n";
    } else {
        echo "Failed to combine images (left side)\n";
    }
    
    // Example 3: Add the image to the bottom of the base image
    echo "\nAdding image to the bottom of the base image...\n";
    $result3 = DOM::$image->add_image($sourceImagePath, $imageToAddPath, "bottom");
    
    if ($result3) {
        echo "Successfully combined images (bottom)\n";
        echo "Result saved to in source image file: " . $sourceImagePath . "\n";
    } else {
        echo "Failed to combine images (bottom)\n";
    }
    
    // Example 4: Add the image to the top of the base image
    echo "\nAdding image to the top of the base image...\n";
    $result4 = DOM::$image->add_image($sourceImagePath, $imageToAddPath, "up");
    
    if ($result4) {
        echo "Successfully combined images (top)\n";
        echo "Result saved to in source image file: " . $sourceImagePath . "\n";
    } else {
        echo "Failed to combine images (top)\n";
    }
} else {
    echo "One or both source image files not found\n";
    
    // For demonstration purposes
    echo "For this example to work, you would need:\n";
    echo "- A base image file at: " . $sourceImagePath . "\n";
    echo "- An image to add at: " . $imageToAddPath . "\n";
}

// Quit the application
WINDOW::$app->quit();