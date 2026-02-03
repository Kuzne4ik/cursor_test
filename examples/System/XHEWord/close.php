<?php 
// Scenario: Open, modify, save and close a Word document
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >word->" . basename (__FILE__) . "</span>\n";

// Initialize variables
$filePath = "test/test.docx";

// Open the file
echo("\n2. Open file for editing in memory: ");
$result = SYSTEM::$word->open($filePath, true);
if ($result) {
    echo("Successfully opened file\n");
} else {
    echo("Failed to open file\n");
}

// Example 1: Close file
echo("\n7. Close file: ");
$result = SYSTEM::$word->close($filePath);
if ($result) {
    echo("Successfully closed\n");
} else {
    echo("Failed to close\n");
}

echo "\n";
// Quit the application
WINDOW::$app->quit();
?>