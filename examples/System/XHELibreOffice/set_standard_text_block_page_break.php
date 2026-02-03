<?php
/**
 * Example for set_standard_text_block_page_break function
 *
 * This example demonstrates how to set the text used to denote page breaks
 * when extracting content from ODT files using the XHELibreOffice class.
 */

// Scenario: Set the text used to denote page breaks when extracting content from ODT files

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span >libreOffice->".basename (__FILE__)."</span>\n";

// Example 1: Set a custom page break marker
echo "\n\nExample 1: Setting a custom page break marker\n";
$customMarker = "=== PAGE BREAK ===";
$result = SYSTEM::$libreOffice->set_standard_text_block_page_break($customMarker);

if ($result) {
    echo "Successfully set page break marker to: '{$customMarker}'\n";
} else {
    echo "Error: Failed to set page break marker.\n";
}

// Example 2: Test the custom marker by extracting page breaks
echo "\n\nExample 2: Testing the custom marker by extracting page breaks\n";
$filePath = "test/test_style.odt";
$pageBreakCount = SYSTEM::$libreOffice->get_page_break_text_blocks_count_odt($filePath);

if ($pageBreakCount > 0) {
    echo "Found {$pageBreakCount} page breaks with custom marker:\n";
    
    for ($k = 0; $k < min(3, $pageBreakCount); $k++) {
        $pageBreakText = SYSTEM::$libreOffice->get_page_break_text_block_by_index_odt($filePath, $k);
        echo "Page break {$k}: {$pageBreakText}\n";
    }
} else if ($pageBreakCount == 0) {
    echo "No page breaks found in the document.\n";
} else {
    echo "Error: Failed to count page breaks.\n";
}

// Quit the application
WINDOW::$app->quit();

?>