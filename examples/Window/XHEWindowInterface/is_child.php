<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Check if a window is a child window
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Check if the main visible window containing 'localhost' text is a child window
echo "Example 1: Check if the main visible window containing 'localhost' text is a child window\n";
$isChildResult = $mainWindow->is_child();
if (!$isChildResult) {
    echo "The window is a main window (not a child)\n";
} else {
    echo "The window is a child window\n";
}

// Quit the application
WINDOW::$app->quit();
?>