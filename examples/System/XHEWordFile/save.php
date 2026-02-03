<?php
// Scenario: Save changes to a Word document file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >wordfile->" . basename (__FILE__) . "</span>\n";

// Initialize variables
$filePath = "test/test.docx";
$writePermission = false;

// Open the file with write permission
SYSTEM::$wordfile->open($filePath, $writePermission);

// Execute change file

// Example 1. Save the file
echo("1. Save the file '$filePath': ");
$saveResult = SYSTEM::$wordfile->save($filePath);
if ($saveResult)
    echo("true\n");
else
    echo("false\n");

// Close the file
SYSTEM::$wordfile->close($filePath);

echo "\n";

// Quit the application
WINDOW::$app->quit();
?>