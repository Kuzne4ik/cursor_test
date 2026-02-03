<?php
// Scenario: Extract QR code region from an image and save it as a separate file
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Path to the source image containing QR code
$sourceImagePath = "images/image_with_qr.png";

// Path for the resulting QR code image
$qrCodePath = "images/extracted_qr.png";

// Make sure the source image file exists
if (file_exists($sourceImagePath)) {
    echo "Source image found at: " . $sourceImagePath . "\n";
    
    // Extract QR code region from the image
    echo "Extracting QR code region from the image...\n";
    $result = DOM::$image->get_qr_code($sourceImagePath, $qrCodePath);
    
    if ($result) {
        echo "Successfully extracted QR code region\n";
        echo "QR code image saved to: " . $qrCodePath . "\n";
        
        // Verify the new image was created
        if (file_exists($qrCodePath)) {
            echo "QR code image file exists and has been saved\n";
            
            // Get file size of the new image
            $fileSize = filesize($qrCodePath);
            echo "QR code image file size: " . $fileSize . " bytes\n";
            
            // Now try to recognize the QR code from the extracted image
            echo "\nRecognizing QR code from extracted image...\n";
            $qrText = DOM::$image->recognize_qr_code($qrCodePath);
            
            if ($qrText) {
                echo "QR code recognized successfully: " . $qrText . "\n";
            } else {
                echo "Failed to recognize QR code from extracted image\n";
            }
        } else {
            echo "Warning: QR code image file was not created\n";
        }
    } else {
        echo "Failed to extract QR code region\n";
    }
} else {
    echo "Source image file not found at: " . $sourceImagePath . "\n";
    
    // For demonstration purposes
    echo "For this example to work, you would need an image file with a QR code at: " . $sourceImagePath . "\n";
}

// Остановить работу
WINDOW::$app->quit();