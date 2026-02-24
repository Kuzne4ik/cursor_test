<?php
// Scenario: Get the name of the local computer
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Get computer name
echo "Get computer name: ";
$computerName = WINDOW::$windows->get_computer_name();
echo $computerName . "\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>