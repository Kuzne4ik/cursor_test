<?php
// Scenario: Demonstrates how to take screenshots of UI elements

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

// Step: Find a specific element to screenshot (Quick Start button)
$propertyName = "Name";
$propertyValue = "Quick Start";
$quickStartElement = $xheElement->get_by_property($propertyName, $propertyValue);

if ($quickStartElement && $quickStartElement->is_exist()) {
    // Example 1: Take full screenshot of the element
    $screenshotPath1 = "test/screenshot.png";
    $result1 = $quickStartElement->screenshot($screenshotPath1);
    
    if ($result1) {
        echo("Example 1: Successfully took full screenshot\n");
        echo("Screenshot saved to: $screenshotPath1\n");
        
        // Step: Open the screenshot for viewing
        WINDOW::$app->shell_execute("open", $screenshotPath1);
    } else {
        echo("Example 1: Failed to take full screenshot\n");
    }
    
    sleep(2);
    
    // Example 2: Take partial screenshot of the element
    $screenshotPath2 = "test/screenshot.png";
    $partialX = 5;
    $partialY = 5;
    $partialWidth = 45;
    $partialHeight = 12;
    $result2 = $quickStartElement->screenshot($screenshotPath2, $partialX, $partialY, $partialWidth, $partialHeight);
    
    if ($result2) {
        echo("Example 2: Successfully took partial screenshot\n");
        echo("Partial screenshot saved to: $screenshotPath2\n");
        echo("Partial area: x=$partialX, y=$partialY, width=$partialWidth, height=$partialHeight\n");
        
        // Step: Open the partial screenshot for viewing
        WINDOW::$app->shell_execute("open", $screenshotPath2);
    } else {
        echo("Example 2: Failed to take partial screenshot\n");
    }
} else {
    echo("Example 1: Quick Start element not found\n");
}

// Quit the application
WINDOW::$app->quit();
?>