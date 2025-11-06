<?php
// Scenario: Remove lines from an image. This function is useful for removing unwanted lines, grids, or tables from images to isolate text or other content for better OCR processing.

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Create output directory if it doesn't exist
$outputDir = "output";
if (!is_dir($outputDir)) {
    mkdir($outputDir, 0777, true);
    echo "Created output directory: $outputDir\n";
}

// Check if the source image exists
$sourceImage = "document_with_lines.png";
if (!file_exists($sourceImage)) {
    echo "Source image does not exist: $sourceImage\n";
    echo "Creating a sample document with lines for demonstration...\n";
    
    // Create a simple test image
    $testImagePath = "test_image.png";
    file_put_contents($testImagePath, "dummy document with lines");
    
    // Save as image using XHE
    DOM::$image->save_as_gray($testImagePath, $sourceImage);
    echo "Created sample document with lines: $sourceImage\n";
}

// Remove lines from the image
$outputPath = "$outputDir/document_without_lines.png";
echo "Removing lines from image: $sourceImage\n";

$result = DOM::$image->remove_lines($sourceImage, $outputPath);

if ($result) {
    echo "Lines removed successfully and saved to: $outputPath\n";
    
    // Check if the file was actually created
    if (file_exists($outputPath)) {
        echo "File size: " . filesize($outputPath) . " bytes\n";
        
        // Example of using the processed image for OCR
        echo "\nPerforming OCR on the image with lines removed...\n";
        $ocrResult = DOM::$image->recognize_captcha($outputPath, false);
        if ($ocrResult) {
            echo "OCR result:\n$ocrResult\n";
        } else {
            echo "OCR processing failed\n";
        }
    } else {
        echo "Warning: Processed image file was not created despite success return value\n";
    }
} else {
    echo "Failed to remove lines from the image\n";
}

// Example with different parameters
echo "\nRemoving lines with different parameters...\n";
$outputPath2 = "$outputDir/document_without_lines_custom.png";
$result2 = DOM::$image->remove_lines($sourceImage, $outputPath2, 1, 10, 5);

if ($result2) {
    echo "Custom line removal successful, saved to: $outputPath2\n";
    
    // Perform OCR on the custom processed image
    echo "\nPerforming OCR on the custom processed image...\n";
    $ocrResult2 = DOM::$image->recognize_captcha($outputPath2, false);
    if ($ocrResult2) {
        echo "OCR result on custom processed image:\n$ocrResult2\n";
    } else {
        echo "OCR processing failed on custom processed image\n";
    }
} else {
    echo "Failed to remove lines with custom parameters\n";
}

// Example with a different source image
echo "\nCreating another example with a different source image...\n";
$sourceImage2 = "form_with_grid.jpg";
if (!file_exists($sourceImage2)) {
    echo "Creating a sample form with grid lines...\n";
    $testImagePath2 = "test_form.jpg";
    file_put_contents($testImagePath2, "dummy form with grid lines");
    
    DOM::$image->save_as_gray($testImagePath2, $sourceImage2);
    echo "Created sample form with grid: $sourceImage2\n";
}

$outputPath3 = "$outputDir/form_without_grid.png";
$result3 = DOM::$image->remove_lines($sourceImage2, $outputPath3);

if ($result3) {
    echo "Grid lines removed successfully from form, saved to: $outputPath3\n";
    
    // Perform OCR on the form with grid removed
    echo "\nPerforming OCR on the form with grid removed...\n";
    $ocrResult3 = DOM::$image->recognize_captcha($outputPath3, false);
    if ($ocrResult3) {
        echo "OCR result on form without grid:\n$ocrResult3\n";
    } else {
        echo "OCR processing failed on form without grid\n";
    }
} else {
    echo "Failed to remove grid lines from form\n";
}

// Example with horizontal lines only
echo "\nRemoving only horizontal lines...\n";
$outputPath4 = "$outputDir/document_without_horizontal_lines.png";
$result4 = DOM::$image->remove_lines($sourceImage, $outputPath4, 0, 10, 5);

if ($result4) {
    echo "Horizontal lines removed successfully, saved to: $outputPath4\n";
} else {
    echo "Failed to remove horizontal lines\n";
}

// Example with vertical lines only
echo "\nRemoving only vertical lines...\n";
$outputPath5 = "$outputDir/document_without_vertical_lines.png";
$result5 = DOM::$image->remove_lines($sourceImage, $outputPath5, 1, 10, 5);

if ($result5) {
    echo "Vertical lines removed successfully, saved to: $outputPath5\n";
} else {
    echo "Failed to remove vertical lines\n";
}

// Остановить работу
WINDOW::$app->quit();
?>