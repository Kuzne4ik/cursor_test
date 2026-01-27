<?php
// Scenario: Combine multiple PDF files into a single PDF file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>pdffile->" . basename (__FILE__) . "</font>\n";

// Example 1: Combine input PDF files into one (with compression)
// Input data
$in_paths = array("test/test_1.pdf", "test/test_2.pdf");
$outputFilePath = "test/combined.pdf";

echo("\n\nExample 1. Combine input PDF files into one (with compression): ");
$combineResult = SYSTEM::$pdffile->combine($outputFilePath, $in_paths);

if ($combineResult) {
    echo("true\n");
} else {
    echo("false\n");
}

// Show results
echo("\n\nShow results: open combined PDF file\n");
WINDOW::$app->shell_execute("", $outputFilePath);

// Quit the application
WINDOW::$app->quit();
?>