<?php
// Scenario: Log off the current Windows session
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Log off Windows session
echo "Log off Windows session: ";
$result = WINDOW::$windows->logoff();
if ($result) {
    echo "Successfully logged off\n";
} else {
    echo "Failed to log off\n";
}

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>