<?php
// Scenario: Getting a child window by its text, retrieving its coordinates, and simulating a mouse click to close it.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get the main window with the text "localhost"
$windowText = "localhost";
echo "Step 1: Get main window with text: $windowText\n";
$mainWindowInterfaces = WINDOW::$window->get_all_by_text($windowText);
if ($mainWindowInterfaces->count() > 0) {
    $mainWindow = $mainWindowInterfaces[0];
    echo "Main window found.\n";

    // step 2: Define the text of the child window (e.g., "Inspector")
    $childWindowText = "Inspector";
    echo "Step 2: Define child window text: $childWindowText\n";

    // Example get_child_by_text: Get the child window by its text
    echo "Example get_child_by_text: Get child window by text '$childWindowText': ";
    $inspectorPane = $mainWindow->get_child_by_text($childWindowText);
    if ($inspectorPane->is_exist()) {
        $childX = $inspectorPane->get_x();
        $childY = $inspectorPane->get_y();
        echo "Child window found at coordinates: X=$childX, Y=$childY\n";

        // step 3: Calculate click coordinates to close the pane
        $clickOffsetX = 8;
        $clickOffsetY = 8;
        $clickX = intval($childX) + intval($inspectorPane->get_width()) - $clickOffsetX;
        $clickY = intval($childY) + $clickOffsetY;
        echo "Step 3: Calculated click coordinates to close pane: X=$clickX, Y=$clickY\n";

        // Example mouse_click: Click to close the inspector pane
        echo "Example mouse_click: Close the inspector pane by clicking at ($clickX, $clickY): ";
        $isClicked = SYSTEM::$mouse->click_to_screen($clickX, $clickY);
        if ($isClicked) {
            echo "Inspector pane closed successfully.\n";
        } else {
            echo "Failed to close inspector pane.\n";
        }
    } else {
        echo "Child window with text '$childWindowText' not found.\n";
    }
} else {
    echo "Main window with text '$windowText' not found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>