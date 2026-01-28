<?php
// Scenario: Get table data from a Word document by table number
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
$tableNumber = 0;
$asArray = true;

// Open the file to read
SYSTEM::$wordfile->open($filePath, true);

// Example 1: Read the specified table as text
echo("1. Read the specified table as text: <br><br>");
$tableText = SYSTEM::$wordfile->get_table_by_number($filePath, $tableNumber);
echo($tableText);

// Example 2: Read the specified table as an array
echo("\n\n2. Read the specified table as an array: <br><br>");
$tableArray = SYSTEM::$wordfile->get_table_by_number($filePath, $tableNumber, $asArray);
print_r($tableArray);

// Close the file
SYSTEM::$wordfile->close($filePath);

echo "\n";

// Quit the application
$app->quit();
?>