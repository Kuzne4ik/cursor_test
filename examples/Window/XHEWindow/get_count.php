<?php
// Scenario: Get window count with different visibility and main window filters

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Get count of visible main windows
$visible1 = true;
$main1 = true;
echo("Example 1: Get count of visible main windows\n");
$count1 = WINDOW::$window->get_count($visible1, $main1);
echo("Visible main windows count: $count1\n");

// Example 2: Get count of visible windows (including child windows)
$visible2 = true;
$main2 = false;
echo("Example 2: Get count of visible windows (including child windows)\n");
$count2 = WINDOW::$window->get_count($visible2, $main2);
echo("Visible windows count: $count2\n");

// Example 3: Get count of main windows (including invisible)
$visible3 = false;
$main3 = true;
echo("Example 3: Get count of main windows (including invisible)\n");
$count3 = WINDOW::$window->get_count($visible3, $main3);
echo("Main windows count: $count3\n");

// Example 4: Get count of all windows (including invisible and child windows)
$visible4 = false;
$main4 = false;
echo("Example 4: Get count of all windows (including invisible and child windows)\n");
$count4 = WINDOW::$window->get_count($visible4, $main4);
echo("Total windows count: $count4\n");

// Quit the application
WINDOW::$app->quit();
?>