<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get coordinates of a child window and text of the next window
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Step: Define parameters for getting child window by class
$childClass = "XTPDockingPaneTabbedContainer";

// Example 1: Get coordinates of the Left Pane in XHE
echo "Example 1: Get coordinates of the Left Pane in XHE\n";
$leftPane = $mainWindow->get_child_by_class($childClass);
$leftPaneX = $leftPane->get_x();
$leftPaneY = $leftPane->get_y();
echo "Left Pane coordinates: " . $leftPaneX . "x" . $leftPaneY . "\n";

// Example 2: Get text of the window next to the Left Pane
echo "Example 2: Get text of the window next to the Left Pane\n";
$nextWindow = $leftPane->get_next();
$nextWindowText = $nextWindow->get_text();
echo "Text of the next window: " . $nextWindowText . "\n";

// Quit the application
WINDOW::$app->quit();
?>