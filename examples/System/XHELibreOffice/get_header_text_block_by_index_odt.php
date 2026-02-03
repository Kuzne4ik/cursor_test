<?php
// Scenario: Extract header text by index from an ODT document

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span >libreOffice->".basename (__FILE__)."</span>\n";

// Example 1: Get the first header from a document
echo "\n\nExample 1: Getting the first header from a document\n";
$filePath = "test/test_style.odt";
$headerIndex = 0;
$headerText = SYSTEM::$libreOffice->get_header_text_block_by_index_odt($filePath, $headerIndex);

if (!empty($headerText)) {
    echo "Header {$headerIndex}: {$headerText}\n";
} else {
    echo "No header found at index {$headerIndex} or error occurred.\n";
}

// Quit the application
WINDOW::$app->quit();

?>