<?php
// Scenario: Check for files in clipboard before and after adding text

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
echo "1. Check for files in empty clipboard: ";
echo SYSTEM::$clipboard->has_files() . "\n";

// 2
$textToPut = "test text";
echo "2. Set text to clipboard: ";
echo SYSTEM::$clipboard->put_text($textToPut) . "\n";

// 3
echo "3. Check for files after setting text: ";
$hasFiles = SYSTEM::$clipboard->has_files();
if ($hasFiles){
	echo ( "Clipboard has files\n");
}
else {
	echo ( "Clipboard not has files\n");
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
