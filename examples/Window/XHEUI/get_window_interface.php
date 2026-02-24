<?php
// Scenario: Demonstrates how to get the window interface from a UI element

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

// Example 1: Get window interface and its text
$windowInterface = $xheElement->get_window_interface();

if ($windowInterface) {
    $windowText = $windowInterface->get_text();
    echo("Example 1: Successfully retrieved window interface\n");
    echo("Window text: '" . $windowText . "'\n");
} else {
    echo("Example 1: Failed to retrieve window interface\n");
}

// Example 2: Get window interface from a nested UI element
// Step: Navigate to a nested element (zoom pane in status bar)
$childElement = $xheElement->get_child(0);
$nextElement = $childElement->get_next(1);
$zoomPane = $nextElement->get_child(0)->get_next();

// Step: Check if this UI element has a direct window
$zoomPaneWindowInfo = $zoomPane->get_window_info();
$zoomPaneInfo = $zoomPane->get_info();
echo("Zoom pane name: '" . $zoomPaneInfo->Name . "'\n");

// Example 3: Get window interface that contains this UI element
$containingWindow = $zoomPane->get_window_interface(true);

if ($containingWindow) {
    $windowClassName = $containingWindow->get_class_name();
    echo("Example 3: Successfully retrieved containing window interface\n");
    echo("Containing window class name: '" . $windowClassName . "'\n");
} else {
    echo("Example 3: Failed to retrieve containing window interface\n");
}

// Quit the application
WINDOW::$app->quit();
?>