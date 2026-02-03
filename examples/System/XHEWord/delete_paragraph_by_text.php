<?php 
// Scenario: Delete a paragraph from a Word document by its text content
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >word->" . basename (__FILE__) . "</span>\n";

// Initialize variables
$filePath = "test/test_create.docx";
$searchText = "новом";

// Open the file for edit
SYSTEM::$word->open($filePath, false);

// Get the number of paragraphs in the document
echo("\nGet number of paragraphs in document after delete one: ");
$paragraphsCount = SYSTEM::$word->get_paragraphs_count($filePath);
echo($paragraphsCount . "\n");

// Example 1: Delete paragraph containing the specified text
echo("1. Delete paragraph containing specified text: ");
$result = SYSTEM::$word->delete_paragraph_by_text($filePath, $searchText);
if ($result) {
    echo("Successfully deleted paragraph\n");
} else {
    echo("Failed to delete paragraph\n");
}

// Get the number of paragraphs in the document
echo("\nGet number of paragraphs in document after delete one: ");
$paragraphsCount = SYSTEM::$word->get_paragraphs_count($filePath);
echo($paragraphsCount . "\n");

// Save and close the document
SYSTEM::$word->save($filePath);
SYSTEM::$word->close($filePath);
echo "\n";
// Quit the application
WINDOW::$app->quit();
?>