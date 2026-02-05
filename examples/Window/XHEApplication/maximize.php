<?php
// Scenario: Maximize the main window
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// step
echo "1. Set main window position\n";
$x = 10;
$y = 10;
$width = 1200;
$height = 900;
$setPositionResult = WINDOW::$app->set_window_position($x, $y, $width, $height);
echo $setPositionResult."\n";

// pause
sleep(2);

// Example 1
echo "\n\n2. Maximize main window\n";
$maximizeResult = WINDOW::$app->maximize();
if ($maximizeResult)
    echo "Window maximized successfully\n";
else
    echo "Failed to maximize window\n";

// pause
sleep(2);

// Example 2
echo "\n\n3. Maximize main window in minimized state\n";
$minimized = true;
$maximizeMinimizedResult = WINDOW::$app->maximize($minimized);
if ($maximizeMinimizedResult)
    echo "Window maximized from minimized state successfully\n";
else
    echo "Failed to maximize window from minimized state\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>