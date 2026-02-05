<?php
// Scenario: Get file from disk
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "1. Get file from disk\n";
$filePath = "test/file.txt";
$fileResult = WINDOW::$app->get_file_from_disk($filePath);
echo urldecode($fileResult);

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>