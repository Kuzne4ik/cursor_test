<?php
// Scenario: Convert audio files between different formats

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>sound->" . basename (__FILE__) . "</font>\n";

// Example 1: Convert MP3 file to FLAC format
// Input data
$sourceFile = "test/mp3/68323.mp3";
$targetFile = "test/audio.flac";

echo("\n\nExample 1. Convert MP3 file to FLAC format: ");
$convertResult1 = SYSTEM::$sound->convert_file($sourceFile, $targetFile);

if ($convertResult1) {
    echo("true\n");
} else {
    echo("false\n");
}

// Example 2: Convert MP3 file to WAV format with 8 kHz sample rate
// Input data
$sourceFile2 = "test/mp3/68323.mp3";
$targetFile2 = "test/audio8.wav";
$sampleRate = "8000";

echo("\n\nExample 2. Convert MP3 file to WAV format with 8 kHz sample rate: ");
$convertResult2 = SYSTEM::$sound->convert_file($sourceFile2, $targetFile2, $sampleRate);

if ($convertResult2) {
    echo("true\n");
} else {
    echo("false\n");
}

// Quit the application
WINDOW::$app->quit();
?>