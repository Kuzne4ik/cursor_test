<?php
// Scenario: Put text to clipboard and get it back

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
$textToPut = "some text";
echo "1. Put '$textToPut' to clipboard 'test text for size check': ";
echo SYSTEM::$clipboard->put_text($textToPut) . "\n";

// 2
echo "2. Get current text from clipboard: ";
echo SYSTEM::$clipboard->get_text();

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>