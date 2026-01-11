<?php
// Scenario: Put audio data to clipboard and get it back

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>clipboard->" . basename (__FILE__) . "</font>\n";

// 1
$rawAudioData = "RIFF\x24\x00\x00\x00WAVEfmt \x10\x00\x00\x00\x01\x00\x01\x00\x44\xAC\x00\x00\x88X\x01\x00\x02\x00\x10\x00data\x00\x00\x00\x00";
echo "1. Create test audio data (short WAV): ";
$audioData = base64_encode($rawAudioData);
echo "Audio data created\n";

// 2
echo "2. Set audio to clipboard: ";
echo SYSTEM::$clipboard->put_audio($audioData) . "\n";

// 3
echo "3. Get audio back: ";
$audio = SYSTEM::$clipboard->get_audio();
if ($audio) {
    echo "Audio received, length: " . strlen($audio) . " characters\n";
} else {
    echo "Audio not received\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
