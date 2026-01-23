<?php
/**
 * Example for set_table_cell_value_separator function
 *
 * This example demonstrates how to set the separator used for table cell values
 * when extracting table content from ODT files using the XHELibreOffice class.
 */

// Scenario: Set the separator used for table cell values when extracting table content from ODT files

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}
echo "\n<font color=blue>libreOffice->".basename (__FILE__)."</font>\n";

// Example 1: Set a pipe separator
echo "\n\nExample 1: Setting a pipe separator\n";
$separator = " | ";
$result = SYSTEM::$libreOffice->set_table_cell_value_separator($separator);

if ($result) {
    echo "Successfully set table cell separator to: '{$separator}'\n";
} else {
    echo "Error: Failed to set table cell separator.\n";
}

// Example 2: Test the separator by extracting table content
echo "\n\nExample 2: Testing the separator by extracting table content\n";
$filePath = "test/test_style.odt";
$tableCount = SYSTEM::$libreOffice->get_table_text_blocks_count_odt($filePath);

if ($tableCount > 0) {
    echo "Found {$tableCount} tables. Extracting first table with pipe separator:\n";
    
    $tableText = SYSTEM::$libreOffice->get_table_text_block_by_index_odt($filePath, 0);
    if (!empty($tableText)) {
        echo $tableText . "\n";
    }
} else if ($tableCount == 0) {
    echo "No tables found in the document.\n";
} else {
    echo "Error: Failed to count tables.\n";
}

// Quit the application
WINDOW::$app->quit();

?>