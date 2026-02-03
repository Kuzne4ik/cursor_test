<?php
// Scenario: Extract all images from a PDF file to a specified directory

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >pdffile->" . basename (__FILE__) . "</span>\n";

// Example 1: Extract images from PDF file
// Input data
$inputFilePath = "test/test.pdf";
$outputDirectory = "test/extracted";

echo("\n\nExample 1. Extract images from PDF: ");
$extractResult = SYSTEM::$pdffile->extract_images($inputFilePath, $outputDirectory);

if ($extractResult) {
    echo("true\n");
} else {
    echo("false\n");
}

// Show results
echo("\n\nShow results: open extracted images directory\n");
WINDOW::$app->shell_execute("open", $outputDirectory);

// Quit the application
WINDOW::$app->quit();
?>