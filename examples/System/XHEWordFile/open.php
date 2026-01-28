<?php
// Scenario: Open a Word document file and access its content
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>wordfile->" . basename (__FILE__) . "</font>\n";

// Initialize variables
$filePath = "test/test.docx";
$writePermission = false;

// Example 1. Open the file with write permission
echo("\n1. Open the file with write permission: ");
$openResult = SYSTEM::$wordfile->open($filePath, $writePermission);
if ($openResult)
    echo("true\n");
else
    echo("false\n");

// Close the file
SYSTEM::$wordfile->close($filePath);

// Example 2. Open the file with read permission
$writePermission = false;
echo("\n2. Open the file with read permission: ");
$openResult = SYSTEM::$wordfile->open($filePath, $writePermission);
if ($openResult)
    echo("true\n");
else
    echo("false\n");

// Close the file
SYSTEM::$wordfile->close($filePath);


echo "\n";

// Quit the application
$app->quit();
?>