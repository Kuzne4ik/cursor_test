<?php 
// Scenario: Set strings to a file at specific positions
$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>textfile->" . basename (__FILE__) . "</font>\n";

// Set file path
$filePath = "test/test_insert.txt";

// Delete file if it exists
echo("Delete file if it exists: $filePath\n");
SYSTEM::$file_os->delete($filePath);

// Example 1: Add strings to the beginning of file
echo("1. Add strings to the beginning of file $filePath : \n\n");
for ($i = 0; $i < 5; $i++) {
    // Set string to add
    $stringToAdd = "string №$i\n";
    // Set position (0 - beginning of file)
    $position = 0;
    
    $result = SYSTEM::$textfile->set_string_to_file($filePath, $stringToAdd, $position);
    if ($result) {
        echo("Added string at position $position: true\n");
    } else {
        echo("Added string at position $position: false\n");
    }
}

// Example 2: Replace string at the beginning of file
echo("\n2. Replace string at the beginning of file $filePath : \n\n");
// Set string to add
$stringToAdd = "string №100\n";
// Set position (0 - beginning of file)
$position = 0;
// Set overwrite flag (false - append, true - overwrite)
$overwrite = false;

$result = SYSTEM::$textfile->set_string_to_file($filePath, $stringToAdd, $position, $overwrite);
if ($result) {
    echo("Replaced string at position $position: true\n");
} else {
    echo("Replaced string at position $position: false\n");
}

// End
echo "\n";

// Quit the application
$app->quit();
?>