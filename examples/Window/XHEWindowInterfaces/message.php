<?php
// Scenario: Sending a Windows message to a window (e.g., WM_CLOSE to close an application).
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all windows with the text "Far"
$windowText = "Far";
$targetWindows = WINDOW::$window->get_all_by_text($windowText, false);
if ($targetWindows->count() > 0) {
    $targetWindow = $targetWindows[0];
    echo "Found window with text: '$windowText'.\n";
    
    // Example message: Send WM_CLOSE message to close the window
    echo "Example message: Send WM_CLOSE message (0x0010) to close the window: ";
    $wmClose = 0x0010; // Windows message constant for closing a window
    $wParam = 0;
    $lParam = 0;
    $messageSent = $targetWindow->message($wmClose, $wParam, $lParam);
    if ($messageSent) {
        echo "WM_CLOSE message sent successfully.\n";
        sleep(1);
    } else {
        echo "Failed to send WM_CLOSE message.\n";
    }
} else {
    echo "No window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>