<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get coordinates of a child window by text and interact with it
echo "\n";

// Step: Get the main window interface
$windowText = "Human";
$mainWindow = WINDOW::$window->get_by_text($windowText, false);

// Step: Define parameters for getting child window by text
$childText = "Инспектор Окон";
$visibly = true;
$recursively = true;

// Example 1: Get coordinates of the Window Inspector in XHE
echo "Example 1: Get coordinates of the Window Inspector in XHE\n";
$inspector = $mainWindow->get_child_by_text($childText, $visibly, $recursively);
$inspectorX = $inspector->get_x();
$inspectorY = $inspector->get_y();
echo "Window Inspector coordinates: X=" . $inspectorX . " Y=" . $inspectorY . "\n";

// Example 2: Close the Window Inspector by clicking on its close button
echo "Example 2: Close the Window Inspector by clicking on its close button\n";
// Calculate coordinates for the close button (top-right corner of the inspector)
$clickX = $inspectorX + $inspector->get_width() - 8;
$clickY = $inspectorY - 8;
$clickResult = $mouse->click_to_screen($clickX, $clickY);
if ($clickResult) {
    echo "Window Inspector closed successfully\n";
} else {
    echo "Failed to close Window Inspector\n";
}

// Quit the application
WINDOW::$app->quit();
?>