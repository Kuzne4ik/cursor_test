<?php 
// Scenario: Collect text files from folders into a single file
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>textfile->" . basename (__FILE__) . "</font>\n";

// Example 1: Collect all text files from test_folder to a single file
// Set source folder
$sourceFolder = "test_folder";
// Set target file
$targetFile = "test/test_txt_collected.txt";
// Set timeout
$timeout = 60;

echo("1. Collect all text files in folder $sourceFolder to file $targetFile : ");
$result = SYSTEM::$textfile->collect_from_folders_to_file($sourceFolder, $targetFile, $timeout);
if ($result) {
    echo("true\n");
} else {
    echo("false\n");
}

// Example 2: Collect all bat and xml files from test_folder to a single file
// Set source folder
$sourceFolder2 = "test_folder";
// Set target file
$targetFile2 = "test/test_xml_bat_collected.txt";
// Set timeout
$timeout2 = 60;
// Set file extensions
$extensions = "bat;xml";

echo("2. Collect all bat and xml files in folder $sourceFolder2 to file $targetFile2 : ");
$result2 = SYSTEM::$textfile->collect_from_folders_to_file($sourceFolder2, $targetFile2, $timeout2, $extensions);
if ($result2) {
    echo("true\n");
} else {
    echo("false\n");
}

// End
echo "\n";

// Quit the application
$app->quit();
?>