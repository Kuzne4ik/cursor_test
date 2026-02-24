<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get coordinates of a child window by class and interact with it
echo "\n";

// Step: Get the main window interface
$windowText = "Human";
$mainWindow = WINDOW::$window->get_by_text($windowText, false);

// Step: Define parameters for getting child window by class
$childClass = "Scintilla";
$visibly = false;
$recursively = true;

// Example 1: Get coordinates of the Left Panel in XHE
echo "Example 1: Get coordinates of the Left Panel in XHE\n";
$leftPane = $mainWindow->get_child_by_class($childClass, $visibly, $recursively);
$leftPaneX = $leftPane->get_x();
$leftPaneY = $leftPane->get_y();
echo "Left Panel coordinates: X=" . $leftPaneX . " Y=" . $leftPaneY . "\n";

// Example 2: Hide the left panel by clicking on its close button
echo "Example 2: Hide the left panel by clicking on its close button\n";
// Calculate coordinates for the close button (top-right corner of the panel)
$clickX = $leftPaneX + $leftPane->get_width() - 28;
$clickY = $leftPaneY - 55;
$clickResult = $mouse->click_to_screen($clickX, $clickY);
if ($clickResult) {
    echo "Left panel hidden successfully\n";
} else {
    echo "Failed to hide left panel\n";
}

// Quit the application
WINDOW::$app->quit();
?>