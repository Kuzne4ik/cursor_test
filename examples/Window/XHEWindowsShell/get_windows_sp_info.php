<?php
// Scenario: Get Windows Service Pack information
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Get Windows Service Pack info
echo "Get Windows Service Pack info: ";
$spInfo = WINDOW::$windows->get_windows_sp_info();
echo $spInfo . "\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>