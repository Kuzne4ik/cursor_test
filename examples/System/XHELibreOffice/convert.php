<?php
/**
 * Example for convert function
 *
 * This example demonstrates how to convert files between different formats
 * using the XHELibreOffice class.
 */

// Scenario: Convert documents between different formats using LibreOffice

$xhe_host = "127.0.0.1:7010";

// подключим функциональные объекты, если еще не подключен
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}
// info
echo "\n<span >folder->" . basename (__FILE__) . "</span>\n";


$defaultWindowsPath = "C:\\Program Files\\LibreOffice\\program\\";
//$result = SYSTEM::$libreOffice->set_install_folder($defaultWindowsPath);

// Example 1: Convert docx to txt
echo "\n\nExample 1: Converting docx to txt\n";
$inputFile = "test/test.docx";
$outputFile = "test/converted.txt";
$result = SYSTEM::$libreOffice->convert($inputFile, $outputFile);

if ($result) {
    echo "Successfully converted {$inputFile} to {$outputFile}\n";
} else {
    echo "Error: Failed to convert {$inputFile} to {$outputFile}\n";
}

// Example 2: Convert docx to ODT
echo "\n\nExample 2: Converting docx to ODT\n";
$inputFile = "test/test.docx";
$outputFile = "test/converted.odt";
$result = SYSTEM::$libreOffice->convert($inputFile, $outputFile);

if ($result) {
    echo "Successfully converted {$inputFile} to {$outputFile}\n";
} else {
    echo "Error: Failed to convert {$inputFile} to {$outputFile}\n";
}

// Example 3: Convert docx to HTML
echo "\n\nExample 3: Converting docx to HTML\n";
$inputFile = "test/test.docx";
$outputFile = "test/converted.html";
$result = SYSTEM::$libreOffice->convert($inputFile, $outputFile);

if ($result) {
    echo "Successfully converted {$inputFile} to {$outputFile}\n";
} else {
    echo "Error: Failed to convert {$inputFile} to {$outputFile}\n";
}

// Quit the application
WINDOW::$app->quit();
?>