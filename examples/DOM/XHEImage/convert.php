<?php
// Scenario: Convert an image from one format to another (e.g., PNG to JPEG, JPEG to BMP, etc.). This function allows changing the image format while preserving the visual content.
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
$sourceImage = "sample.png";
if (!file_exists($sourceImage)) {
    echo "Source image does not exist: $sourceImage\n";
    echo "Creating a sample PNG image for conversion...\n";
    
    // Create a simple test image
    $testImagePath = "test_image.png";
    file_put_contents($testImagePath, "dummy PNG image data for conversion");
    
    // Save as image using XHE
    DOM::$image->save_as_gray($testImagePath, $sourceImage);
    echo "Created sample PNG image: $sourceImage\n";
}

// Convert PNG to JPEG
$outputPath = "$outputDir/sample.jpg";
echo "Converting PNG to JPEG: $sourceImage -> $outputPath\n";

$result = DOM::$image->convert($sourceImage, $outputPath);

if ($result) {
    echo "Image converted successfully to JPEG format\n";
    
    // Check if the file was actually created
    if (file_exists($outputPath)) {
        echo "File size: " . filesize($outputPath) . " bytes\n";
        
        // Get image info
        $imageInfo = getimagesize($outputPath);
        if ($imageInfo) {
            echo "Image format: " . $imageInfo['mime'] . "\n";
            echo "Image dimensions: " . $imageInfo[0] . "x" . $imageInfo[1] . " pixels\n";
        }
    } else {
        echo "Warning: Converted image file was not created despite success return value\n";
    }
} else {
    echo "Failed to convert image to JPEG\n";
}

// Convert PNG to BMP
echo "\nConverting PNG to BMP...\n";
$outputPath2 = "$outputDir/sample.bmp";
$result2 = DOM::$image->convert($sourceImage, $outputPath2);

if ($result2) {
    echo "Image converted successfully to BMP format\n";
    
    if (file_exists($outputPath2)) {
        echo "File size: " . filesize($outputPath2) . " bytes\n";
        
        $imageInfo2 = getimagesize($outputPath2);
        if ($imageInfo2) {
            echo "Image format: " . $imageInfo2['mime'] . "\n";
            echo "Image dimensions: " . $imageInfo2[0] . "x" . $imageInfo2[1] . " pixels\n";
        }
    }
} else {
    echo "Failed to convert image to BMP\n";
}

// Convert PNG to GIF
echo "\nConverting PNG to GIF...\n";
$outputPath3 = "$outputDir/sample.gif";
$result3 = DOM::$image->convert($sourceImage, $outputPath3);

if ($result3) {
    echo "Image converted successfully to GIF format\n";
    
    if (file_exists($outputPath3)) {
        echo "File size: " . filesize($outputPath3) . " bytes\n";
        
        $imageInfo3 = getimagesize($outputPath3);
        if ($imageInfo3) {
            echo "Image format: " . $imageInfo3['mime'] . "\n";
            echo "Image dimensions: " . $imageInfo3[0] . "x" . $imageInfo3[1] . " pixels\n";
        }
    }
} else {
    echo "Failed to convert image to GIF\n";
}

// Example with a different source image
echo "\nCreating another example with a different source image...\n";
$sourceImage2 = "sample2.jpg";
if (!file_exists($sourceImage2)) {
    echo "Creating a sample JPEG image for conversion...\n";
    $testImagePath2 = "test_image2.jpg";
    file_put_contents($testImagePath2, "dummy JPEG image data for conversion");
    
    DOM::$image->save_as_gray($testImagePath2, $sourceImage2);
    echo "Created sample JPEG image: $sourceImage2\n";
}

// Convert JPEG to PNG
$outputPath4 = "$outputDir/sample2.png";
echo "Converting JPEG to PNG: $sourceImage2 -> $outputPath4\n";

$result4 = DOM::$image->convert($sourceImage2, $outputPath4);

if ($result4) {
    echo "Image converted successfully from JPEG to PNG format\n";
    
    if (file_exists($outputPath4)) {
        echo "File size: " . filesize($outputPath4) . " bytes\n";
        
        $imageInfo4 = getimagesize($outputPath4);
        if ($imageInfo4) {
            echo "Image format: " . $imageInfo4['mime'] . "\n";
            echo "Image dimensions: " . $imageInfo4[0] . "x" . $imageInfo4[1] . " pixels\n";
        }
    }
} else {
    echo "Failed to convert image from JPEG to PNG\n";
}

// Остановить работу
WINDOW::$app->quit();
?>