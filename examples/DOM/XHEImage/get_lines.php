<?php
// Scenario: Detect and extract lines from an image. This function identifies lines in an image and returns information about their positions, which is useful for document analysis and preprocessing.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Check if the source image exists
$sourceImage = "document_with_lines.png";
if (file_exists($sourceImage)) {

    // Get lines from the image
    echo "Detecting lines in image: $sourceImage\n";

    $lines = DOM::$image->get_lines($sourceImage);

    if ($lines !== false) {
        echo "Lines detected successfully\n";
        echo "Lines information:\n";

        var_export($lines);
    } else {
        echo "Failed to detect lines in the image\n";
    }
}
else {
    echo "Source image does not exist: $sourceImage\n";
}




// Остановить работу
WINDOW::$app->quit();
?>