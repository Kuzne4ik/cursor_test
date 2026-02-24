<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get count of child windows with specified class
echo "\n";

// Step: Get the main window interface
$windowText = "Human";
$mainWindow = WINDOW::$window->get_by_text($windowText, false);

// Step: Define parameters for getting child windows by class
$childClass = "Window.8";
$visibly = false;
$recursively = true;

// Example 1: Get count of child windows with specified class
echo "Example 1: Get count of child windows with class '" . $childClass . "'\n";
$childWindows = $mainWindow->get_all_child_by_class($childClass, $visibly, $recursively);
$childCount = $childWindows->get_count();
echo "Found " . $childCount . " child windows with class '" . $childClass . "'\n";

// Quit the application
WINDOW::$app->quit();
?>