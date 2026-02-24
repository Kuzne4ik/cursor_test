<?php
// Scenario: Checking if a window is a child window (XHE main window).
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get XHE window by text
$windowText = "localhost";
$xheWindows = WINDOW::$window->get_all_by_text($windowText);
if ($xheWindows->count() > 0) {
    $xheWindow = $xheWindows[0];
    echo "Found XHE window with text: '$windowText'.\n";
    
    // Example is_child: Check if the XHE window is a child window
    echo "Example is_child: Check if XHE window is a child window: ";
    $isChild = $xheWindow->is_child();
    if (!$isChild) {
        echo "XHE window is a main (not child) window.\n";
    } else {
        echo "XHE window is a child window.\n";
    }
} else {
    echo "No XHE window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>