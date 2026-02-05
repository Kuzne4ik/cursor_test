<?php
// Scenario: Set application window to always stay on top
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// beginning
echo "\n<font color=blue>app->" . basename (__FILE__) . "</font>\n";

// Example 1
echo "\n\n1. Make program 'always on top'\n";
$alwaysOnTop = true;
$setResult = WINDOW::$app->set_always_on_top($alwaysOnTop);
if ($setResult)
    echo "Always on top mode enabled successfully\n";
else
    echo "Failed to enable always on top mode\n";

// pause
sleep(5);

// Example 2
echo "\n\n2. Make program normal\n";
$alwaysOnTop = false;
$setResult = WINDOW::$app->set_always_on_top($alwaysOnTop);
if ($setResult)
    echo "Always on top mode disabled successfully\n";
else
    echo "Failed to disable always on top mode\n";

// end
echo "\n";

// Quit the application
WINDOW::$app->quit();
?>