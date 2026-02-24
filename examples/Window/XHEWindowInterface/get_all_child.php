<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get class names of child windows of an application
echo "\n";

// Step: Get the main window interface
$windowText = "Human";
$mainWindow = WINDOW::$window->get_by_text($windowText, false);

// Example 1: Get class names of immediate child windows of the application
echo "Example 1: Get class names of immediate child windows of the application\n";
$childWindows = $mainWindow->get_all_child();
$childClassNames = $childWindows->get_class_name();
print_r($childClassNames);

// Example 2: Get class names of all child windows (including nested) of the application
echo "\n\nExample 2: Get class names of all child windows (including nested) of the application\n";
$allChildWindows = $mainWindow->get_all_child(true);
$allChildClassNames = $allChildWindows->get_class_name();
print_r($allChildClassNames);

// Quit the application
WINDOW::$app->quit();
?>