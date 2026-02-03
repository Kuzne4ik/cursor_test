<?php
// Scenario: Convert speech from audio files to text using various methods

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../Templates/init.php";
  require($path);
}
// info
echo "\n<span >sound->" . basename (__FILE__) . "</span>\n";

// Example 1: Recognize speech from audio file using API (default method)
// Input data
$audioFile1 = "test/audio8.wav";

echo("\n\nExample 1. Recognize speech from audio file using API (default method): ");
$result1 = SYSTEM::$sound->speech_to_text($audioFile1);

if ($result1) {
    echo("true: " . $result1 . "\n");
} else {
    echo("false\n");
}

// Example 2: Recognize speech from audio file using API with specified language
// Input data
$audioFile2 = "test/audio8.wav";
$method2 = "api";
$language2 = "ru";

echo("\n\nExample 2. Recognize speech from audio file using API with specified language: ");
$result2 = SYSTEM::$sound->speech_to_text($audioFile2, $method2, $language2);

if ($result2) {
    echo("true: " . $result2 . "\n");
} else {
    echo("false\n");
}

// Example 3: Recognize speech from audio file using local method (whisper.cpp)
// Input data
$audioFile3 = "test/audio8.wav";
$method3 = "local";

echo("\n\nExample 3. Recognize speech from audio file using local method (whisper.cpp): ");
$result3 = SYSTEM::$sound->speech_to_text($audioFile3, $method3);

if ($result3) {
    echo("true: " . $result3 . "\n");
} else {
    echo("false\n");
}

// Example 4: Recognize speech from audio file using local method with specified language and model
// Input data
$audioFile4 = "test/audio8.wav";
$method4 = "local";
$language4 = "ru";
$timeout4 = 60;
$model4 = "ggml-base.bin";

echo("\n\nExample 4. Recognize speech from audio file using local method with specified language and model: ");
$result4 = SYSTEM::$sound->speech_to_text($audioFile4, $method4, $language4, $timeout4, $model4);

if ($result4) {
    echo("true: " . $result4 . "\n");
} else {
    echo("false\n");
}

// Example 5: Recognize speech from MP3 file using API
// Input data
$audioFile5 = "test/mp3/68323.mp3";

echo("\n\nExample 5. Recognize speech from MP3 file using API: ");
$result5 = SYSTEM::$sound->speech_to_text($audioFile5);

if ($result5) {
    echo("true: " . $result5 . "\n");
} else {
    echo("false\n");
}

// Quit the application
WINDOW::$app->quit();
?>
