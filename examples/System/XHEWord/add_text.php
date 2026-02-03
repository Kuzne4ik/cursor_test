<?php 
// Scenario: Add text to a Word document in different ways
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
$additionalText1 = " добавочный текст c разрывом страницы\f";
$additionalText2 = " добавочный текст в новом параграфе";

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

// Example 1: Add text with page break
echo("\n1. Add text with page break: ");
$result = SYSTEM::$word->add_text($filePath, $additionalText1);
if ($result) {
    echo("Successfully added text with page break\n");
} else {
    echo("Failed to add text with page break\n");
}

// Example 2: Add text in a new paragraph
echo("\n2. Add text in new paragraph: ");
$result = SYSTEM::$word->add_text($filePath, $additionalText2, true);
if ($result) {
    echo("Successfully added text in new paragraph\n");
} else {
    echo("Failed to add text in new paragraph\n");
}

// Save and close the document
SYSTEM::$word->save($filePath);
SYSTEM::$word->close($filePath);

echo "\n";
// Quit the application
WINDOW::$app->quit();
?>