<?php 
// Scenario: Compare two Word documents
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >word->" . basename (__FILE__) . "</span>\n";

// Initialize variables
$firstFilePath = "test/test.docx";
$secondFilePath = "test/converted/converted.docx";

// Kill any existing Word processes
SYSTEM::$word->kill();

// Example 1: Compare two Word documents
echo("1. Compare two Word documents: ");
$result = SYSTEM::$word->compare($firstFilePath, $secondFilePath);
if ($result) {
    echo("Successfully compared documents\n");
} else {
    echo("Failed to compare documents\n");
}

// Close the documents
SYSTEM::$word->close($firstFilePath);
SYSTEM::$word->close($secondFilePath);

echo "\n";
// Quit the application
WINDOW::$app->quit();
?>