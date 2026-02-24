<?php
// Scenario: Get paths to Windows special folders
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Get Windows folder
$windowsFolder = "Windows";
echo "Get Windows folder: ";
$windowsFolderPath = WINDOW::$windows->get_special_folder($windowsFolder);
echo $windowsFolderPath . "\n";

// Example 2: Get Temp folder
$tempFolder = "Temp";
echo "Get Temp folder: ";
$tempFolderPath = WINDOW::$windows->get_special_folder($tempFolder);
echo $tempFolderPath . "\n";

// Example 3: Get Startup folder
$startupFolder = "Startup";
echo "Get Startup folder: ";
$startupFolderPath = WINDOW::$windows->get_special_folder($startupFolder);
echo $startupFolderPath . "\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>