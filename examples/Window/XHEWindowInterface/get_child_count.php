<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get count of child windows
echo "\n";

// Step: Get the main window interface
$windowText = "Human";
$mainWindow = WINDOW::$window->get_by_text($windowText, false);

// Example 1: Get count of first-level child windows of XHE
echo "Example 1: Get count of first-level child windows of XHE\n";
$firstLevelChildCount = $mainWindow->get_child_count();
echo "Number of first-level child windows: " . $firstLevelChildCount . "\n";

// Example 2: Get count of all child windows (including nested) of XHE
echo "Example 2: Get count of all child windows (including nested) of XHE\n";
$allChildCount = $mainWindow->get_child_count(true);
echo "Number of all child windows (including nested): " . $allChildCount . "\n";

// Quit the application
WINDOW::$app->quit();
?>