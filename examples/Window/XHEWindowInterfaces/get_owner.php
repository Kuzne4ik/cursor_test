<?php
// Scenario: Getting the owner window of a child window (Left Pane in XHE).
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get XHE window by text
$windowText = "localhost";
$xheWindows = WINDOW::$window->get_all_by_text($windowText);
if ($xheWindows->count() > 0) {
    $xheWindow = $xheWindows[0];
    echo "Found XHE window with text: '$windowText'.\n";
    
    // step 2: Get Left Pane child window by class name
    $childClassName = "XTPDockingPaneTabbedContainer";
    $leftPane = $xheWindow->get_child_by_class($childClassName);
    if ($leftPane->is_exist()) {
        echo "Found Left Pane child window with class: '$childClassName'.\n";
        
        // step 3: Get coordinates of the Left Pane
        $xCoord = $leftPane->get_x();
        $yCoord = $leftPane->get_y();
        echo "Left Pane coordinates: X=$xCoord, Y=$yCoord\n";
        
        // Example get_owner: Get the owner window of the Left Pane
        echo "Example get_owner: Get owner window of Left Pane: ";
        $ownerWindow = $leftPane->get_owner();
        if ($ownerWindow->is_exist()) {
            $ownerText = $ownerWindow->get_text();
            echo "Owner window text: '$ownerText'\n";
        } else {
            echo "Failed to get owner window or owner does not exist.\n";
        }
    } else {
        echo "Left Pane child window not found.\n";
    }
} else {
    echo "No XHE window found with text: '$windowText'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>