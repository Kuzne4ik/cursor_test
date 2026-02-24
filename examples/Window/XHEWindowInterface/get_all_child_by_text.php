<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get count and text of child windows with specified text
echo "\n";

// Step: Get the main window interface
$windowText = "Human";
$mainWindow = WINDOW::$window->get_by_text($windowText, false);

// Step: Define parameters for getting child windows by text
$childText = "кон";
$visibly = false;
$recursively = true;

// Example 1: Get count and text of child windows with specified text
echo "Example 1: Get count and text of child windows containing text '" . $childText . "'\n";
$childWindows = $mainWindow->get_all_child_by_text($childText, $visibly, $recursively);
$childCount = $childWindows->get_count();
echo "Found " . $childCount . " child windows containing text '" . $childText . "'\n";

// Display text of each child window
for($k = 0; $k < $childCount; $k++) {
    $childWindow = $childWindows->get($k);
    echo "Child window #" . ($k + 1) . " text: " . $childWindow->get_text() . "\n";
}

// Quit the application
WINDOW::$app->quit();
?>