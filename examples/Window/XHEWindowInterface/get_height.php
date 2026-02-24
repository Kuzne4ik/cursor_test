<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get window position and dimensions
echo "\n";

// Step: Get the main window interface
$windowText = "Human";
$mainWindow = WINDOW::$window->get_by_text($windowText, false);

// Example 1: Get position and dimensions of the window on the desktop
echo "Example 1: Get position and dimensions of the window on the desktop\n";
$windowX = $mainWindow->get_x();
$windowY = $mainWindow->get_y();
$windowWidth = $mainWindow->get_width();
$windowHeight = $mainWindow->get_height();

echo "Window position and dimensions:\n";
echo "X=" . $windowX . "\n";
echo "Y=" . $windowY . "\n";
echo "Width=" . $windowWidth . "\n";
echo "Height=" . $windowHeight . "\n";

// Quit the application
WINDOW::$app->quit();
?>