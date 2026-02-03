<?php
// Scenario: Check for files in clipboard and get file list

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
echo "1. Check for files in clipboard: ";
echo SYSTEM::$clipboard->has_files() . "\n";

// 2
echo "2. Get file list from clipboard: ";
$files = SYSTEM::$clipboard->get_files();
if ($files) {
    echo "Files found: " . implode(", ", $files) . "\n";
} else {
    echo "Files are missing\n";
}

// end
echo "\n";

// Quit
WINDOW::$app->quit();
?>
