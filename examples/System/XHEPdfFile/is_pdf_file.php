<?php
// Scenario: Check if a file is a valid PDF file

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >pdffile->" . basename (__FILE__) . "</span>\n";

// Example 1: Check if a file is a valid PDF file
// Input data
$filePath = "test/test.pdf";

echo("\n\nExample 1. Check if a file is a valid PDF file: ");
$isPdf = SYSTEM::$pdffile->is_pdf_file($filePath);

if ($isPdf) {
    echo("true\n");
} else {
    echo("false\n");
}

// Quit the application
WINDOW::$app->quit();
?>