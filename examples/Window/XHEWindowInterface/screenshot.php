<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Take screenshots of the application window

// Step: Get the application window interface
$windowText = "localhost";
$visibly = false;
$xheWindow = WINDOW::$window->get_by_text($windowText, $visibly);

// Example 1: Take a screenshot of the application
echo "Example 1: Take a screenshot of the application\n";
$savePath1 = "test\\1.bmp";
$screenshotResult1 = $xheWindow->screenshot($savePath1);
if ($screenshotResult1) {
    echo "Screenshot saved successfully to: " . $savePath1 . "\n";
} else {
    echo "Failed to take screenshot\n";
}

// Step: Open the screenshot file
$shellExecuteResult1 = WINDOW::$app->shell_execute("open", $savePath1);
if ($shellExecuteResult1) {
    echo "Screenshot file opened successfully\n";
} else {
    echo "Failed to open screenshot file\n";
}
sleep(5);

// Example 2: Take a screenshot of the application including non-client area
echo "Example 2: Take a screenshot of the application including non-client area\n";
$savePath2 = "test\\1.bmp";
$x1 = -1;
$y1 = -1;
$x2 = -1;
$y2 = -1;
$includeNonClient = true;
$includeChildWindows = true;
$screenshotResult2 = $xheWindow->screenshot($savePath2, $x1, $y1, $x2, $y2, $includeNonClient, $includeChildWindows);
if ($screenshotResult2) {
    echo "Screenshot with non-client area saved successfully to: " . $savePath2 . "\n";
} else {
    echo "Failed to take screenshot with non-client area\n";
}

// Step: Open the screenshot file
$shellExecuteResult2 = WINDOW::$app->shell_execute("open", $savePath2);
if ($shellExecuteResult2) {
    echo "Screenshot file with non-client area opened successfully\n";
} else {
    echo "Failed to open screenshot file with non-client area\n";
}

// Quit the application
WINDOW::$app->quit();
?>