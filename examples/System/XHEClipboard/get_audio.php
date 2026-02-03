<?php
// Scenario: Get audio data from clipboard

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<span >clipboard->" . basename (__FILE__) . "</span>\n";

// 1
echo "1. Get audio from clipboard: ";
$audio = SYSTEM::$clipboard->get_audio();
if ($audio) {
    echo "Audio received, length: " . strlen($audio) . " characters\n";
} else {
    echo "Audio is missing\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
