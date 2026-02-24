<?php
// Scenario: Reset monitor turn-off and sleep mode timers
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Reset monitor and sleep timers
echo "Reset monitor and sleep timers: ";
$result = WINDOW::$windows->keep_alive();
if ($result) {
    echo "Successfully reset monitor and sleep timers\n";
} else {
    echo "Failed to reset monitor and sleep timers\n";
}

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>