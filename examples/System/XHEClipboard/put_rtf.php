<?php
// Scenario: Put RTF text to clipboard and get it back

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<span >clipboard->" . basename (__FILE__) . "</span>\n";

// RTF text
$rtfText = "{\\rtf1\\ansi\\deff0 {\\fonttbl {\\f0 Times New Roman;}} \\f0\\fs24 Hello, world!}";
echo "RTF created\n";

// 1
echo "1. Set RTF to clipboard: ";
echo SYSTEM::$clipboard->put_rtf($rtfText) . "\n";

// 2
echo "2. Get RTF string: ";
$rtf = SYSTEM::$clipboard->get_rtf();
if ($rtf) {
    echo "RTF received: " . $rtf . "\n";
} else {
    echo "RTF not received\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
