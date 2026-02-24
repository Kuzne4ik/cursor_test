<?php
// Scenario: Shut down the computer
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Shut down the computer
echo "Shut down the computer: ";
$result = WINDOW::$windows->shutdown();
if ($result) {
    echo "Successfully initiated shutdown\n";
} else {
    echo "Failed to initiate shutdown\n";
}

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>