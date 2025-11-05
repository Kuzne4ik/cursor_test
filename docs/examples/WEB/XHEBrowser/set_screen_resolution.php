<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_screen_resolution function

// Set screen resolution for HD (1920x1080)
$width = 1920;
$height = 1080;
$pixelDepth = 24;

$result = WEB::$browser->set_screen_resolution($width, $height, $pixelDepth);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set screen resolution";
    echo "\nWidth: " . $width . "px";
    echo "\nHeight: " . $height . "px";
    echo "\nPixel Depth: " . $pixelDepth . "bpp";
} else {
    echo "\n\nFailed to set screen resolution";
}

// Остановить работу
WINDOW::$app->quit();
?>