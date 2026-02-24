<?php
// Scenario: Checking if a window exists on the screen.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all windows with the text "localhost"
$windowText1 = "localhost";
$targetWindows1 = WINDOW::$window->get_all_by_text($windowText1);
if ($targetWindows1->count() > 0) {
    $targetWindow1 = $targetWindows1[0];
    echo "Found window with text: '$windowText1'.\n";
    
    // Example is_exist: Check if the window exists
    echo "Example is_exist: Check if window exists: ";
    $isExists = $targetWindow1->is_exist();
    if ($isExists) {
        echo "Window exists.\n";
    } else {
        echo "Window does not exist.\n";
    }
} else {
    echo "No window found with text: '$windowText1'.\n";
}

// step 2: Get all windows with the text "Ptych"
$windowText2 = "Ptych";
$targetWindows2 = WINDOW::$window->get_all_by_text($windowText2);
if ($targetWindows2->count() == 0) {
    echo "No window found with text: '$windowText2'.\n";
} else {
    $targetWindow2 = $targetWindows2[0];
    echo "Found window with text: '$windowText2'.\n";
    
    // Example is_exist: Check if the window exists
    echo "Example is_exist: Check if window exists: ";
    $isExists = $targetWindow2->is_exist();
    if ($isExists) {
        echo "Window exists.\n";
    } else {
        echo "Window does not exist.\n";
    }
}

// Quit the application
WINDOW::$app->quit();
?>