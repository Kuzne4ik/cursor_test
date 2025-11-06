<?php
// Scenario: Extract the Machine-Readable Zone (MRZ) from an image containing an ID card, passport, or other travel document. The MRZ is the machine-readable text usually found at the bottom of such documents.

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
$sourceImage = "passport_sample.png";
if (file_exists($sourceImage)) {
    // Extract MRZ from the image
    $outputPath = "$outputDir/mrz_image.png";
    echo "Extracting MRZ from image: $sourceImage\n";

    $result = DOM::$image->get_mrz_image($sourceImage, $outputPath);

    if ($result) {
        echo "MRZ extracted successfully and saved to: $outputPath\n";

        // Check if the file was actually created
        if (file_exists($outputPath)) {
            echo "File size: " . filesize($outputPath) . " bytes\n";

            // Try to recognize the MRZ text
            echo "\nAttempting to recognize MRZ text...\n";
            $mrzText = DOM::$image->recognize_captcha($outputPath, false);
            if ($mrzText) {
                echo "Recognized MRZ text:\n$mrzText\n";
            } else {
                echo "Failed to recognize MRZ text\n";
            }
        } else {
            echo "Warning: MRZ image file was not created despite success return value\n";
        }
    } else {
        echo "Failed to extract MRZ from the image\n";
    }

}
else {
    echo "Source image does not exist: $sourceImage\n";
}
// Остановить работу
WINDOW::$app->quit();
?>