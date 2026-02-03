<?php
// Scenario: Count text blocks in an ODT document

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span >libreOffice->".basename (__FILE__)."</span>\n";

// Path to the ODT file to analyze
$filePath = "test/test_style.odt";

// Example 1: Get the count of text blocks in the ODT file
echo "\n\nExample 1: Get the count of text blocks in the ODT file\n";
$textBlocksCount = SYSTEM::$libreOffice->get_text_blocks_count_odt($filePath);

if ($textBlocksCount >= 0) {
    echo "The ODT file contains $textBlocksCount text blocks.\n";
} else {
    echo "Error: Failed to count text blocks in the ODT file.\n";
}

// Example 2: Get the count with custom timeout
echo "\n\nExample 2: Get the count with custom timeout\n";
$timeout = 600;
$textBlocksCount = SYSTEM::$libreOffice->get_text_blocks_count_odt($filePath, $timeout);

if ($textBlocksCount >= 0) {
    echo "With extended timeout: The ODT file contains $textBlocksCount text blocks.\n";
} else {
    echo "Error: Failed to count text blocks in the ODT file with extended timeout.\n";
}

// Quit the application
WINDOW::$app->quit();

?>