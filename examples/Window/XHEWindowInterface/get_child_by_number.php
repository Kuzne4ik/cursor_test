<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get text of child windows by number
echo "\n";

// Step: Get the main window interface
$windowText = "Human";
$mainWindow = WINDOW::$window->get_by_text($windowText, false);

// Example 1: Get text of all first-level child windows of XHE
echo "Example 1: Get text of all first-level child windows of XHE\n";
$firstLevelChildCount = $mainWindow->get_child_count();
echo "Found " . $firstLevelChildCount . " first-level child windows\n";
for ($k = 0; $k < $firstLevelChildCount; $k++) {
    $childWindow = $mainWindow->get_child_by_number($k);
    echo "Child window #" . ($k + 1) . " text: " . $childWindow->get_text() . "\n";
}

// Example 2: Get text of all child windows (including nested) of XHE
echo "\n\nExample 2: Get text of all child windows (including nested) of XHE\n";
$allChildCount = $mainWindow->get_child_count(true);
echo "Found " . $allChildCount . " child windows (including nested)\n";
for ($k = 0; $k < $allChildCount; $k++) {
    $childWindow = $mainWindow->get_child_by_number($k, true);
    echo "Child window #" . ($k + 1) . " text: " . $childWindow->get_text() . "\n";
}

// Quit the application
WINDOW::$app->quit();
?>