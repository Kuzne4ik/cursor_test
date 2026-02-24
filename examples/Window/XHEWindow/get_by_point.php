<?php
// Scenario: Get window by specific point coordinates

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get text of window by point 10,10
$pointX1 = 10;
$pointY1 = 10;
echo("Example 1: Get text of window by point 10,10\n");
$window1 = WINDOW::$window->get_by_point($pointX1, $pointY1);
$window1Text = $window1->get_text();
echo("Window at point ($pointX1, $pointY1) text: $window1Text\n");

// Example 2: Get text of window by point 90,90
$pointX2 = 90;
$pointY2 = 90;
echo("Example 2: Get text of window by point 90,90\n");
$window2 = WINDOW::$window->get_by_point($pointX2, $pointY2);
$window2Text = $window2->get_text();
echo("Window at point ($pointX2, $pointY2) text: $window2Text\n");

// Quit the application
WINDOW::$app->quit();
?>