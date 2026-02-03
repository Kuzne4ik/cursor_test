<?php 
// Scenario: Delete a specific line from a file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";

// Prepare files
// Set file path
$filePath = "test/test_delete.txt";
// Set source file for copying
$sourceFile = "test/test_dedupe.txt";

// Delete file if it exists
echo("Delete file if it exists: $filePath\n");
SYSTEM::$file_os->delete($filePath);

// Copy file
echo("Copy file from $sourceFile to $filePath\n");
SYSTEM::$file_os->copy($sourceFile, $filePath);

// Example 1: Get number of lines in file
echo("1. Get number of lines in file: ");
$linesCount = SYSTEM::$textfile->get_lines_count($filePath);
echo($linesCount . "\n");

// Example 2: Delete line from file
// Set line number to delete (0-based)
$lineNumber = 2;

echo("2. Delete line from file (line number: $lineNumber): ");
$result = SYSTEM::$textfile->delete_line_from_file($filePath, $lineNumber);
if ($result) {
    echo("true\n");
} else {
    echo("false\n");
}

// Example 3: Get number of lines in file after deletion
echo("3. Get number of lines in file after deletion: ");
$linesCountAfter = SYSTEM::$textfile->get_lines_count($filePath);
echo($linesCountAfter . "\n");

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>