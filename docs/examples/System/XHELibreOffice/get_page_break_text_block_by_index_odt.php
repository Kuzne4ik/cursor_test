<?php
// Scenario: Extract page break text by index from an ODT document

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<font color=blue>libreOffice->".basename (__FILE__)."</font>\n";

// Example 1: Get the first page break from a document
echo "\n\nExample 1: Getting the first page break from a document\n";
$filePath = "test/test_style.odt";
$pageBreakIndex = 0;
$pageBreakText = SYSTEM::$libreOffice->get_page_break_text_block_by_index_odt($filePath, $pageBreakIndex);

if (!empty($pageBreakText)) {
    echo "Page break {$pageBreakIndex}: {$pageBreakText}\n";
} else {
    echo "No page break found at index {$pageBreakIndex} or error occurred.\n";
}

// Quit the application
WINDOW::$app->quit();

?>