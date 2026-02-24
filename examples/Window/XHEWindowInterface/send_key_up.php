<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Scenario: Set text in navigation by first letter using send_key_up

// Step: Get the main window interface
$windowText = "localhost";
$visibly = false;
$mainWindow = WINDOW::$window->get_by_text($windowText, $visibly);

// Step: Get the navigation input field through child elements
$childNumber1 = 0;
$toolbarClass = "XTPToolBar";
$richEditClass = "RichEdit";
$navigate = $mainWindow->get_child_by_number($childNumber1)
                               ->get_child_by_class($toolbarClass)
                               ->get_child_by_class($richEditClass);

// Example 1: Set text in navigation by first letter using send_key_up
echo "Example 1: Set text in navigation by first letter using send_key_up\n";

// Step: Define key codes and parameters
$yKeyCode = 89;
$yIsAlt = 1;
$aKeyCode = 65;
$aIsAlt = 1;

// Step: Send key up events
$sendKeyUpResult1 = $navigate->send_key_up($yKeyCode, $yIsAlt);
if ($sendKeyUpResult1) {
    echo "Y key up event sent successfully\n";
} else {
    echo "Failed to send Y key up event\n";
}

$sendKeyUpResult2 = $navigate->send_key_up($aKeyCode, $aIsAlt);
if ($sendKeyUpResult2) {
    echo "A key up event sent successfully\n";
} else {
    echo "Failed to send A key up event\n";
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