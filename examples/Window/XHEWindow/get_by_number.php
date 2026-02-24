<?php
// Scenario: Get window by number with different visibility and main window filters

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

// Example 1: Get text of main visible window with number 0
$windowNumber1 = 0;
echo("Example 1: Get text of main visible window with number 0\n");
$window0 = WINDOW::$window->get_by_number($windowNumber1);
$window0Text = $window0->get_text();
echo("Window $windowNumber1 text: $window0Text\n");

// Example 2: Get text of window with number 100 (including invisible and child windows)
$windowNumber2 = 0;
$visible2 = false;
$main2 = false;
echo("Example 2: Get text of window with number 100 (including invisible and child windows)\n");
$window100 = WINDOW::$window->get_by_number($windowNumber2, $visible2, $main2);
$window100Text = $window100->get_text();
echo("Window with number $windowNumber2 text: $window100Text\n");

// Quit the application
WINDOW::$app->quit();
?>