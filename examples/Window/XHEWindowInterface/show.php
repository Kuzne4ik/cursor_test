<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Hide and show the XHE application window

// Step: Get the XHE window interface
$windowText = "localhost";
$xheWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Hide the XHE application window
echo "Example 1: Hide the XHE application window\n";
$showResult1 = $xheWindow->show(false);
if ($showResult1) {
    echo "XHE window hidden successfully\n";
} else {
    echo "Failed to hide XHE window\n";
}
sleep(2);

// Example 2: Show the XHE application window
echo "Example 2: Show the XHE application window\n";
$showResult2 = $xheWindow->show(true);
if ($showResult2) {
    echo "XHE window shown successfully\n";
} else {
    echo "Failed to show XHE window\n";
}

// Quit the application
WINDOW::$app->quit();
?>