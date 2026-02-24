<?php
// Scenario: Demonstrates how to get the supported UI automation patterns of a UI element

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

// Example 1: Get supported UI automation patterns
$supportedPatterns = $xheElement->get_supported_patterns();

if ($supportedPatterns && is_array($supportedPatterns)) {
    echo("Example 1: Successfully retrieved supported UI automation patterns\n");
    echo("Supported patterns:\n");
    foreach($supportedPatterns as $index => $pattern) {
        echo("  Pattern #" . ($index + 1) . ": " . $pattern . "\n");
    }
} else {
    echo("Example 1: Failed to retrieve supported patterns or no patterns available\n");
}

// Quit the application
WINDOW::$app->quit();
?>