<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get and set window text for Skype application

// Step: Get the Skype window interface
$windowText = "Skype";
$skypeWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Get the text of the main visible window containing Skype
echo "Example 1: Get the text of the main visible window containing Skype\n";
$getTextResult = $skypeWindow->get_text();
if ($getTextResult !== "") {
    echo "Current window text: '" . $getTextResult . "'\n";
} else {
    echo "Failed to get window text\n";
}

// Example 2: Change the text of the Skype window
echo "Example 2: Change the text of the Skype window\n";
$newWindowText = "ICQ";
$setTextResult = $skypeWindow->set_text($newWindowText);
if ($setTextResult) {
    echo "Window text changed successfully to '" . $newWindowText . "'\n";
} else {
    echo "Failed to change window text\n";
}

// Quit the application
WINDOW::$app->quit();
?>