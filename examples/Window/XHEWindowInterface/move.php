<?php
// Scenario: Resize and move window
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get the application window interface
$windowText = "localhost";
$xheWindow = WINDOW::$window->get_by_text($windowText, false);

// Step: Define new window dimensions and position
$newWidth = 800;
$newHeight = 600;
$newX = 300;
$newY = 300;

// Example 1: Set new size for the application
echo "Example 1: Set new size for the application\n";
$resizeResult = $xheWindow->resize($newWidth, $newHeight);
if ($resizeResult) {
    echo "Application resized successfully to " . $newWidth . "x" . $newHeight . "\n";
} else {
    echo "Failed to resize application\n";
}
sleep(1);

// Example 2: Move the application to new position
echo "Example 2: Move the application to new position\n";
$moveResult = $xheWindow->move($newX, $newY);
if ($moveResult) {
    echo "Application moved successfully to position (" . $newX . ", " . $newY . ")\n";
} else {
    echo "Failed to move application\n";
}
sleep(1);

// Example 3: Maximize the application
echo "Example 3: Maximize the application\n";
$maximizeResult = $xheWindow->maximize();
if ($maximizeResult) {
    echo "Application maximized successfully\n";
} else {
    echo "Failed to maximize application\n";
}
sleep(1);

// Quit the application
WINDOW::$app->quit();
?>