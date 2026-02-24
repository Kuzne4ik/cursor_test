<?php
// Scenario: Get all windows by class name containing specific text

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get windows whose class contains letter 'a'
$classFilter = "a";
echo("Example 1: Get windows whose class contains letter 'a'\n");
$windows = WINDOW::$window->get_all_by_class($classFilter);
$windowClasses = $windows->get_class_name();
echo("Found " . count($windowClasses) . " windows with class containing 'a'\n");

// Quit the application
WINDOW::$app->quit();
?>