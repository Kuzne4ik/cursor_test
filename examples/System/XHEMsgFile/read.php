<?php
// Scenario: Demonstrates how to read a message file using the XHEMsgFile functionality

$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>msgfile->" . basename (__FILE__) . "</font>\n";

// Example 1: Read a specified message file
$filePath = "test/test.msg";
echo("1. Read the specified file: $filePath\n");

// Get file content using XHEMsgFile
$fileContent = SYSTEM::$msgfile->read($filePath);

// Check if file content was successfully retrieved
if ($fileContent !== false) {
    echo("Successfully read file content\n");
    echo("File content:\n");
    print_r($fileContent);
} else {
    echo("Failed to read file content\n");
}

// end
echo("\n");

// Quit the application
WINDOW::$app->quit();
?>