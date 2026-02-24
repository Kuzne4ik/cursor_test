<?php
// Scenario: Getting a child window by its class name, then getting the text of the next window in the Z-order.
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

    // step 2: Define the class name of the child window (e.g., "Left Pane")
    $childClassName = "XTPDockingPaneTabbedContainer";
    echo "Step 2: Define child window class name: $childClassName\n";

    // Example get_child_by_class: Get the child window by its class name
    echo "Example get_child_by_class: Get child window by class name '$childClassName': ";
    $leftPane = $mainWindow->get_child_by_class($childClassName);
    if ($leftPane->is_exist()) {
        $childX = $leftPane->get_x();
        $childY = $leftPane->get_y();
        echo "Child window found at coordinates: X=$childX, Y=$childY\n";

        // Example get_next: Get the text of the next window in the Z-order
        echo "Example get_next: Get text of the window next to the '$childClassName': ";
        $nextWindow = $leftPane->get_next();
        if ($nextWindow->is_exist()) {
            $nextWindowText = $nextWindow->get_text();
            echo "Next window text: '$nextWindowText'\n";
        } else {
            echo "No next window found.\n";
        }
    } else {
        echo "Child window with class name '$childClassName' not found.\n";
    }
} else {
    echo "Main window with text '$windowText' not found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>