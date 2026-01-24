<?php 
// Scenario: Demonstrates how to convert Excel files between different formats

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Kill any existing Excel processes
SYSTEM::$excel->kill();

// Example 1: Convert xlsx to xls
echo("\nExample 1: Convert xlsx to xls\n");

// Set variables for method arguments
$sourceFile1 = "test/test_to_convert.xls";
$targetFile1 = "test/test_from_xlsx.xls";

// Convert xlsx to xls
$result = SYSTEM::$excel->convert($sourceFile1, $targetFile1);
if ($result) {
    echo("Successfully converted $sourceFile1 to $targetFile1\n");
} else {
    echo("Failed to convert $sourceFile1 to $targetFile1\n");
}

// Example 2: Convert xls to xlsx
echo("\nExample 2: Convert xls to xlsx\n");

// Set variables for method arguments
$sourceFile2 = "test/test_from_xlsx.xls";
$targetFile2 = "test/test_from_xls.xlsx";

// Convert xls to xlsx
$result = SYSTEM::$excel->convert($sourceFile2, $targetFile2);
if ($result) {
    echo("Successfully converted $sourceFile2 to $targetFile2\n");
} else {
    echo("Failed to convert $sourceFile2 to $targetFile2\n");
}

// Example 3: Convert xlsx to csv (comma delimiter not used)
echo("\nExample 3: Convert xlsx to csv (comma delimiter not used)\n");

// Set variables for method arguments
$sourceFile3 = "test/test_to_convert.xlsx";
$targetFile3 = "test/test_from_xlsx.csv";

// Convert xlsx to csv
$result = SYSTEM::$excel->convert($sourceFile3, $targetFile3);
if ($result) {
    echo("Successfully converted $sourceFile3 to $targetFile3\n");
} else {
    echo("Failed to convert $sourceFile3 to $targetFile3\n");
}

// Example 4: Convert xlsx to txt (tab delimiter not used)
echo("\nExample 4: Convert xlsx to txt (tab delimiter not used)\n");

// Set variables for method arguments
$sourceFile4 = "test/test_to_convert.xlsx";
$targetFile4 = "test/test_from_xlsx.txt";

// Convert xlsx to txt
$result = SYSTEM::$excel->convert($sourceFile4, $targetFile4);
if ($result) {
    echo("Successfully converted $sourceFile4 to $targetFile4\n");
} else {
    echo("Failed to convert $sourceFile4 to $targetFile4\n");
}

// Example 5: Convert xlsx to html
echo("\nExample 5: Convert xlsx to html\n");

// Set variables for method arguments
$sourceFile5 = "test/test_to_convert.xlsx";
$targetFile5 = "test/test_from_xlsx.html";

// Convert xlsx to html
$result = SYSTEM::$excel->convert($sourceFile5, $targetFile5);
if ($result) {
    echo("Successfully converted $sourceFile5 to $targetFile5\n");
} else {
    echo("Failed to convert $sourceFile5 to $targetFile5\n");
}

// Example 6: Convert csv to xlsx with comma delimiter
echo("\nExample 6: Convert csv to xlsx with comma delimiter\n");

// Set variables for method arguments
$sourceFile6 = "test/test_to_convert_comma.csv";
$targetFile6 = "test/test_from_comma_csv.xlsx";
$maxRows6 = 3000;
$delimiter6 = ",";

// Convert csv to xlsx with comma delimiter
$result = SYSTEM::$excel->convert($sourceFile6, $targetFile6, $maxRows6, $delimiter6);
if ($result) {
    echo("Successfully converted $sourceFile6 to $targetFile6 with comma delimiter\n");
} else {
    echo("Failed to convert $sourceFile6 to $targetFile6 with comma delimiter\n");
}

// Example 7: Convert csv to xlsx with semicolon delimiter
echo("\nExample 7: Convert csv to xlsx with semicolon delimiter\n");

// Set variables for method arguments
$sourceFile7 = "test/test_to_convert_semicolon.csv";
$targetFile7 = "test/test_from_semicolon_csv.xlsx";
$maxRows7 = 3000;
$delimiter7 = ";";

// Convert csv to xlsx with semicolon delimiter
$result = SYSTEM::$excel->convert($sourceFile7, $targetFile7, $maxRows7, $delimiter7);
if ($result) {
    echo("Successfully converted $sourceFile7 to $targetFile7 with semicolon delimiter\n");
} else {
    echo("Failed to convert $sourceFile7 to $targetFile7 with semicolon delimiter\n");
}

// Quit the application
WINDOW::$app->quit();
?>
