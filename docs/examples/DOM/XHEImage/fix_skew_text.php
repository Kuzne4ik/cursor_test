<?php
// Scenario: Fix skew in text images by detecting the text angle and rotating the image to make the text horizontal. This is useful for preprocessing scanned documents or images with rotated text before OCR processing.
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
$sourceImage = "skewed_text.png";
if (file_exists($sourceImage)) {
    // Fix skew in the text image
    $outputPath = "$outputDir/fixed_skew_text.png";
    echo "Fixing skew in text image: $sourceImage\n";

    $result = DOM::$image->fix_skew_text($sourceImage, $outputPath);

    if ($result) {
        echo "Text skew fixed successfully and saved to: $outputPath\n";

        // Check if the file was actually created
        if (file_exists($outputPath)) {
            echo "File size: " . filesize($outputPath) . " bytes\n";
        } else {
            echo "Warning: Fixed skew text image file was not created despite success return value\n";
        }
    } else {
        echo "Failed to fix text skew\n";
    }
}
else {
    echo "Source image does not exist: $sourceImage\n";
}



// Остановить работу
WINDOW::$app->quit();
?>