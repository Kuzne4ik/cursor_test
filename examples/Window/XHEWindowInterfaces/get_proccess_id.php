<?php
// Scenario: Getting the process ID of a window (XHE window).
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
    
    // Example get_process_id: Get the process ID of the XHE window
    echo "Example get_process_id: Get process ID of XHE window: ";
    $processId = $xheWindow->get_process_id();
    if ($processId > 0) {
        echo "Process ID: $processId\n";
    } else {
        echo "Failed to get process ID or process ID is invalid.\n";
    }
} else {
    echo "No XHE window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>