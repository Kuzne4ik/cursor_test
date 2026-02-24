<?php
// Scenario: Demonstrates how to wait for a UI element to close by a single property

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

// Step: Find the File menu
$propertyName = "Name";
$propertyValue = "File";
$fileMenuElement = $xheElement->get_by_property($propertyName, $propertyValue);

if ($fileMenuElement && $fileMenuElement->is_exist()) {
    // Step: Invoke the File menu to open it
    $invokeResult = $fileMenuElement->invoke();
    
    if ($invokeResult) {
        echo("File menu opened successfully\n");
        
        // Example 1: Wait for Print menu item to close
        $printPropertyName = "Name";
        $printPropertyValue = "Print";
        $result = $fileMenuElement->wait_for_ui_close_by_property($printPropertyName, $printPropertyValue);
        
        if ($result) {
            echo("Example 1: Successfully waited for Print menu item to close\n");
            echo("The Print menu item has been closed\n");
        } else {
            echo("Example 1: Failed to wait for Print menu item to close\n");
            echo("The Print menu item may not have closed\n");
        }
    } else {
        echo("Failed to open File menu\n");
    }
} else {
    echo("File menu element not found\n");
}

// Quit the application
WINDOW::$app->quit();
?>