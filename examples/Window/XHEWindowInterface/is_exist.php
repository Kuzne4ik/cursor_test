<?php
// Scenario: Check if a window exists
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Example 1: Check if main visible window containing application name exists
echo "Example 1: Check if main visible window containing application name exists\n";
$windowText1 = "localhost";
$xwebWindow1 = WINDOW::$window->get_by_text($windowText1);
$existsResult1 = $xwebWindow1->is_exist();
if ($existsResult1) {
    echo "Window with text '" . $windowText1 . "' exists\n";
} else {
    echo "Window with text '" . $windowText1 . "' does not exist\n";
}

// Example 2: Check if main visible window containing 'Ptych' exists
echo "Example 2: Check if main visible window containing 'Ptych' exists\n";
$windowText2 = "Ptych";
$xwebWindow2 = WINDOW::$window->get_by_text($windowText2);
$existsResult2 = $xwebWindow2->is_exist();
if ($existsResult2) {
    echo "Window with text '" . $windowText2 . "' exists\n";
} else {
    echo "No such window exists\n";
}

// Quit the application
WINDOW::$app->quit();
?>