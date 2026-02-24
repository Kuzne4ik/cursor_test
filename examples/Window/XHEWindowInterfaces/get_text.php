<?php
// Scenario: Getting the text content of various windows (Skype window, window by number).
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get Skype window by text
$windowText = "Skype";
$skypeWindows = WINDOW::$window->get_all_by_text($windowText);
if ($skypeWindows->count() > 0) {
    $skypeWindow = $skypeWindows[0];
    echo "Found Skype window with text: '$windowText'.\n";
    
    // Example get_text: Get the text of the Skype window
    echo "Example get_text: Get text of Skype window: ";
    $skypeText = $skypeWindow->get_text();
    echo "Skype window text: '$skypeText'\n";
} else {
    echo "No Skype window found with text: '$windowText'.\n";
}

// step 2: Get window by number (visible)
$windowNumber = 0;
$visibleWindow = WINDOW::$window->get_by_number($windowNumber);
if ($visibleWindow->is_exist()) {
    echo "Found visible window with number: $windowNumber.\n";
    
    // Example get_text: Get the text of the visible window by number
    echo "Example get_text: Get text of visible window by number: ";
    $visibleText = $visibleWindow->get_text();
    echo "Visible window text: '$visibleText'\n";
} else {
    echo "No visible window found with number: $windowNumber.\n";
}

// step 3: Get window by number (all windows including hidden)
$allWindowNumber = 0;
$allWindow = WINDOW::$window->get_by_number($allWindowNumber, false, false);
if ($allWindow->is_exist()) {
    echo "Found window (including hidden) with number: $allWindowNumber.\n";
    
    // Example get_text: Get the text of the window by number (including hidden)
    echo "Example get_text: Get text of window by number (including hidden): ";
    $allWindowText = $allWindow->get_text();
    echo "Window text: '$allWindowText'\n";
} else {
    echo "No window found (including hidden) with number: $allWindowNumber.\n";
}

// Quit the application
WINDOW::$app->quit();
?>