<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Wait for window to be available for input

// Step: Get the Human Emulator window interface
$windowText = "Human";
$visibly = false;
$xheWindow = WINDOW::$window->get_by_text($windowText, $visibly);

// Example 1: Wait for window to be available for input
echo "Example 1: Wait for window to be available for input\n";
$waitResult = $xheWindow->wait_for_input_idle();
if ($waitResult) {
    echo "Window is now available for input\n";
} else {
    echo "Failed to wait for window to be available for input\n";
}

// Quit the application
WINDOW::$app->quit();
?>