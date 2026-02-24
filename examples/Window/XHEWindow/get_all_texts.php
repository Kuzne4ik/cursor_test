<?php
// Scenario: Get all window texts with different visibility and main window filters

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get texts of visible main windows
$visible1 = true;
$main1 = true;
echo("Example 1: Get texts of visible main windows\n");
$texts1 = WINDOW::$window->get_all_texts($visible1, $main1);
// Split the string by <br> to get individual window texts
$textArray1 = explode("<br>", $texts1);
echo("Found " . count($textArray1) . " visible main window texts\n");

// Example 2: Get texts of visible windows (including child windows)
$visible2 = true;
$main2 = false;
echo("Example 2: Get texts of visible windows (including child windows)\n");
$texts2 = WINDOW::$window->get_all_texts($visible2, $main2);
// Split the string by <br> to get individual window texts
$textArray2 = explode("<br>", $texts2);
echo("Found " . count($textArray2) . " visible window texts\n");

// Example 3: Get texts of main windows (including invisible)
$visible3 = false;
$main3 = true;
echo("Example 3: Get texts of main windows (including invisible)\n");
$texts3 = WINDOW::$window->get_all_texts($visible3, $main3);
// Split the string by <br> to get individual window texts
$textArray3 = explode("<br>", $texts3);
echo("Found " . count($textArray3) . " main window texts\n");

// Example 4: Get texts of all windows (including invisible and child windows)
$visible4 = false;
$main4 = false;
echo("Example 4: Get texts of all windows (including invisible and child windows)\n");
$texts4 = WINDOW::$window->get_all_texts($visible4, $main4);
// Split the string by <br> to get individual window texts
$textArray4 = explode("<br>", $texts4);
echo("Found " . count($textArray4) . " total window texts\n");

// Quit the application
WINDOW::$app->quit();
?>