<?php 
// Scenario: Collect files from folders and subfolders to a target folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";



// Example 1: Collect all text files from test_folder and its subfolders to test_colector_folder
// Set source folder
$sourceFolder = "test_folder";
// Set target folder
$targetFolder = "test_colector_folder";
// Set timeout
$timeout = 60;

echo("1. Collect all text files in folder $sourceFolder and its subfolders to folder $targetFolder : ");
$result = SYSTEM::$textfile->collect_from_folders_to_folder($sourceFolder, $targetFolder, $timeout);
if ($result) {
    echo("true\n\n");
} else {
    echo("false\n\n");
}

// Example 2: Show collected files
echo("2. Collected files: \n\n");
$folderItems = SYSTEM::$folder->get_all_items($targetFolder);
echo($folderItems);

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>
