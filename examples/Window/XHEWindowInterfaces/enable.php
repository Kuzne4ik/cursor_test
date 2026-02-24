<?php
// Scenario: Disabling and then enabling a window application by its title text.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all windows with the text "localhost"
$windowText = "localhost";
$targetWindows = WINDOW::$window->get_all_by_text($windowText);
if ($targetWindows->count() > 0) {
    $targetWindow = $targetWindows[0];
    echo "Found window with text: $windowText\n";

    // Example enable 1: Disable the window
    echo "Example enable 1: Disable window: ";
    $isDisabled = $targetWindow->enable(false);
    if ($isDisabled) {
        echo "Window disabled successfully.\n";
    } else {
        echo "Failed to disable window.\n";
    }
    sleep(5);

    // Example enable 2: Enable the window
    echo "Example enable 2: Enable window: ";
    $isEnabled = $targetWindow->enable(true);
    if ($isEnabled) {
        echo "Window enabled successfully.\n";
    } else {
        echo "Failed to enable window.\n";
    }
} else {
    echo "No window found with text: $windowText\n";
}

// Quit the application
WINDOW::$app->quit();
?>