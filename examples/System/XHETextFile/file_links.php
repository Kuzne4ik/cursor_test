<?php 
// Scenario: Format file content with different line separators
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>textfile->" . basename (__FILE__) . "</font>\n";

// Format file content

// Set source file
$sourceFile = "Test.txt";
// Set timeout
$timeout = 10;

// Read source file
$fileContent = SYSTEM::$textfile->read_file($sourceFile, $timeout);
echo "Source file $sourceFile : \n";
$fileContent = str_replace("\r\n", "\n", $fileContent);
echo $fileContent . "\n\n";

// Example 1: Format with new line separator
// Set target file
$targetFile1 = "Linked.txt";
// Set separator type (default is new line)
$separator1 = "";

echo "1. Format content of file $sourceFile, write result to $targetFile1 (lines separated by new line): \n\n";
$result1 = SYSTEM::$textfile->file_links($sourceFile, $targetFile1, $timeout, $separator1);
if ($result1 == "true") {
    $content = SYSTEM::$textfile->read_file($targetFile1, $timeout);
    $content = str_replace("\r\n", "\n", $content);
    echo "Result file: \n" . $content . "\n";
} else {
    echo "Operation NOT performed!";
}

echo "\n";

// Example 2: Format without separator
// Set target file
$targetFile2 = "Randed.txt";
// Set separator type (N - no separator)
$separator2 = "N";

echo "2. Format content of file $sourceFile, write result to $targetFile2 (lines without separator): \n\n";
$result2 = SYSTEM::$textfile->file_links($sourceFile, $targetFile2, $timeout, $separator2);
if ($result2 == "true") {
    $content = SYSTEM::$textfile->read_file($targetFile2, $timeout);
    $content = str_replace("\r\n", "\n", $content);
    echo "Result file: \n" . $content . "\n";
} else {
    echo "Operation NOT performed!";
}

echo "\n";

// Example 3: Format with space separator
// Set target file
$targetFile3 = "RandedSpace.txt";
// Set separator type (S - space)
$separator3 = "S";

echo "3. Format content of file $sourceFile, write result to $targetFile3 (lines separated by space):\n\n";
$result3 = SYSTEM::$textfile->file_links($sourceFile, $targetFile3, $timeout, $separator3);
if ($result3 == "true") {
    $content = SYSTEM::$textfile->read_file($targetFile3, $timeout);
    $content = str_replace("\r\n", "\n", $content);
    echo "Result file: \n" . $content . "\n";
} else {
    echo "Operation NOT performed!";
}

// End
echo "\n";

// Quit the application
$app->quit();
?>