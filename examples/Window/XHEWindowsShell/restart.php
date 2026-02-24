<?php
// Scenario: Restart the computer
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Restart the computer
echo "Restart the computer: ";
$result = WINDOW::$windows->restart();
if ($result) {
    echo "Successfully initiated restart\n";
} else {
    echo "Failed to initiate restart\n";
}

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>