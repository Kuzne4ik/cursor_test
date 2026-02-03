<?php
// Scenario: Demonstrates how to save attachments from a message file to a specified folder

$xhe_host = "127.0.0.1:7010";

// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >msgfile->" . basename (__FILE__) . "</span>\n";

// Example 1: Save attachments from a message file to a specified folder
$filePath = "test/test.msg";
$attachmentsPath = "test/attachments";
echo("1. Save attachments from message file to folder: $filePath -> $attachmentsPath\n");

// Save attachments using XHEMsgFile
$saveResult = SYSTEM::$msgfile->save_attachments($filePath, $attachmentsPath);

// Check if attachments were successfully saved
if ($saveResult) {
    echo("Successfully saved attachments to folder\n");
} else {
    echo("Failed to save attachments to folder\n");
}

// end
echo("\n");

// Quit the application
WINDOW::$app->quit();
?>