<?php
// Scenario: Determine the rotation angle of an image. This function analyzes the image to detect if it has been rotated and returns the angle of rotation, which is useful for correcting image orientation.

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
$sourceImage = "rotated_image.png";
if (file_exists($sourceImage)) {
    // Get the rotation angle of the image
    echo "Detecting rotation angle of image: $sourceImage\n";

    $angle = DOM::$image->get_rotated_angle($sourceImage);

    if ($angle !== -1) {
        echo "Image rotation angle detected: $angle degrees\n";
    } else {
        echo "Failed to detect image rotation angle\n";
    }
}
else {
    echo "Source image does not exist: $sourceImage\n";
}

// Остановить работу
WINDOW::$app->quit();
?>