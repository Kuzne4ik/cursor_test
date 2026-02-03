<?php
// Scenario: Extract paragraph text by index from an ODT document

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span >libreOffice->".basename (__FILE__)."</span>\n";

// Example 1: Get the first paragraph from a document
echo "\n\nExample 1: Getting the first paragraph from a document\n";
$filePath = "test/test_style.odt";
$paragraphIndex = 0;
$paragraphTextBlock = SYSTEM::$libreOffice->get_paragraph_text_block_by_index_odt($filePath, $paragraphIndex);

if (!empty($paragraphTextBlock)) {
    echo "Paragraph $paragraphIndex:\n$paragraphTextBlock\n";
} else {
    echo "No paragraph found at index {$paragraphIndex} or error occurred.\n";
}

// Example 2: Get all paragraphs from a document
echo("\n\nExample 2: Get all paragraphs from a document\n");
$paragraphCount = SYSTEM::$libreOffice->get_paragraph_text_blocks_count_odt($filePath);

echo("Total paragraphs in document: $paragraphCount\n");
       
if ($paragraphCount > 0) {
    for ($paragraphIndex = 0; $paragraphIndex < $paragraphCount; $paragraphIndex++){
        $paragraphTextBlock = SYSTEM::$libreOffice->get_paragraph_text_block_by_index_odt($filePath, $paragraphIndex);

        if (!empty($paragraphTextBlock)) {
            echo "Paragraph $paragraphIndex: $paragraphTextBlock\n";
        } else {
            echo "No paragraph found at index {$paragraphIndex} or error occurred.\n";
        }
    }
}

// Quit the application
WINDOW::$app->quit();

?>