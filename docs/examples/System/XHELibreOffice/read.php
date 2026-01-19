<?php
// Scenario: Read all text from an ODT document and display a preview

$xhe_host = "127.0.0.1:7013";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)) {
    $path = "../../../Templates/init.php";
    require($path);
}

// начало
echo "\n<font color=blue>libreOffice->".basename (__FILE__)."</font>\n";

// Example 1: ODT file path
$filePath = "test/test_style.odt";

// Example 1: Get all text from the ODT file
echo("\n1: Get all text from the ODT file '$filePath':");
$text = SYSTEM::$libreOffice->read($filePath);

if ($text){
	// Example 1: Display first 200 symbols of ODT doc
	echo("\nFirst 100 symbols of ODT doc: ");
	
    // Example 1: Extract substring arguments to variables
    $startPos = 0;
    $length = 200;
    $textStr = substr($text, $startPos, $length);
    echo("\n$textStr");
}
else
{
    // Example 1: Error message
    echo("\nError when reading text.");
}

echo("\n\n");

// Quit
WINDOW::$app->quit();
?>