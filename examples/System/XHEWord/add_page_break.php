<?php 
// Scenario: Add a page break to a Word document and add text on the new page
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
$initialText = "новый текст";
$additionalText = " добавочный текст на новой странице";

// Create a new Word document
echo("Create docx file: ");
$result = SYSTEM::$word->create($filePath, $initialText);
if ($result) {
    echo("Successfully created document\n");
} else {
    echo("Failed to create document\n");
}

// Open the file for edit
SYSTEM::$word->open($filePath, false);

// Example 1: Add a page break to the document
echo("\n1. Add page break to document: ");
$result = SYSTEM::$word->add_page_break($filePath);
if ($result) {
    echo("Successfully added page break\n");
} else {
    echo("Failed to add page break\n");
}

// Add text after the page break
echo("\nAdd text on new page: ");
$result = SYSTEM::$word->add_text($filePath, $additionalText);
if ($result) {
    echo("Successfully added text\n");
} else {
    echo("Failed to add text\n");
}

// Save and close the document
SYSTEM::$word->save($filePath);
SYSTEM::$word->close($filePath);

echo "\n";
// Quit the application
WINDOW::$app->quit();
?>