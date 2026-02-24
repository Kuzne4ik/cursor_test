<?php
// Scenario: Get window by class name containing specific text

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get first main visible window whose class contains letter 'a'
$classFilter = "a";
echo("Example 1: Get first main visible window whose class contains letter 'a'\n");
$window = WINDOW::$window->get_by_class($classFilter);
$className = $window->get_class_name();
echo("Found window with class: $className\n");

// Quit the application
WINDOW::$app->quit();
?>