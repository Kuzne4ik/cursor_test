<?php
// Scenario: Check if clipboard is empty before and after adding text

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>clipboard->" . basename (__FILE__) . "</font>\n";

// 1
echo "1. Clear clipboard: ";
echo SYSTEM::$clipboard->clear() . "\n";

// 2
echo "2. Check if clipboard is empty: ";
$isEmpty = SYSTEM::$clipboard->is_empty();
if ($isEmpty){
	echo ( "Clipboard is empty\n");
}
else {
	echo ( "Clipboard is not empty\n");
} 

// 3
$textToPut = "test text";
echo "3. Set text to clipboard: ";
echo SYSTEM::$clipboard->put_text($textToPut) . "\n";

// 4
echo "4. Check if clipboard is empty after setting text: ";
$isEmpty = SYSTEM::$clipboard->is_empty();
if ($isEmpty){
	echo ( "Clipboard is empty\n");
}
else {
	echo ( "Clipboard is not empty\n");
} 

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
