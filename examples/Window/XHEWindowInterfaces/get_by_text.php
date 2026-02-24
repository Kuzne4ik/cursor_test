<?php
// Scenario: Getting a window by its text from a collection of all windows and retrieving its text.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all available windows
echo "Step 1: Get collection of all windows.\n";
$allWindows = WINDOW::$window->get_all();

// step 2: Define the text to search for in the window title
$windowText = "Notepad";
echo "Step 2: Define target window text: $windowText\n";

// Example get_by_text: Get the main visible window containing the specified text
echo "Example get_by_text: Get text of main visible window containing '$windowText': ";
$windowByText = $allWindows->get_by_text($windowText);
if ($windowByText->is_exist()) {
    $foundWindowText = $windowByText->get_text();
    echo "Window text: '$foundWindowText'\n";
} else {
    echo "No window found containing text '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>