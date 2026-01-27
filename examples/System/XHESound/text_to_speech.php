<?php
// Scenario: Convert text to speech using various methods and voices

$xhe_host = "127.0.0.1:7010";
// Connect functional objects if not already connected
if (!isset($path)){
  $path = "../../../../../Templates/init.php";
  require($path);
}
// info
echo "\n<font color=blue>sound->" . basename (__FILE__) . "</font>\n";

// Example 1: Convert text to speech using API (default method)
// Input data
$text1 = "Hello, this is a test message.";
$outputFile1 = "test/tts_api_output.mp3";

echo("\n\nExample 1. Convert text to speech using API (default method): ");
$result1 = SYSTEM::$sound->text_to_speech($text1, $outputFile1);

if ($result1) {
    echo("true\n");
} else {
    echo("false\n");
}

// Example 2: Convert text to speech using API with specified voice
// Input data
$text2 = "Привет, это тестовое сообщение.";
$outputFile2 = "test/tts_api_voice.mp3";
$method2 = "api";
$voice2 = "nova";

echo("\n\nExample 2. Convert text to speech using API with specified voice: ");
$result2 = SYSTEM::$sound->text_to_speech($text2, $outputFile2, $method2, $voice2);

if ($result2) {
    echo("true\n");
} else {
    echo("false\n");
}

// Example 3: Convert text to speech using local method (piper-tts)
// Input data
$text3 = "Test message for local TTS.";
$outputFile3 = "test/tts_local_output.wav";
$method3 = "local";

echo("\n\nExample 3. Convert text to speech using local method (piper-tts): ");
$result3 = SYSTEM::$sound->text_to_speech($text3, $outputFile3, $method3);

if ($result3) {
    echo("true\n");
} else {
    echo("false\n");
}

// Example 4: Convert text to speech using local method with specified voice model
// Input data
$text4 = "Тестовое сообщение для локального синтеза.";
$outputFile4 = "test/tts_local_voice.wav";
$method4 = "local";
$voice4 = "ru_RU-denis-medium";

echo("\n\nExample 4. Convert text to speech using local method with specified voice model: ");
$result4 = SYSTEM::$sound->text_to_speech($text4, $outputFile4, $method4, $voice4);

if ($result4) {
    echo("true\n");
} else {
    echo("false\n");
}

// Quit the application
WINDOW::$app->quit();
?>
