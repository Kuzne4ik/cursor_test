<?php
// Scenario: Save changes to a Word document
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >word->" . basename (__FILE__) . "</span>\n";

//Kill any existing Word app processes
$result = SYSTEM::$word->kill();
if ($result) {
    echo("Successfully kill Word app process\n");
} else {
    echo("Failed to kill Word app process\n");
}


// Define file path and text variables in Linux format
$filePath = "test/test_create.docx";
$initialText = "новый текст";
$additionalText1 = " добавочный текст 1";
$additionalText2 = " добавочный текст в новом параграфе";

// Create a docx file
echo("Create docx file: ");
$createResult = SYSTEM::$word->create($filePath, $initialText);
if ($createResult)
    echo("true\n");
else
    echo("false\n");

// Open the file for editing and working with it in memory
echo("\n2. Open the file for editing and working with it in memory: ");
$isReadOnly = false;
echo("\n1: Open stream for exists Word file format 'docx' for read only: ");
$openResult = SYSTEM::$word->open($filePath, $isReadOnly);
if ($openResult)
  echo("Word file '$filePath' opened successfully");
else
  echo("Word file '$filePath' open fail");

// Add text
echo("\nAdd text: ");
$addTextResult1 = SYSTEM::$word->add_text($filePath, $additionalText1);
if ($addTextResult1)
    echo("true\n");
else
    echo("false\n");

// Example 1: Save the changes
echo("\n\n1. Save the changes: ");
$saveResult = SYSTEM::$word->save($filePath);
if ($saveResult)
    echo("true\n");
else
    echo("false\n");

// Close the document
echo("\nClose the document: ");
$closeResult = SYSTEM::$word->close($filePath);
if ($closeResult)
    echo("true\n");
else
    echo("false\n");
echo "\n";
// Quit the application
WINDOW::$app->quit();
?>