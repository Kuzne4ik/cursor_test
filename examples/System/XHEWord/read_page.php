<?php
// Scenario: Read a specific page from a Word document
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

// Define file path in Linux format
$filePath = "test/test.docx";
$pageNumber = 2;

// Open the file for read
SYSTEM::$word->open($filePath, true);

// Example 1: Read text from specific page
echo("\n\n4. Read text from page $pageNumber: \n");
$pageText = SYSTEM::$word->read_page($filePath, $pageNumber);
echo($pageText);

// Close the document
SYSTEM::$word->close($filePath);

echo "\n";

// Quit the application
WINDOW::$app->quit();
?>