<?php 
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";

// Scenario: Generate folders based on strings from a file

// Set target folder name
$targetFolder = "test_generated";

// Clear target folder if it exists
echo("Clear target folder if it exists: $targetFolder\n");
SYSTEM::$folder->delete($targetFolder);

// Example 1: Create folders with names taken from strings in a file
// Set source file with folder names
$sourceFile = "test/test_generated.txt";
// Set timeout
$timeout = 60;

echo("1. Create folders with names taken from strings in file $sourceFile in target folder $targetFolder: ");
$result = SYSTEM::$textfile->generate_folders_by_strings_file($sourceFile, $targetFolder, $timeout);
if ($result) {
    echo("true\n");
} else {
    echo("false\n");
}

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>