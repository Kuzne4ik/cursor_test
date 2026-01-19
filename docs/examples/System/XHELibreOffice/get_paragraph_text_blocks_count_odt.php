<?php
// Scenario: Count paragraph text blocks in an ODT document

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<font color=blue>libreOffice->".basename (__FILE__)."</font>\n";

// Example 1: Count paragraph text blocks in a document
echo "\n\nExample 1: Counting paragraph text blocks in a document\n";
$filePath = "test/test_style.odt";
$paragraphCount = SYSTEM::$libreOffice->get_paragraph_text_blocks_count_odt($filePath);

if ($paragraphCount >= 0) {
    echo "The ODT file contains $paragraphCount paragraph text blocks.\n";
} else {
    echo "Error: Failed to count paragraph text blocks in the ODT file.\n";
}

// Quit the application
WINDOW::$app->quit();

?>