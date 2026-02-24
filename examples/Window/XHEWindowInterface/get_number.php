<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get number of a window
echo "\n";

// Step: Get the main window interface
$windowText = "Skype";
$mainWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Get number of the main visible window containing "Skype" text
echo "Example 1: Get number of the main visible window containing 'Skype' text\n";
$windowNumber = $mainWindow->get_number();
echo "Number of window with text '" . $windowText . "': " . $windowNumber . "\n";

// Quit the application
WINDOW::$app->quit();
?>