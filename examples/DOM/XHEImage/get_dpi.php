<?php
// Scenario: Get the DPI (Dots Per Inch) of an image. This function retrieves the resolution information of an image, which is important for printing and quality assessment.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Check if the source image exists
$sourceImage = "sample_image.png";
if (file_exists($sourceImage)) {
    // Get the image width in DPI
    echo "Getting width of image: $sourceImage\n";

    $widthDpi = DOM::$image->get_dpi($sourceImage, true);

    if ($widthDpi != -1) {
        echo "Image width in DPI: $widthDpi\n";
    } else {
        echo "Failed to get DPI of the image\n";
    }

    // Get the image height in DPI
    echo "Getting height of image: $sourceImage\n";

    $heightDpi = DOM::$image->get_dpi($sourceImage, false, true);

    if ($heightDpi != -1) {
        echo "Image width in DPI: $heightDpi\n";
    } else {
        echo "Failed to get DPI of the image\n";
    }

    // Get the image width in pixels
    echo "Getting width of image: $sourceImage\n";

    $width = DOM::$image->get_dpi($sourceImage, true, true);

    if ($width != -1) {
        echo "Image width in pixels: $width\n";
    } else {
        echo "Failed to get pixels of the image\n";
    }

    // Get the image height in pixels
    echo "Getting height of image: $sourceImage\n";

    $height = DOM::$image->get_dpi($sourceImage, false);

    if ($height != -1) {
        echo "Image width in pixels: $height\n";
    } else {
        echo "Failed to get pixels of the image\n";
    }
}
else {
    echo "Source image does not exist: $sourceImage\n";
}
// Остановить работу
WINDOW::$app->quit();
?>