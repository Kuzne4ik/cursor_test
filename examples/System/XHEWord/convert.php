<?php 
// Scenario: Convert Word documents between different formats
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >word->" . basename (__FILE__) . "</span>\n";

// Initialize variables
$convertedFolderPath = "test/converted";
$sourceDocPath = "test/test.doc";
$sourceDocxPath = "test/test.docx";

// Create folder for converted files
echo("Create folder for converted files: ");
$result = SYSTEM::$folder->create($convertedFolderPath);
if ($result) {
    echo("Successfully created folder\n");
} else {
    echo("Failed to create folder\n");
}

// Kill any existing Word processes
SYSTEM::$word->kill();

// Example 1: Convert from doc to docx
echo("\n1. Convert from doc to docx: ");
$result = SYSTEM::$word->convert($sourceDocPath, $convertedFolderPath . "/converted.docx");
if ($result) {
    echo("Successfully converted file\n");
} else {
    echo("Failed to convert file\n");
}

// Example 2: Convert from doc to pdf
echo("\n2. Convert from doc to pdf: ");
$result = SYSTEM::$word->convert($sourceDocPath, $convertedFolderPath . "/converted.pdf");
if ($result) {
    echo("Successfully converted file\n");
} else {
    echo("Failed to convert file\n");
}

// Example 3: Convert from docx to doc
echo("\n3. Convert from docx to doc: ");
$result = SYSTEM::$word->convert($sourceDocxPath, $convertedFolderPath . "/converted.doc");
if ($result) {
    echo("Successfully converted file\n");
} else {
    echo("Failed to convert file\n");
}

// Example 4: Convert from doc to html
echo("\n4. Convert from doc to html: ");
$result = SYSTEM::$word->convert($sourceDocPath, $convertedFolderPath . "/converted.html");
if ($result) {
    echo("Successfully converted file\n");
} else {
    echo("Failed to convert file\n");
}

// Example 5: Convert from docx to txt
echo("\n5. Convert from docx to txt: ");
$result = SYSTEM::$word->convert($sourceDocxPath, $convertedFolderPath . "/converted.txt");
if ($result) {
    echo("Successfully converted file\n");
} else {
    echo("Failed to convert file\n");
}

// Example 6: Convert from docx to rtf
echo("\n6. Convert from docx to rtf: ");
$result = SYSTEM::$word->convert($sourceDocxPath, $convertedFolderPath . "/converted.rtf");
if ($result) {
    echo("Successfully converted file\n");
} else {
    echo("Failed to convert file\n");
}

// Example 7: Convert from docx to webarchive
echo("\n7. Convert from docx to webarchive: ");
$result = SYSTEM::$word->convert($sourceDocxPath, $convertedFolderPath . "/converted.webarchive");
if ($result) {
    echo("Successfully converted file\n");
} else {
    echo("Failed to convert file\n");
}

// Example 8: Convert from docx to xlsx
echo("\n8. Convert from docx to xlsx: ");
$result = SYSTEM::$word->convert($sourceDocxPath, $convertedFolderPath . "/converted.xlsx");
if ($result) {
    echo("Successfully converted file\n");
} else {
    echo("Failed to convert file\n");
}

// Close source file
// Close any open documents
SYSTEM::$word->close($sourceDocxPath);
SYSTEM::$word->close($sourceDocPath);
echo "\n";
// Quit the application
WINDOW::$app->quit();
?>