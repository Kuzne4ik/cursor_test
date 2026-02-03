<?php
// Scenario: Compress images in a PDF file to reduce file size

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >pdffile->" . basename (__FILE__) . "</span>\n";

// Example 1: Compress images in PDF file
// Input data
$inputFilePath = "test/test.pdf";
$outputFilePath = "test/compressed.pdf";
$quality = 20; // Compression quality (0-100)

echo("\n\nExample 1. Compress images in PDF: ");
$compressResult = SYSTEM::$pdffile->compress_images($inputFilePath, $outputFilePath, $quality);

if ($compressResult) {
    echo("true: ");
} else {
    echo("false: ");
}

// Get file sizes to show difference
$originalSize = SYSTEM::$file_os->get_size($inputFilePath);
$compressedSize = SYSTEM::$file_os->get_size($outputFilePath);
$difference = $originalSize - $compressedSize;

echo($difference . " bytes difference\n");

// Quit the application
WINDOW::$app->quit();
?>