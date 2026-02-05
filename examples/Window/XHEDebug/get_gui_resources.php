<?php
// Scenario: Get GUI resource usage information
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

echo "\n<span>debug->" . basename(__FILE__) . "</span>\n";

// Get GUI resources
echo "Example 1: Get GUI resources\n";

// Example 1: Get current GDI count
$gdiCount = WINDOW::$debug->get_gui_resources(0);
echo "Current GDI count: $gdiCount\n";

// Example 2: Get current USER count
$userCount = WINDOW::$debug->get_gui_resources(1);
echo "Current USER count: $userCount\n";

// Example 3: Get maximum GDI count
$maxGdiCount = WINDOW::$debug->get_gui_resources(2);
echo "Maximum GDI count: $maxGdiCount\n";

// Example 4: Get maximum USER count
$maxUserCount = WINDOW::$debug->get_gui_resources(4);
echo "Maximum USER count: $maxUserCount\n";

// Quit the application
WINDOW::$app->quit();
?>