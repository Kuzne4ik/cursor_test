<?php
// Scenario: Get all windows by specific numbers

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get texts of main visible windows with numbers 0,1,2
$windowNumbers = "0;1;2";
echo("Example 1: Get texts of main visible windows with numbers 0,1,2\n");
$windows_0_1_2 = WINDOW::$window->get_all_by_number($windowNumbers);
$windowTexts = $windows_0_1_2->get_text();
echo("Found " . count($windowTexts) . " windows with specified numbers\n");

// Quit the application
WINDOW::$app->quit();
?>