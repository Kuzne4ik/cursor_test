<?php
// Scenario: Extract list text by index from an ODT document

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<font color=blue>libreOffice->".basename (__FILE__)."</font>\n";

// Example 1: Get the first list from a document
echo "\n\nExample 1: Getting the first list from a document\n";
$filePath = "test/test_style.odt";
$listIndex = 0;
$listText = SYSTEM::$libreOffice->get_list_text_block_by_index_odt($filePath, $listIndex);

if (!empty($listText)) {
    echo "List $listIndex:\n$listText\n";
} else {
    echo "No list found at index {$listIndex} or error occurred.\n";
}

// Example 2: Get the second list from a document
echo "\n\nExample 2: Getting the second list from a document\n";
$filePath = "test/test_style.odt";
$listIndex = 1;
$listText = SYSTEM::$libreOffice->get_list_text_block_by_index_odt($filePath, $listIndex);

if (!empty($listText)) {
    echo "List $listIndex:\n$listText\n";
} else {
    echo "No list found at index {$listIndex} or error occurred.\n";
}

// Quit the application
WINDOW::$app->quit();

?>