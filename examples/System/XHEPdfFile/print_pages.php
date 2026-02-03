<?php
// Scenario: Print PDF pages as image files to a specified directory

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >pdffile->" . basename (__FILE__) . "</span>\n";

// Example 1: Print PDF pages as image files
// Input data
$filePath = "test/test.pdf";
$outputDirectory = "test/extracted";

echo("\n\nExample 1. Print PDF pages as image files: ");
$printResult = SYSTEM::$pdffile->print_pages($filePath, $outputDirectory);

if ($printResult) {
    echo("true\n");
} else {
    echo("false\n");
}

// Show results
echo("\n\nShow results: open directory with printed pages\n");
WINDOW::$app->shell_execute("open", $outputDirectory);

// Quit the application
WINDOW::$app->quit();
?>