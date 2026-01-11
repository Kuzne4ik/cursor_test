<?php
// Scenario: Remove noise from an image using Gaussian blur
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Path to the source image
$sourceImagePath = "images/noisy_image.png";

// Path for the resulting noise-removed image
$denoisedImagePath = "images/denoised_image.png";

// Make sure the source image file exists
if (file_exists($sourceImagePath)) {
    echo "Source image found at: " . $sourceImagePath . "\n";
    
    // Remove noise from the image using default kernel size (3)
    echo "Removing noise from image with default kernel size (3)...\n";
    $result = DOM::$image->remove_noise($sourceImagePath, $denoisedImagePath);
    
    if ($result) {
        echo "Successfully removed noise from image\n";
        echo "Denoised image saved to: " . $denoisedImagePath . "\n";
        
        // Verify the new image was created
        if (file_exists($denoisedImagePath)) {
            echo "Denoised image file exists and has been saved\n";
            
            // Get file size of the new image
            $fileSize = filesize($denoisedImagePath);
            echo "Denoised image file size: " . $fileSize . " bytes\n";
        } else {
            echo "Warning: Denoised image file was not created\n";
        }
    } else {
        echo "Failed to remove noise from image\n";
    }
    
    // Example 2: Remove noise with a larger kernel size (5)
    $denoisedImagePath2 = "images/denoised_image_kernel5.png";
    $kernelSize = 5;
    
    echo "\nRemoving noise from image with kernel size (" . $kernelSize . ")...\n";
    $result2 = DOM::$image->remove_noise($sourceImagePath, $denoisedImagePath2, $kernelSize);
    
    if ($result2) {
        echo "Successfully removed noise from image with larger kernel\n";
        echo "Denoised image (kernel " . $kernelSize . ") saved to: " . $denoisedImagePath2 . "\n";
    } else {
        echo "Failed to remove noise from image with larger kernel\n";
    }
    
    // Example 3: Remove noise from a different image
    $sourceImagePath2 = "images/photo_with_noise.jpg";
    $denoisedImagePath3 = "images/photo_denoised.jpg";
    
    if (file_exists($sourceImagePath2)) {
        echo "\nRemoving noise from second image...\n";
        $result3 = DOM::$image->remove_noise($sourceImagePath2, $denoisedImagePath3);
        
        if ($result3) {
            echo "Successfully removed noise from second image\n";
            echo "Second denoised image saved to: " . $denoisedImagePath3 . "\n";
        } else {
            echo "Failed to remove noise from second image\n";
        }
    } else {
        echo "\nSecond source image not found at: " . $sourceImagePath2 . "\n";
    }
} else {
    echo "Source image file not found at: " . $sourceImagePath . "\n";
    
    // For demonstration purposes
    echo "For this example to work, you would need an image file at: " . $sourceImagePath . "\n";
}

// Остановить работу
WINDOW::$app->quit();