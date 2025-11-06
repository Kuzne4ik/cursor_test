<?php
// Scenario: Remove borders from an image. This function is useful for removing unwanted borders, frames, or edges from images to focus on the main content.

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
$sourceImage = "image_with_border.png";
if (!file_exists($sourceImage)) {
    echo "Source image does not exist: $sourceImage\n";
    echo "Creating a sample image with border for demonstration...\n";
    
    // Create a simple test image
    $testImagePath = "test_image.png";
    file_put_contents($testImagePath, "dummy image with border");
    
    // Save as image using XHE
    DOM::$image->save_as_gray($testImagePath, $sourceImage);
    echo "Created sample image: $sourceImage\n";
}

// Remove border from the image
$outputPath = "$outputDir/image_without_border.png";
echo "Removing border from image: $sourceImage\n";

$result = DOM::$image->unborder($sourceImage, $outputPath);

if ($result) {
    echo "Border removed successfully and saved to: $outputPath\n";
    
    // Check if the file was actually created
    if (file_exists($outputPath)) {
        echo "File size: " . filesize($outputPath) . " bytes\n";
        
        // Get image info to compare dimensions
        $sourceInfo = getimagesize($sourceImage);
        $outputInfo = getimagesize($outputPath);
        
        if ($sourceInfo && $outputInfo) {
            echo "Original dimensions: " . $sourceInfo[0] . "x" . $sourceInfo[1] . " pixels\n";
            echo "After border removal: " . $outputInfo[0] . "x" . $outputInfo[1] . " pixels\n";
        }
    } else {
        echo "Warning: Unbordered image file was not created despite success return value\n";
    }
} else {
    echo "Failed to remove border from the image\n";
}

// Example with different parameters
echo "\nRemoving border with different parameters...\n";
$outputPath2 = "$outputDir/image_without_border_custom.png";
$result2 = DOM::$image->unborder($sourceImage, $outputPath2, 20, 15, 20, 15);

if ($result2) {
    echo "Custom border removal successful, saved to: $outputPath2\n";
    
    if (file_exists($outputPath2)) {
        echo "File size: " . filesize($outputPath2) . " bytes\n";
        
        $outputInfo2 = getimagesize($outputPath2);
        if ($outputInfo2) {
            echo "Custom border removal dimensions: " . $outputInfo2[0] . "x" . $outputInfo2[1] . " pixels\n";
        }
    }
} else {
    echo "Failed to remove border with custom parameters\n";
}

// Example with a different source image
echo "\nCreating another example with a different source image...\n";
$sourceImage2 = "document_with_border.jpg";
if (!file_exists($sourceImage2)) {
    echo "Creating a sample document image with border...\n";
    $testImagePath2 = "test_document.jpg";
    file_put_contents($testImagePath2, "dummy document image with border");
    
    DOM::$image->save_as_gray($testImagePath2, $sourceImage2);
    echo "Created sample document image: $sourceImage2\n";
}

$outputPath3 = "$outputDir/document_without_border.png";
$result3 = DOM::$image->unborder($sourceImage2, $outputPath3);

if ($result3) {
    echo "Document border removed successfully, saved to: $outputPath3\n";
    
    if (file_exists($outputPath3)) {
        echo "File size: " . filesize($outputPath3) . " bytes\n";
        
        $sourceInfo2 = getimagesize($sourceImage2);
        $outputInfo3 = getimagesize($outputPath3);
        
        if ($sourceInfo2 && $outputInfo3) {
            echo "Original document dimensions: " . $sourceInfo2[0] . "x" . $sourceInfo2[1] . " pixels\n";
            echo "After border removal: " . $outputInfo3[0] . "x" . $outputInfo3[1] . " pixels\n";
        }
    }
} else {
    echo "Failed to remove border from document\n";
}

// Example with asymmetric border removal
echo "\nRemoving asymmetric border from image...\n";
$outputPath4 = "$outputDir/image_without_asymmetric_border.png";
$result4 = DOM::$image->unborder($sourceImage, $outputPath4, 10, 30, 5, 25);

if ($result4) {
    echo "Asymmetric border removal successful, saved to: $outputPath4\n";
} else {
    echo "Failed to remove asymmetric border\n";
}

// Остановить работу
WINDOW::$app->quit();
?>