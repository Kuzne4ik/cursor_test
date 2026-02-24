<?php
// Scenario: Set focus to a window
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get the Skype window interface
$windowText = "Skype";
$skypeWindow = WINDOW::$window->get_by_text($windowText, false);

// Step: Bring Skype window to foreground
$foregroundResult = $skypeWindow->foreground();

// Example 1: Set focus to Skype window
echo "Example 1: Set focus to Skype window\n";
$focusResult = $skypeWindow->focus();
if ($focusResult && $foregroundResult) {
    echo "Skype window focused successfully\n";
} else {
    echo "Failed to focus Skype window\n";
}

sleep(2);

// Quit the application
WINDOW::$app->quit();
?>