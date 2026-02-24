<?php
// Scenario: Get window by text containing specific content

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get Skype window for reference
$skypeText = "Skype";
echo("Step: Get Skype window for reference\n");
$skype = WINDOW::$window->get_by_text($skypeText);
$skypeTextResult = $skype->get_text();
echo("Found window with text: $skypeTextResult\n");

// Example 1: Get text of main visible window containing Skype text
echo("Example 1: Get text of main visible window containing Skype text\n");
$window1 = WINDOW::$window->get_by_text($skypeText);
$window1Text = $window1->get_text();
echo("Window containing '$skypeText' text: $window1Text\n");

// Example 2: Get text of main visible window with number 0
$windowNumber = 0;
echo("Example 2: Get text of main visible window with number 0\n");
$window2 = WINDOW::$window->get_by_number($windowNumber);
$window2Text = $window2->get_text();
echo("Window $windowNumber text: $window2Text\n");

// Quit the application
WINDOW::$app->quit();
?>