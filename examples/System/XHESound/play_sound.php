<?php
// Scenario: Play a sound file from the system

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >sound->" . basename (__FILE__) . "</span>\n";

// Example 1: Play a Windows system sound file
// Input data
$soundFile = "C:/Windows/Media/tada.wav";

echo("\n\nExample 1. Play a Windows system sound file: ");
$playResult = SYSTEM::$sound->play_sound($soundFile);

if ($playResult) {
    echo("true\n");
} else {
    echo("false\n");
}

// Quit the application
WINDOW::$app->quit();
?>