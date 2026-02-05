<?php
// Scenario: Toggle full screen mode
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "1. Switch program to full screen mode\n";
$enableFullScreen = true;
$fullScreenResult1 = WINDOW::$app->enable_full_screen($enableFullScreen);
if ($fullScreenResult1)
    echo "Full screen mode enabled successfully\n";
else
    echo "Failed to enable full screen mode\n";

// pause
sleep(3);

// Example 2
echo "\n\n2. Switch program from full screen mode\n";
$enableFullScreen = false;
$fullScreenResult2 = WINDOW::$app->enable_full_screen($enableFullScreen);
if ($fullScreenResult2)
    echo "Full screen mode disabled successfully\n";
else
    echo "Failed to disable full screen mode\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>