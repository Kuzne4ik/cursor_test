<?php
// Scenario: Demonstrates how to send key up events to a UI element

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get UI element for interaction (navigation element)
$windowText = "localhost";
$parentWindow = WINDOW::$window->get_by_text($windowText, false);
$childElement = $parentWindow->get_child_by_number(0);
$navigateElement = $childElement->get_child_by_class("RichEdit");

// Example 1: Send key up events for text input
$yKeyCode = 89; // Y key
$yResult = $navigateElement->send_key_up($yKeyCode, 1);

if ($yResult) {
    echo("Example 1: Successfully sent Y key up with modifier\n");
} else {
    echo("Example 1: Failed to send Y key up\n");
}

sleep(2);

// Step: Send Enter key
$enterKeyCode = 13;
$enterResult = $navigateElement->key($enterKeyCode);

if ($enterResult) {
    echo("Example 2: Successfully sent Enter key\n");
} else {
    echo("Example 2: Failed to send Enter key\n");
}

sleep(1);

// Example 3: Send A key up
$aKeyCode = 65; // A key
$aResult = $navigateElement->send_key_up($aKeyCode, 1);

if ($aResult) {
    echo("Example 3: Successfully sent A key up with modifier\n");
} else {
    echo("Example 3: Failed to send A key up\n");
}

// Quit the application
WINDOW::$app->quit();
?>