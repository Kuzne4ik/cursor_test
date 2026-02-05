<?php
// Scenario: Set encoding for debug tabs
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Step: Display some text before changing encoding
echo "Step: Display text before changing encoding\n";
echo "лЇІп±»йЎЎ ";
sleep(3);

// Example 1: Set UTF-8 encoding for Debug tab
echo "\n\nExample 1: Set UTF-8 encoding for Debug tab\n";
$tabName1 = "Debug";
$encoding1 = "UTF-8";
$result1 = WINDOW::$debug->set_encoding($tabName1, $encoding1);
if ($result1)
    echo "Encoding set to $encoding1 for tab $tabName1\n";
else
    echo "Failed to set encoding to $encoding1 for tab $tabName1\n";

sleep(2);

// Step: Display some text in windows-1251
echo "\nStep: Display text in windows-1251\n";
echo "Some text in windows-1251 ";
sleep(2);

// Example 2: Set windows-1251 encoding for Отладка tab
echo "\n\nExample 2: Set windows-1251 encoding for Отладка tab\n";
$tabName2 = "Отладка";
$encoding2 = "windows-1251";
$result2 = WINDOW::$debug->set_encoding($tabName2, $encoding2);
if ($result2)
    echo "Encoding set to $encoding2 for tab $tabName2\n";
else
    echo "Failed to set encoding to $encoding2 for tab $tabName2\n";

// Quit the application
WINDOW::$app->quit();
?>