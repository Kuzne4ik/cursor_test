<?php
/**
 * Example for set_list_item_prefix function
 *
 * This example demonstrates how to set the prefix used for list items
 * when extracting list content from ODT files using the XHELibreOffice class.
 */

// Scenario: Set the prefix used for list items when extracting list content from ODT files

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span >libreOffice->".basename (__FILE__)."</span>\n";

// Example 1: Set a bullet point prefix
echo "\n\nExample 1: Setting a bullet point prefix\n";
$prefix = "• ";
$result = SYSTEM::$libreOffice->set_list_item_prefix($prefix);

if ($result) {
    echo "Successfully set list item prefix to: $prefix'\n";
} else {
    echo "Error: Failed to set list item prefix.\n";
}

// Example 2: Test the prefix by extracting list content
echo "\n\nExample 2: Testing the prefix by extracting list content\n";
$filePath = "test/test_style.odt";
$listCount = SYSTEM::$libreOffice->get_list_text_blocks_count_odt($filePath);

if ($listCount > 0) {
    echo "Found $listCount lists. Extracting first list with bullet prefix:\n";
    
    $listText = SYSTEM::$libreOffice->get_list_text_block_by_index_odt($filePath, 0);
    if (!empty($listText)) {
        echo $listText . "\n";
    }
} else if ($listCount == 0) {
    echo "No lists found in the document.\n";
} else {
    echo "Error: Failed to count lists.\n";
}

// Quit the application
WINDOW::$app->quit();

?>