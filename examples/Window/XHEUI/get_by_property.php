<?php
// Scenario: Demonstrates how to find a UI element by a single property and invoke it

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

// Example 1: Click on the File menu
$propertyName = "Name";
$propertyValue = "Editor";
$menuElement = $xheElement->get_by_property($propertyName, $propertyValue);

if ($menuElement && $menuElement->is_exist()) {
    $result = $menuElement->invoke();
    if ($result) {
        echo("Example 1: Successfully invoked the Editor menu\n");
        sleep(2);
        
        // Step: Find and invoke the Find menu item
        $propertyName2 = "Name";
        $propertyValue2 = "Find";
        $exactly = false;
        $findMenuItem = $menuElement->get_by_property($propertyName2, $propertyValue2, $exactly);
        
        if ($findMenuItem && $findMenuItem->is_exist()) {
            $result2 = $findMenuItem->invoke();
            if ($result2) {
                echo("Example 1: Successfully invoked the Find menu item\n");
            } else {
                echo("Example 1: Failed to invoke the Find menu item\n");
            }
        } else {
            echo("Example 1: Find menu item not found\n");
        }
    } else {
        echo("Example 1: Failed to invoke the Editor menu\n");
    }
} else {
    echo("Example 1: Editor menu not found\n");
}

// Quit the application
WINDOW::$app->quit();
?>