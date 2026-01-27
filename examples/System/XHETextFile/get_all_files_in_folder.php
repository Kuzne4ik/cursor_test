<?php 
// Scenario: Get all files and folders in a directory
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>textfile->" . basename (__FILE__) . "</font>\n";

// Example 1: Get all directories in Windows directory (1 level)
// Set folder path
$folderPath1 = "C:/Windows/";
// Set file filter (empty for all)
$fileFilter1 = "";
// Set recursive search
$recursive1 = false;
// Set folders only
$foldersOnly1 = true;
// Set timeout
$timeout1 = 60;

echo("1. Get all directories in folder $folderPath1 (1 level): \n");
$result1 = SYSTEM::$textfile->get_all_files_in_folder($folderPath1, $fileFilter1, $recursive1, $foldersOnly1, $timeout1);
echo($result1 . "\n");

// Example 2: Get all directories and subdirectories in Windows Help directory
// Set folder path
$folderPath2 = "C:/Windows/Help/";
// Set file filter (empty for all)
$fileFilter2 = "";
// Set recursive search
$recursive2 = true;
// Set folders only
$foldersOnly2 = true;
// Set timeout
$timeout2 = 900;

echo("\n2. Get all directories and subdirectories in folder $folderPath2: \n");
$result2 = SYSTEM::$textfile->get_all_files_in_folder($folderPath2, $fileFilter2, $recursive2, $foldersOnly2, $timeout2);
echo($result2 . "\n");

// Example 3: Get all exe files and directories in Windows folder
// Set folder path
$folderPath3 = "C:/Windows/";
// Set file filter
$fileFilter3 = "*.exe";
// Set recursive search
$recursive3 = false;
// Set folders only
$foldersOnly3 = false;
// Set timeout
$timeout3 = 900;

echo("\n3. Get all exe files and directories in folder $folderPath3: \n\n");
$result3 = SYSTEM::$textfile->get_all_files_in_folder($folderPath3, $fileFilter3, $recursive3, $foldersOnly3, $timeout3);
echo($result3);

// End
echo "\n";

// Quit the application
$app->quit();
?>