<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get coordinates of a child window and text of the previous window
echo "\n";

// Step: Get the main window interface
$windowText = "Human";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Step: Define parameters for getting child window by class
$childClass = "WindowsForms10.Scintilla";
$visibly = false;

// Example 1: Get coordinates of the Left Pane in XHE
echo "Example 1: Get coordinates of the Left Pane in XHE\n";
$mainWindowText = $mainWindow->get_text();
$leftPane = $mainWindow->get_child_by_class($childClass, $visibly);
$leftPaneX = $leftPane->get_x();
$leftPaneY = $leftPane->get_y();
echo "Main window text: " . $mainWindowText . "\n";
echo "Left Pane coordinates: X=" . $leftPaneX . " Y=" . $leftPaneY . "\n";

// Example 2: Get text of the window previous to the Left Pane
echo "Example 2: Get text of the window previous to the Left Pane\n";
$prevWindow = $leftPane->get_prev();
$prevWindowText = $prevWindow->get_text();
echo "Text of the previous window: " . $prevWindowText . "\n";

// Quit the application
WINDOW::$app->quit();
?>