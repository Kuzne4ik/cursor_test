<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get Process ID of a window
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Get Process ID of the XHE window
echo "Example 1: Get Process ID of the XHE window\n";
$processId = $mainWindow->get_process_id();
echo "Process ID of window with text '" . $windowText . "': " . $processId . "\n";

// Quit the application
WINDOW::$app->quit();
?>