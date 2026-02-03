<?php 
// Scenario: Connect to a Word document by window handle and modify it
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
$additionalText1 = " добавочный текст 1";
$additionalText2 = " добавочный текст в новом параграфе";
$windowClass = "_WwF";
$pathAlias = "@doc1";
$sleepTime = 5;

// Kill any existing Word processes
SYSTEM::$word->kill();

// Create a new Word document
echo("Create docx file: ");
$result = SYSTEM::$word->create($filePath, $initialText);
if ($result) {
    echo("Successfully created document\n");
} else {
    echo("Failed to create document\n");
}

// Open the document with shell execute
WINDOW::$app->shell_execute("open", $filePath);
sleep($sleepTime);

// Example 1: Connect to the document by window handle (can visibled Word application)
// Get window handle by class
$hwnd = WINDOW::$window->get_by_class($windowClass, true, false)->get_hwnd();
echo("\n1. Connect to document by window handle: ");
$result = SYSTEM::$word->connect_by_hwnd($hwnd, $pathAlias);
if ($result) {
    echo("Successfully connected to document\n");
} else {
    echo("Failed to connect to document\n");
}

// Add text to the document
echo("\nAdd text to document: ");
$result = SYSTEM::$word->add_text($pathAlias, $additionalText1);
if ($result) {
    echo("Successfully added text\n");
} else {
    echo("Failed to add text\n");
}

// Add text in a new paragraph
echo("\nAdd text in new paragraph: ");
$result = SYSTEM::$word->add_text($pathAlias, $additionalText2, true);
if ($result) {
    echo("Successfully added text in new paragraph\n");
} else {
    echo("Failed to add text in new paragraph\n");
}

// Get all text from the document
echo("\nGet all text from document: \n");
$documentText = SYSTEM::$word->get_text($pathAlias);
echo($documentText . "\n");

// Save the changes
echo("\nSave changes to document: ");
$result = SYSTEM::$word->save($pathAlias);
if ($result) {
    echo("Successfully saved document\n");
} else {
    echo("Failed to save document\n");
}

// Close the document
echo("\nClose document: ");
$result = SYSTEM::$word->close($pathAlias);
if ($result) {
    echo("Successfully closed document\n");
} else {
    echo("Failed to close document\n");
}
echo "\n";
// Quit the application
WINDOW::$app->quit();
?>