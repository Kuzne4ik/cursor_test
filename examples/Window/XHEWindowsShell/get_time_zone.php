<?php
// Scenario: Get time zone information
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Get time zone name
$paramName = "name";
echo "Get time zone name: ";
$timeZoneName = WINDOW::$windows->get_time_zone($paramName);
echo $timeZoneName . "\n";

// Example 2: Get UTC difference in seconds
echo "\nGet UTC difference in seconds: ";
$utcDiff = WINDOW::$windows->get_time_zone();
echo $utcDiff . "\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>