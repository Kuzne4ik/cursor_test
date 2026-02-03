<?php
// Scenario: Put text to clipboard and paste it to a search engine

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
echo "1. Put text to clipboard: ";
echo SYSTEM::$clipboard->put_text($textToPut) . "\n";

// 2
$editorUrl = TEST_POLYGON_URL . "textarea.html";
echo "2. Naviagte to site: ";
echo WEB::$browser->navigate($editorUrl) . "\n";

// 3
$inputNumber = 0;
echo "3. Set focus to textarea 0: ";
echo DOM::$textarea->set_focus_by_number($inputNumber) . "\n";

// 4
echo "4. Paste text from clipboard: ";
echo WEB::$browser->paste() . "\n";

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>