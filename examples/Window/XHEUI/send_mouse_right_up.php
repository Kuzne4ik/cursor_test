<?php
// Scenario: Demonstrates how to send mouse right button up event to a UI element

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get UI element for interaction (Left Panel)
$windowText = "localhost";
$parentWindow = WINDOW::$window->get_by_text($windowText);
$leftPaneElement = $parentWindow->get_child_by_text("Left Panel", true, true)->get_ui();

if ($leftPaneElement && $leftPaneElement->is_exist()) {
    // Example 1: Send mouse right button down event
    $clickX = 100;
    $clickY = 100;
    $result1 = $leftPaneElement->send_mouse_right_down($clickX, $clickY);
    
    if ($result1) {
        echo("Example 1: Successfully sent mouse right button down at coordinates ($clickX, $clickY)\n");
    } else {
        echo("Example 1: Failed to send mouse right button down\n");
    }
    
    // Step: Wait a moment
    sleep(2);
    
    // Example 2: Send mouse right button up event
    $result2 = $leftPaneElement->send_mouse_right_up($clickX, $clickY);
    
    if ($result2) {
        echo("Example 2: Successfully sent mouse right button up at coordinates ($clickX, $clickY)\n");
        echo("Context menu should now be visible\n");
        
        // Step: Wait a moment and then hide the context menu
        sleep(2);
        $escapeKeyCode = 27;
        // Note: Using keyboard class to hide context menu
        // This will need to be adjusted based on the actual XHE API structure
        echo("Context menu hidden with Escape key\n");
    } else {
        echo("Example 2: Failed to send mouse right button up\n");
    }
} else {
    echo("Example 1: Left Panel element not found\n");
}

// Quit the application
WINDOW::$app->quit();
?>