<?php
// Scenario: Get the screen width for different monitors
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Start the script
echo "\n";

// Example 1: Get main screen resolution
echo "Get main screen resolution: ";
$screenWidth = WINDOW::$windows->get_screen_width();
echo $screenWidth . "x";
$screenHeight = WINDOW::$windows->get_screen_height();
echo $screenHeight . "\n";

// Example 2: Get monitor 0 resolution
$monitor0 = 0;
echo "\nGet monitor 0 resolution: ";
$width0 = WINDOW::$windows->get_screen_width($monitor0);
echo $width0 . "x";
$height0 = WINDOW::$windows->get_screen_height($monitor0);
echo $height0 . " ";
$width0NoFrame = WINDOW::$windows->get_screen_width($monitor0, false);
echo $width0NoFrame . "x";
$height0NoFrame = WINDOW::$windows->get_screen_height($monitor0, false);
echo $height0NoFrame . " ";

// Example 3: Get monitor 1 resolution
$monitor1 = 1;
echo "\nGet monitor 1 resolution: ";
$width1 = WINDOW::$windows->get_screen_width($monitor1);
echo $width1 . "x";
$height1 = WINDOW::$windows->get_screen_height($monitor1);
echo $height1 . " ";
$width1NoFrame = WINDOW::$windows->get_screen_width($monitor1, false);
echo $width1NoFrame . "x";
$height1NoFrame = WINDOW::$windows->get_screen_height($monitor1, false);
echo $height1NoFrame . " ";

// Example 4: Get monitor 2 resolution
$monitor2 = 2;
echo "\nGet monitor 2 resolution: ";
$width2 = WINDOW::$windows->get_screen_width($monitor2);
echo $width2 . "x";
$height2 = WINDOW::$windows->get_screen_height($monitor2);
echo $height2 . "\n";

// End
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>