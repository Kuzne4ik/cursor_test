<?php
// Scenario: Demonstrates how to check if a UI element exists

$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get UI element for interaction (AnyDesk application)
$windowText = "AnyDesk";
$anyDeskElement = WINDOW::$window->get_by_text($windowText)->get_ui_element();

// Example 1: Check if AnyDesk element exists
$existsBefore = $anyDeskElement->is_exist();

if ($existsBefore) {
    echo("Example 1: AnyDesk element exists\n");
    
    // Step: Close the AnyDesk window
    $anyDeskWindow = WINDOW::$window->get_by_text($windowText);
    $anyDeskWindow->close();
    
    // Wait a moment for the window to close
    sleep(1);
    
    // Example 2: Check if AnyDesk element still exists after closing
    $existsAfter = $anyDeskElement->is_exist();
    
    if ($existsAfter) {
        echo("Example 2: AnyDesk element still exists (window may not have closed)\n");
    } else {
        echo("Example 2: AnyDesk element no longer exists (window closed successfully)\n");
    }
} else {
    echo("Example 1: AnyDesk element does not exist\n");
    echo("Example 2: Cannot test after closing since element doesn't exist initially\n");
}

// Quit the application
WINDOW::$app->quit();
?>