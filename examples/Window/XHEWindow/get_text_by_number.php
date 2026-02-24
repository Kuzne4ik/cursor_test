<?php
// Scenario: Get window text by window number

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get text of 0th main visible window (Human not in tray)
$windowNumber1 = 0;
$visible1 = true;
$main1 = true;
echo("Example 1: Get text of 0th main visible window (Human not in tray)\n");
$windowText1 = WINDOW::$window->get_text_by_number($windowNumber1, $visible1, $main1);
echo("Window $windowNumber1 text: $windowText1\n");

// Example 2: Get text of 1st main visible window (next window after emulator by alt+tab)
$windowNumber2 = 1;
$visible2 = true;
$main2 = true;
echo("Example 2: Get text of 1st main visible window (next window after emulator by alt+tab)\n");
$windowText2 = WINDOW::$window->get_text_by_number($windowNumber2, $visible2, $main2);
echo("Window $windowNumber2 text: $windowText2\n");

// Quit the application
WINDOW::$app->quit();
?>