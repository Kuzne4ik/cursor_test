<?php
// Scenario: Clear clipboard content and verify it's empty

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
$textToPut = "seo";
echo "1. Put text to clipboard '$textToPut': ";
echo SYSTEM::$clipboard->put_text($textToPut) . "\n";

// 2
echo "2. Get text: ";
echo SYSTEM::$clipboard->get_text() . "\n";

// 3
echo "3. Clear clipboard: ";
echo SYSTEM::$clipboard->clear() . "\n";

// 4
echo "4. Get empty text: ";
echo SYSTEM::$clipboard->get_text() . "\n";

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>