<?php
// Scenario: Get child window texts by parent window number

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get child window texts for application (window 0, visible and main)
$windowNumber1 = 0;
$visible1 = true;
$main1 = true;
echo("Example 1: Get child window texts for application (window 0, visible and main)\n");
$childTexts1 = WINDOW::$window->get_child_texts_by_number($windowNumber1, $visible1, $main1);
echo("Child window texts for window $windowNumber1: $childTexts1\n");

// Example 2: Get child window texts for window 5 (visible and main)
$windowNumber2 = 5;
$visible2 = true;
$main2 = true;
echo("Example 2: Get child window texts for window 5 (visible and main)\n");
$childTexts2 = WINDOW::$window->get_child_texts_by_number($windowNumber2, $visible2, $main2);
echo("Child window texts for window $windowNumber2: $childTexts2\n");

// Quit the application
WINDOW::$app->quit();
?>