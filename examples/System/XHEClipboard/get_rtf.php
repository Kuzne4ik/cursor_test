<?php
// Scenario: Get RTF text from clipboard

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
echo "1. Get RTF text from clipboard: ";
$rtf = SYSTEM::$clipboard->get_rtf();
if ($rtf) {
    echo "RTF received, length: " . strlen($rtf) . " characters\n";
    echo "Beginning of RTF: " . substr($rtf, 0, 50) . "...\n";
} else {
    echo "RTF is missing\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
