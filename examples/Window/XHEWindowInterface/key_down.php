<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Send key down and key up commands to navigation input
echo "\n";

// Step: Get the main window interface
$windowText = "localhost";
$mainWindow = WINDOW::$window->get_by_text($windowText, false);

// Step: Get the navigation input field through child elements
$childNumber1 = 0;
$toolbarClass = "XTPToolBar";
$richEditClass = "RichEdit";
$navigate = $mainWindow->get_child_by_number($childNumber1)
                         ->get_child_by_class($toolbarClass)
                         ->get_child_by_class($richEditClass);

// Example 1: Set text in navigation by first letter using key down and key up
echo "Example 1: Set text in navigation by first letter using key down and key up\n";
$keyChar = "g";
$keyDownResult = $navigate->key_down($keyChar);
$keyUpResult = $navigate->key_up($keyChar);
if ($keyDownResult && $keyUpResult) {
    echo "Key down and key up operations executed successfully\n";
} else {
    echo "Failed to execute key down and key up operations\n";
}
sleep(2);

// Example 2: Press Enter key to submit the navigation
echo "Example 2: Press Enter key to submit the navigation\n";
$enterKeyCode = 13;
$keyResult = $navigate->key($enterKeyCode);
if ($keyResult) {
    echo "Enter key pressed successfully\n";
} else {
    echo "Failed to press Enter key\n";
}
sleep(1);

// Quit the application
WINDOW::$app->quit();
?>