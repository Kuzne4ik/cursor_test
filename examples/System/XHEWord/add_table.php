<?php 
// Scenario: Add a table to a Word document
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>word->" . basename (__FILE__) . "</font>\n";

// Initialize variables
$filePath = "test/test_create.docx";
$initialText = "новый текст";

// Example 2: Kill any existing Word processes
SYSTEM::$word->kill();

// Example 3: Create a new Word document
echo("1. Create docx file: ");
$result = SYSTEM::$word->create($filePath, $initialText);
if ($result) {
    echo("Successfully created document\n");
} else {
    echo("Failed to create document\n");
}

// Open the file for edit
SYSTEM::$word->open($filePath, false);

// Example 4: Prepare table data
$tableArray = array();
$tableArray[] = array("0", "1", "2");
$tableArray[] = array("3", "4", "5", "6");

// Example 1: Add the table to the document
echo("\n1. Add table to document: ");
$result = SYSTEM::$word->add_table($filePath, $tableArray);
if ($result) {
    echo("Successfully added table\n");
} else {
    echo("Failed to add table\n");
}

// Save and close the document
SYSTEM::$word->save($filePath);
SYSTEM::$word->close($filePath);

echo "\n";
// Quit the application
WINDOW::$app->quit();
?>