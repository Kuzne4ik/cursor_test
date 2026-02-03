<?php
// Scenario: Parse Machine-Readable Zone (MRZ) data from an image containing an ID card, passport, or other travel document. This function extracts structured information from the MRZ text.
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
$sourceImage = "passport_sample.png";
if (file_exists($sourceImage)) {
    // Parse MRZ from the image
    echo "Parsing MRZ from image: $sourceImage\n";

    $result = DOM::$image->parse_mrz($sourceImage);

    if ($result) {
        echo "MRZ parsed successfully:\n";
        var_export($result);

        // Save the parsed MRZ to a file
        $mrzFilePath = "$outputDir/mrz_data.txt";
        file_put_contents($mrzFilePath, $result);
        echo "MRZ data saved to: $mrzFilePath\n";
    } else {
        echo "Failed to parse MRZ from the image\n";
    }

    // Example with verbose output
    echo "\nParsing MRZ with verbose output...\n";
    $result2 = DOM::$image->parse_mrz($sourceImage, true);

    if ($result2) {
        echo "Verbose MRZ parsing result:\n";
        var_export($result2);

        // Save the verbose MRZ to a file
        $mrzFilePath2 = "$outputDir/mrz_data_verbose.txt";
        file_put_contents($mrzFilePath2, $result2);
        echo "Verbose MRZ data saved to: $mrzFilePath2\n";
    } else {
        echo "Failed to parse MRZ with verbose output\n";
    }
}
else {
    echo "Source image does not exist: $sourceImage\n";
}
// Остановить работу
WINDOW::$app->quit();
?>