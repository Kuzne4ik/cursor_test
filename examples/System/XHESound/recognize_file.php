<?php
// Scenario: Recognize speech from an audio file using CMU Sphinx

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>sound->" . basename (__FILE__) . "</font>\n";

// Example 1: Prepare audio file for recognition (convert to WAV with 8 kHz)
// Input data
$sourceFile = "test/mp3/4196092774.mp3";
$targetFile = "test/mp3/4196092774.wav";
$sampleRate = "8000";

echo("\n\nExample 1. Prepare audio file for recognition (convert to WAV with 8 kHz): ");
$convertResult = SYSTEM::$sound->convert_file($sourceFile, $targetFile, $sampleRate);

if ($convertResult) {
    echo("true\n");
} else {
    echo("false\n");
}

// Example 2: Recognize file with English digits (0-9) using CMU Sphinx
// Input data
$audioFile = "test/mp3/4196092774.wav";
$dictionaryPath = "digits/digits.dict";
$grammarPath = "digits/digits.gram";
$modelPath = "cmusphinx-en-us-8khz-5.2";
$additionalParams = "-samprate 8000 -remove_dc yes -remove_noise no -vad_threshold 3.4 -vad_prespeech 19 -vad_postspeech 37 -silprob 2.5";

echo("\n\nExample 2. Recognize file with English digits (0-9) using CMU Sphinx: ");
$recognizeResult = SYSTEM::$sound->recognize_file($audioFile, $dictionaryPath, $grammarPath, $modelPath, $additionalParams);

if ($recognizeResult) {
    echo("true\n");
} else {
    echo("false\n");
}

// Quit the application
WINDOW::$app->quit();
?>