<?php
// Scenario: Get all windows with different visibility and main window filters

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get texts of main visible windows
$visible = true;
$main = true;
echo("Example 1: Get texts of main visible windows\n");
$windows1 = WINDOW::$window->get_all();
$windowTexts1 = $windows1->get_text();
echo("Found " . count($windowTexts1) . " main visible windows\n");

// Example 2: Get texts of main windows (including invisible)
$visible2 = true;
$main2 = false;
echo("Example 2: Get texts of main windows (including invisible)\n");
$windows2 = WINDOW::$window->get_all($visible2, $main2);
$windowTexts2 = $windows2->get_text();
echo("Found " . count($windowTexts2) . " main windows\n");

// Example 3: Get texts of all windows (including child windows)
$visible3 = false;
$main3 = false;
echo("Example 3: Get texts of all windows (including child windows)\n");
$windows3 = WINDOW::$window->get_all($visible3, $main3);
$windowTexts3 = $windows3->get_text();
echo("Found " . count($windowTexts3) . " total windows\n");

// Quit the application
WINDOW::$app->quit();
?>