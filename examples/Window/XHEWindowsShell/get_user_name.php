<?php
// Scenario: Get the name of the logged-in Windows user
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Get user name
echo "Get user name: ";
$userName = WINDOW::$windows->get_user_name();
echo $userName . "\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>