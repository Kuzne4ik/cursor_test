<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get text of all parent windows of a child element
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Step: Get a child window by text
$childText = "Панель";
$visibly = false;
$childWindow = $mainWindow->get_child_by_text($childText, $visibly);

// Example 1: Get text of all parent windows of the child element
echo "Example 1: Get text of all parent windows of the child element with text '" . $childText . "'\n";
$parentWindows = $childWindow->get_all_parent();
$parentWindowTexts = $parentWindows->get_text();
print_r($parentWindowTexts);

// Quit the application
WINDOW::$app->quit();
?>