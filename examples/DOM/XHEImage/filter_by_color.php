<?php
// Scenario: Filter an image by color to isolate specific color ranges. This function is useful for extracting objects of a specific color from an image or for color-based segmentation.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
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
$sourceImage = "colorful_image.png";
if (!file_exists($sourceImage)) {
    echo "Source image does not exist: $sourceImage\n";
    echo "Creating a sample colorful image for demonstration...\n";
    
    // Create a simple test image
    $testImagePath = "test_image.png";
    file_put_contents($testImagePath, "dummy colorful image data");
    
    // Save as image using XHE
    DOM::$image->save_as_gray($testImagePath, $sourceImage);
    echo "Created sample colorful image: $sourceImage\n";
}

// Filter image by red color
$outputPath = "$outputDir/red_filtered.png";
echo "Filtering image by red color: $sourceImage\n";

$result = DOM::$image->filter_by_color($sourceImage, $outputPath, 255, 0, 0, 50);

if ($result) {
    echo "Image filtered by red color successfully and saved to: $outputPath\n";
    
    // Check if the file was actually created
    if (file_exists($outputPath)) {
        echo "File size: " . filesize($outputPath) . " bytes\n";
    } else {
        echo "Warning: Filtered image file was not created despite success return value\n";
    }
} else {
    echo "Failed to filter image by red color\n";
}

// Filter image by green color
echo "\nFiltering image by green color...\n";
$outputPath2 = "$outputDir/green_filtered.png";
$result2 = DOM::$image->filter_by_color($sourceImage, $outputPath2, 0, 255, 0, 50);

if ($result2) {
    echo "Image filtered by green color successfully, saved to: $outputPath2\n";
    
    if (file_exists($outputPath2)) {
        echo "File size: " . filesize($outputPath2) . " bytes\n";
    }
} else {
    echo "Failed to filter image by green color\n";
}

// Filter image by blue color
echo "\nFiltering image by blue color...\n";
$outputPath3 = "$outputDir/blue_filtered.png";
$result3 = DOM::$image->filter_by_color($sourceImage, $outputPath3, 0, 0, 255, 50);

if ($result3) {
    echo "Image filtered by blue color successfully, saved to: $outputPath3\n";
    
    if (file_exists($outputPath3)) {
        echo "File size: " . filesize($outputPath3) . " bytes\n";
    }
} else {
    echo "Failed to filter image by blue color\n";
}

// Example with a different source image
echo "\nCreating another example with a different source image...\n";
$sourceImage2 = "colorful_document.jpg";
if (!file_exists($sourceImage2)) {
    echo "Creating a sample colorful document image...\n";
    $testImagePath2 = "test_colorful_document.jpg";
    file_put_contents($testImagePath2, "dummy colorful document image data");
    
    DOM::$image->save_as_gray($testImagePath2, $sourceImage2);
    echo "Created sample colorful document image: $sourceImage2\n";
}

// Filter document by yellow color
$outputPath4 = "$outputDir/yellow_filtered.png";
echo "Filtering document by yellow color...\n";
$result4 = DOM::$image->filter_by_color($sourceImage2, $outputPath4, 255, 255, 0, 50);

if ($result4) {
    echo "Document filtered by yellow color successfully, saved to: $outputPath4\n";
    
    if (file_exists($outputPath4)) {
        echo "File size: " . filesize($outputPath4) . " bytes\n";
    }
} else {
    echo "Failed to filter document by yellow color\n";
}

// Example with custom color and tolerance
echo "\nFiltering with custom color and tolerance...\n";
$outputPath5 = "$outputDir/custom_color_filtered.png";
$result5 = DOM::$image->filter_by_color($sourceImage, $outputPath5, 128, 64, 192, 30);

if ($result5) {
    echo "Image filtered by custom color successfully, saved to: $outputPath5\n";
    
    if (file_exists($outputPath5)) {
        echo "File size: " . filesize($outputPath5) . " bytes\n";
    }
} else {
    echo "Failed to filter image by custom color\n";
}

// Example with grayscale image
echo "\nFiltering grayscale image...\n";
$sourceImage3 = "grayscale_image.png";
if (!file_exists($sourceImage3)) {
    echo "Creating a sample grayscale image...\n";
    $testImagePath3 = "test_grayscale.png";
    file_put_contents($testImagePath3, "dummy grayscale image data");
    
    DOM::$image->save_as_gray($testImagePath3, $sourceImage3);
    echo "Created sample grayscale image: $sourceImage3\n";
}

// Filter grayscale image by gray color
$outputPath6 = "$outputDir/gray_filtered.png";
echo "Filtering grayscale image by gray color...\n";
$result6 = DOM::$image->filter_by_color($sourceImage3, $outputPath6, 128, 128, 128, 30);

if ($result6) {
    echo "Grayscale image filtered successfully, saved to: $outputPath6\n";
    
    if (file_exists($outputPath6)) {
        echo "File size: " . filesize($outputPath6) . " bytes\n";
    }
} else {
    echo "Failed to filter grayscale image\n";
}

// Остановить работу
WINDOW::$app->quit();
?>