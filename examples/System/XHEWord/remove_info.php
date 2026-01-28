<?php
// Scenario: Remove personal information from a Word document
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>word->" . basename (__FILE__) . "</font>\n";

// Kill any existing Word app processes
$result = SYSTEM::$word->kill();
if ($result) {
    echo("Successfully kill Word app process\n");
} else {
    echo("Failed to kill Word app process\n");
}

// Define file paths in Linux format
$inputPath = "test/test.docx";

// Open the file for edit
SYSTEM::$word->open($filePath, false);

// Example 1: Remove personal information from Word document and save with new name
echo("1. Remove personal information from Word document and save with new name: ");
$removeInfoResult = SYSTEM::$word->remove_info($inputPath, $outputPath);
if ($removeInfoResult)
    echo("true\n");
else
    echo("false\n");

// Save and close the document
SYSTEM::$word->save($filePath);
SYSTEM::$word->close($filePath);

echo "\n";

// Quit the application
WINDOW::$app->quit();
?>