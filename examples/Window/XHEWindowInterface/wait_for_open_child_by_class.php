<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Wait for child window to open by class name

// Step: Get the Human Emulator window interface
$windowText = "Human";
$visibly = false;
$xheWindow = WINDOW::$window->get_by_text($windowText, $visibly);

// Example 1: Wait for child window to open by class name
echo "Example 1: Wait for child window to open by class name\n";
$childClassName = "Scintilla";
$childVisibly = false;
$childRecursively = true;
$waitResult = $xheWindow->wait_for_open_child_by_class($childClassName, $childVisibly, $childRecursively);
if ($waitResult) {
    echo "Child window with class '" . $childClassName . "' opened successfully\n";
} else {
    echo "Failed to wait for child window with class '" . $childClassName . "' to open\n";
}

// Quit the application
WINDOW::$app->quit();
?>