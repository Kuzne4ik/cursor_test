<?php
// Scenario: Set text of a paragraph by its number in a Word document
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>word->" . basename (__FILE__) . "</font>\n";

// Kill any existing Word app processes
$result = SYSTEM::$word->kill();
if ($result) {
    echo("Successfully kill Word app process\n");
} else {
    echo("Failed to kill Word app process\n");
}


// Define file path and text variables in Linux format
$filePath = "test/test_create.docx";
$paragraphNumber = 0;
$newParagraphText = "PRAGRAPH TEXT... 0";

// Open stream for exists Word file format 'docx'
$isReadOnly = false;
echo("\nOpen stream for exists Word file format 'docx' for edit: ");
$openResult = SYSTEM::$word->open($filePath, $isReadOnly);
if ($openResult)
  echo("Word file '$filePath' opened successfully");
else
  echo("Word file '$filePath' open fail");

// Example 1: Set a paragraph text by number
echo("1. Set text of a paragraph by number: ");
$setParagraphResult = SYSTEM::$word->set_paragraph_text_by_number($filePath, $paragraphNumber, $newParagraphText);
if ($setParagraphResult)
    echo("true\n");
else
    echo("false\n");

// Save and close the document
SYSTEM::$word->save($filePath);
SYSTEM::$word->close($filePath);


echo "\n";

// Quit the application
WINDOW::$app->quit();
?>