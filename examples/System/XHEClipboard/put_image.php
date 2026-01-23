<?php
// Scenario: Put image to clipboard and verify it exists

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>clipboard->" . basename (__FILE__) . "</font>\n";

// Raw binary string of a 1x1 red pixel PNG
$redPixelPng = "\x89PNG\r\n\x1a\n" .
    "\x00\x00\x00\rIHDR\x00\x00\x00\x01\x00\x00\x00\x01\x08\x06\x00\x00\x00\x1f\x15\xc4\x89" .
    "\x00\x00\x00\nIDATx\x9cc\x00\x01\x00\x00\x05\x00\x01\r\n-\xb4\x00\x00\x00\x00IEND\xaeB`\x82";
echo "1. Image (1x1 pixel, red): ";

// Convert to base64
$base64 = base64_encode($redPixelPng);

// 1
echo "1. Put image to clipboard: ";
echo SYSTEM::$clipboard->put_image($base64) . "\n";

// 3
echo "3. Check for image: ";
$hasImage = SYSTEM::$clipboard->has_image();
if ($hasImage){
	echo ( "Clipboard has image\n");
}
else {
	echo ( "Clipboard has not image\n");
} 

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
