<?php

// Scenario: Count table text blocks in an ODT document

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span >libreOffice->".basename (__FILE__)."</span>\n";

// Example 1: Count table text blocks in a document
echo "\n\nExample 1: Counting table text blocks in a document\n";
$filePath = "test/test_style.odt";
$tableCount = SYSTEM::$libreOffice->get_table_text_blocks_count_odt($filePath);

if ($tableCount >= 0) {
    echo "The ODT file contains $tableCount table text blocks.\n";
} else {
    echo "Error: Failed to count table text blocks in the ODT file.\n";
}

// Quit the application
WINDOW::$app->quit();

?>