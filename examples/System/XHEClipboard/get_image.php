<?php
// Scenario: Check for image in clipboard and get image data

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<span >clipboard->" . basename (__FILE__) . "</span>\n";

// 1
echo "1. Check for image in clipboard: ";
echo SYSTEM::$clipboard->has_image() . "\n";

// 2
echo "2. Get image from clipboard (base64): ";
$image = SYSTEM::$clipboard->get_image();
if ($image) {
    echo "Image received, length: " . strlen($image) . " characters\n";
} else {
    echo "Image is missing\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
