<?php
// Scenario: Get all windows by specific point coordinates

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get texts of main visible windows by point 10,10
$pointX = 10;
$pointY = 10;
echo("Example 1: Get texts of main visible windows by point 10,10\n");
$windows_10x10 = WINDOW::$window->get_all_by_point($pointX, $pointY);
$windowTexts = $windows_10x10->get_text();
echo("Found " . count($windowTexts) . " windows at point ($pointX, $pointY)\n");

// Quit the application
WINDOW::$app->quit();
?>