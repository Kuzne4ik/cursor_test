<?php
// Scenario: Check for specific formats in clipboard before and after adding text

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
$formatText = "Text";
echo "1. Check for Text format in empty clipboard: ";
echo SYSTEM::$clipboard->has_format($formatText) . "\n";

// 2
$textToPut = "test text";
echo "2. Set text to clipboard: ";
echo SYSTEM::$clipboard->put_text($textToPut) . "\n";

// 3
echo "3. Check for Text format after setting text: ";
$hasFormat = SYSTEM::$clipboard->has_format($formatText);
 if ($hasFormat){
	echo ( "Clipboard has text format\n");
}
else {
	echo ( "Clipboard not has text format\n");
}

// 4
$formatBitmap = "Bitmap";
echo "4. Check for Bitmap format: ";
$hasFormat = SYSTEM::$clipboard->has_format($formatBitmap);
if ($hasFormat){
	echo ( "Clipboard has Bitmap format\n");
}
else {
	echo ( "Clipboard not has Bitmap format\n");
}  

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
