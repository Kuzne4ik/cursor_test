<?php 
// Scenario: Create a new folder

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >textfile->" . basename (__FILE__) . "</span>\n";


// Example 1: Create a folder named test_create_folder
// Set folder name
$folderName = "test_create_folder";

// Delete folder if it exists
echo("Delete folder if it exists: $folderName\n");
SYSTEM::$folder->delete($folderName);

// Create folder
echo("1. Create folder with name $folderName in script directory : ");
$result = SYSTEM::$textfile->create_folder($folderName);
if ($result) {
    echo("true\n");
} else {
    echo("false\n");
}

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>