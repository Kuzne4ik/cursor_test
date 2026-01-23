<?php
// Scenario: Get clipboard size before and after adding text

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
echo "1. Clear clipboard: ";
echo SYSTEM::$clipboard->clear() . "\n";

// 2
echo "2. Get size of empty clipboard: ";
echo SYSTEM::$clipboard->get_size() . "\n";

// 3
$textToPut = "test text for size check";
echo "3. Set text to clipboard '$textToPut': ";
echo SYSTEM::$clipboard->put_text($textToPut) . "\n";

// 4
echo "4. Get size of clipboard with text: ";
echo SYSTEM::$clipboard->get_size() . "\n";

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
