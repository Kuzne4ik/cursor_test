<?php
// Scenario: Enable and disable a window
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get the XHE window interface
$windowText = "localhost";
$xheWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Disable the XHE window
echo "Example 1: Disable the XHE window\n";
$disableResult = $xheWindow->enable(false);
if ($disableResult) {
    echo "XHE window disabled successfully\n";
} else {
    echo "Failed to disable XHE window\n";
}
sleep(5);

// Example 2: Enable the XHE window
echo "Example 2: Enable the XHE window\n";
$enableResult = $xheWindow->enable(true);
if ($enableResult) {
    echo "XHE window enabled successfully\n";
} else {
    echo "Failed to enable XHE window\n";
}

// Quit the application
WINDOW::$app->quit();
?>