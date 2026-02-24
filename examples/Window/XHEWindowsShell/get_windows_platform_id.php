<?php
// Scenario: Get the Windows platform identifier
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Get Windows platform ID
echo "Get Windows platform ID: ";
$platformId = WINDOW::$windows->get_windows_platform_id();
echo $platformId . "\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>