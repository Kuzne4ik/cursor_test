<?php 
// Scenario: Add an image to a Word document
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>word->" . basename (__FILE__) . "</font>\n";

// Initialize variables
$filePath = "test/test.docx";
$imagePath = "test/image.jpeg";

// Kill any existing Word processes
SYSTEM::$word->kill();

// Open the file for edit
SYSTEM::$word->open($filePath, false);

// Example 1: Add an image to the document
echo("\n1. Add image to document: ");
$result = SYSTEM::$word->add_image($filePath, $imagePath);
if ($result) {
    echo("Successfully added image\n");
} else {
    echo("Failed to add image\n");
}

// Save and close the document
SYSTEM::$word->save($filePath);
SYSTEM::$word->close($filePath);

echo "\n";

// Quit the application
WINDOW::$app->quit();
?>