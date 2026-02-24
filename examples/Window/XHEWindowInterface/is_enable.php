<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Check if a window is enabled
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Check if the main visible window containing 'localhost' text is enabled
echo "Example 1: Check if the main visible window containing 'localhost' text is enabled\n";
$isEnableResult = $mainWindow->is_enable();
if ($isEnableResult) {
    echo "Window with text '" . $windowText . "' is enabled\n";
} else {
    echo "Window with text '" . $windowText . "' is disabled\n";
}

// Quit the application
WINDOW::$app->quit();
?>