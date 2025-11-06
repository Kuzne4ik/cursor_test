<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_random_audio_fingerprint function

// Set random audio fingerprint with custom noise
$noiseAudio = "123456";
$noiseFrequence = "11";
$result2 = WEB::$browser->set_random_audio_fingerprint($noiseAudio, $noiseFrequence);

echo "\n\nSet random audio fingerprint with custom noise: " . ($result2 ? "Success" : "Failed");

// Set random audio fingerprint with different noise functions
$noise_functions = [
    "Math.random()",
    "Math.sin(Date.now())",
    "Math.cos(Date.now())",
    "Date.now() % 1000"
];

// Quit the application
WINDOW::$app->quit();
?>