<?php
// Scenario: Get clipboard formats before and after adding text

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
echo "1. Clear clipboard: ";
echo SYSTEM::$clipboard->clear() . "\n";

// 2
echo "2. Get format list from empty clipboard: ";
$formats = SYSTEM::$clipboard->get_formats();
if ($formats) {
    echo "Formats found: " . implode(", ", $formats) . "\n";
} else {
    echo "Formats are missing\n";
}

// 3
$textToPut = "test text";
echo "3. Set text to clipboard: ";
echo SYSTEM::$clipboard->put_text($textToPut) . "\n";

// 4
echo "4. Get format list after setting text: ";
$formats = SYSTEM::$clipboard->get_formats();
if ($formats) {
    echo "Formats found: " . implode(", ", $formats) . "\n";
} else {
    echo "Formats are missing\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
