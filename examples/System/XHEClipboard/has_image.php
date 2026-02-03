<?php
// Scenario: Check for image in clipboard before and after adding text

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
echo "1. Check for image in empty clipboard: ";
$hasImage = SYSTEM::$clipboard->has_image();
 if ($hasImage){
	echo ( "Clipboard has image\n");
}
else {
	echo ( "Clipboard not has image\n");
} 

// 2
$textToPut = "test text";
echo "2. Set text to clipboard '$textToPut': ";
echo SYSTEM::$clipboard->put_text($textToPut) . "\n";

// 3
echo "3. Check for image after setting text: ";
$hasImage = SYSTEM::$clipboard->has_image();
if ($hasImage){
	echo ( "Clipboard has image\n");
}
else {
	echo ( "Clipboard not has image\n");
} 

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
