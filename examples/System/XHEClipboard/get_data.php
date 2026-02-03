<?php
// Scenario: Get data from clipboard in different formats

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
$textToPut = "test data";
echo "1. Set text to clipboard '$textToPut': ";
echo SYSTEM::$clipboard->put_text($textToPut)."\n";

// 2
$formatText = "Text";
echo "2. Get data in Text format: ";
$data = SYSTEM::$clipboard->get_data($formatText);
if ($data) {
    echo "Data received: " . $data . "\n";
} else {
    echo "Data is missing\n";
}

// 3
$formatUnicodeText = "UnicodeText";
echo "3. Get data in UnicodeText format: ";
$data = SYSTEM::$clipboard->get_data($formatUnicodeText);
if ($data) {
    echo "Data received: " . $data . "\n";
} else {
    echo "Data is missing\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
