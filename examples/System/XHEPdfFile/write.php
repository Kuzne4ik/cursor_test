<?php
// Scenario: Write text content to a PDF file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>pdffile->" . basename (__FILE__) . "</font>\n";

// Generate text content
$content = "This is a test PDF document created using the XHE PDF file functionality. ";
$content .= "The document contains multiple lines of text to demonstrate the write capability. ";
$content .= "PDF files can be created programmatically with various content types including text, images, and more.";

// Example 1: Write content to a PDF file
// Input data
$outputFilePath = "test/test.pdf";

echo("\n\nExample 1. Write content to a PDF file: ");
$writeResult = SYSTEM::$pdffile->write($outputFilePath, $content);

if ($writeResult) {
    echo("true\n");
} else {
    echo("false\n");
}

// Show results
echo("\n\nShow results: open created PDF file\n");
WINDOW::$app->shell_execute("", $outputFilePath);

// Quit the application
WINDOW::$app->quit();
?>