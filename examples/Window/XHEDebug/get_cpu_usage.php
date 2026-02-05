<?php
// Scenario: Get current CPU usage percentage
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Example 1: Get CPU usage
echo "Example 1: Get CPU usage\n";
$cpuUsage = WINDOW::$debug->get_cpu_usage();
echo "CPU Usage: $cpuUsage%\n";

// Quit the application
WINDOW::$app->quit();
?>