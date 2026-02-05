<?php
// Scenario: Get settings folder path
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
echo "1. Get folder where settings are located\n";
$settingsFolder = WINDOW::$app->get_settings_folder();
echo $settingsFolder;

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>