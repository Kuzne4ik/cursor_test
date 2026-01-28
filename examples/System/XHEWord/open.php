<?php 
// Scenario: Open Word document stream
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($filePath)){
  $filePath = "../../../../../Templates/init.php";
  require($filePath);
}

// info
echo "\n<font color=blue>word->" . basename (__FILE__) . "</font>\n";

// Kill any existing Word app processes
SYSTEM::$word->kill();

// Word file format 'docx'
$filePath = "test/test.docx";

// Example 1: Open stream for exists Word file format 'docx'
$isReadOnly = false;
echo("\n1: Open stream for exists Word file format 'docx' for read only: ");
$openResult = SYSTEM::$word->open($filePath, $isReadOnly);
if ($openResult)
  echo("Word file '$filePath' opened successfully");
else
  echo("Word file '$filePath' open fail");


// Close stream with file: ");
echo("\nClose exists Word file: ");
$closeResult = SYSTEM::$word->close($filePath);
if ($closeResult)
  echo("Word file '$filePath' closed successfully");
else
  echo("Word file '$filePath' close fail");

echo "\n";

// Quit
$app->quit();
?>