<?php
// Scenario: Get child window count by parent window number

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get child windows count for emulator (window 0, visible and main)
$windowNumber1 = 0;
$visible1 = true;
$main1 = true;
echo("Example 1: Get child windows count for emulator (window 0, visible and main)\n");
$childCount1 = WINDOW::$window->get_child_count_by_number($windowNumber1, $visible1, $main1);
echo("Child windows count for window $windowNumber1: $childCount1\n");

// Example 2: Get child windows count for window 4 (visible, including child windows)
$windowNumber2 = 4;
$visible2 = true;
$main2 = false;
echo("Example 2: Get child windows count for window 4 (visible, including child windows)\n");
$childCount2 = WINDOW::$window->get_child_count_by_number($windowNumber2, $visible2, $main2);
echo("Child windows count for window $windowNumber2: $childCount2\n");

// Quit the application
WINDOW::$app->quit();
?>