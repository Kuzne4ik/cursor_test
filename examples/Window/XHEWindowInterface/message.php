<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Send WM_CLOSE message to close an application
echo "\n";

// Step: Get the FAR application window interface
$windowText = "Far";
$visibly = false;
$farWindow = WINDOW::$window->get_by_text($windowText, $visibly);

// Example 1: Close FAR application using WM_CLOSE message (0x0010)
echo "Example 1: Close FAR application using WM_CLOSE message (0x0010)\n";
$wmClose = 0x0010;
$wParam = 0;
$lParam = 0;
$messageResult = $farWindow->message($wmClose, $wParam, $lParam);
if ($messageResult) {
    echo "WM_CLOSE message sent successfully, FAR application closed\n";
} else {
    echo "Failed to send WM_CLOSE message\n";
}
sleep(1);

// Quit the application
WINDOW::$app->quit();
?>