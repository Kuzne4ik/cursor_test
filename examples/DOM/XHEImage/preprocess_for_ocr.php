<?php
// Scenario: Preprocess an image to improve OCR (Optical Character Recognition) accuracy. This function applies various image enhancement techniques to make text more readable for OCR engines.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Create output directory if it doesn't exist
$outputDir = "output";
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0777, true);
    echo "Created output directory: $outputDir\n";
}

// Check if the source image exists
$sourceImage = "document_for_ocr.png";
if (file_exists($sourceImage)) {
    // Preprocess the image for OCR
    $outputPath = "$outputDir/preprocessed_for_ocr.png";
    echo "Preprocessing image for OCR: $sourceImage\n";

    $result = DOM::$image->preprocess_for_ocr($sourceImage, $outputPath);

    if ($result) {
        echo "Image preprocessed successfully for OCR and saved to: $outputPath\n";

        // Check if the file was actually created
        if (file_exists($outputPath)) {
            echo "File size: " . filesize($outputPath) . " bytes\n";

            // Example of using the preprocessed image for OCR
            echo "\nPerforming OCR on the preprocessed image...\n";
            $ocrResult = DOM::$image->recognize_captcha($outputPath, false);
            if ($ocrResult) {
                echo "OCR result:\n$ocrResult\n";
            } else {
                echo "OCR processing failed\n";
            }
        } else {
            echo "Warning: Preprocessed image file was not created despite success return value\n";
        }
    } else {
        echo "Failed to preprocess image for OCR\n";
    }

    // Example with different parameters
    echo "\nPreprocessing image for OCR with different parameters...\n";
    $outputPath2 = "$outputDir/preprocessed_for_ocr_custom.png";
    $result2 = DOM::$image->preprocess_for_ocr($sourceImage, $outputPath2, 1.5, 100, 50);

    if ($result2) {
        echo "Custom preprocessing successful, saved to: $outputPath2\n";

        // Perform OCR on the custom preprocessed image
        echo "\nPerforming OCR on the custom preprocessed image...\n";
        $ocrResult2 = DOM::$image->recognize_captcha($outputPath2, false);
        if ($ocrResult2) {
            echo "OCR result on custom preprocessed image:\n$ocrResult2\n";
        } else {
            echo "OCR processing failed on custom preprocessed image\n";
        }
    } else {
        echo "Failed to preprocess image for OCR with custom parameters\n";
    }
}
else {
    echo "Source image does not exist: $sourceImage\n";
}
// Остановить работу
WINDOW::$app->quit();
?>