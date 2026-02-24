<?php
// Scenario: Demonstrates how to get the toggle state of a UI element

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get UI element for interaction
$windowText = "localhost";
$xheElement = WINDOW::$window->get_by_text($windowText)->get_ui_element();

// Example 1: Get toggle state
$toggleState = $xheElement->get_toggle_state();

if ($toggleState !== null) {
    echo("Example 1: Successfully retrieved toggle state\n");
    switch($toggleState) {
        case 0:
            echo("Toggle state: Off\n");
            break;
        case 1:
            echo("Toggle state: On\n");
            break;
        case 2:
            echo("Toggle state: Indeterminate\n");
            break;
        default:
            echo("Toggle state: Unknown (" . $toggleState . ")\n");
            break;
    }
} else {
    echo("Example 1: Failed to retrieve toggle state or element does not support toggle\n");
}

// Quit the application
WINDOW::$app->quit();
?>