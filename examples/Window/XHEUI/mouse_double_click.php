<?php
// Scenario: Demonstrates how to perform a double mouse click on a UI element

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get UI element for interaction (Debug Panel)
$windowText = "[localhost";
$parentWindow = WINDOW::$window->get_by_text($windowText);
$debugPanelElement = $parentWindow->get_child_by_text("Debug Panel", true, true)->get_ui_element();

if ($debugPanelElement && $debugPanelElement->is_exist()) {
    // Step: Wait a moment before double clicking
    sleep(1);
    
    // Example 1: Double click on the Debug Panel at specific coordinates
    $clickX = 100;
    $clickY = 90;
    $result = $debugPanelElement->mouse_double_click($clickX, $clickY);
    
    if ($result) {
        echo("Example 1: Successfully double clicked on Debug Panel at coordinates ($clickX, $clickY)\n");
    } else {
        echo("Example 1: Failed to double click on Debug Panel\n");
    }
} else {
    echo("Example 1: Debug Panel element not found\n");
}

// Quit the application
WINDOW::$app->quit();
?>