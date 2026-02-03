<?php
// Scenario: Count header text blocks in an ODT document and retrieve all headers

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span >libreOffice->".basename (__FILE__)."</span>\n";

// Example 1: Count header text blocks in a document
echo "\n\nExample 1: Counting header text blocks in a document\n";
$filePath = "test/test_style.odt";
$headerCount = SYSTEM::$libreOffice->get_header_text_blocks_count_odt($filePath);

if ($headerCount >= 0) {
    echo "The ODT file contains {$headerCount} header text blocks.\n";
} else {
    echo "Error: Failed to count header text blocks in the ODT file.\n";
}

// Example 2: Get all headers from a document
echo "\n\nExample 2: Get all headers from a document\n";
$headerCount = SYSTEM::$libreOffice->get_header_text_blocks_count_odt($filePath);

if ($headerCount > 0) {
    for ($headerIndex = 0; $headerIndex < $headerCount; $headerIndex++){
        $headerTextBlock = SYSTEM::$libreOffice->get_header_text_block_by_index_odt($filePath, $headerIndex);

        if (!empty($headerTextBlock)) {
            echo "header $headerIndex:\n$headerTextBlock\n";
        } else {
            echo "No header found at index {$headerIndex} or error occurred.\n";
        }
    }
}

// Quit the application
WINDOW::$app->quit();

?>