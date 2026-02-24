<?php
// Scenario: Getting the class name of a window identified by its text or by its number.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get the main window with the text "Skype"
$windowText1 = "Skype";
echo "Step 1: Get main window with text: $windowText1\n";
$skypeWindowInterfaces = WINDOW::$window->get_all_by_text($windowText1);
if ($skypeWindowInterfaces->count() > 0) {
    $skypeWindow = $skypeWindowInterfaces[0];
    echo "Skype window found.\n";

    // Example get_class_name 1: Get class name of the Skype window
    echo "Example get_class_name 1: Get class name of window with text '$windowText1': ";
    $className1 = $skypeWindow->get_class_name();
    if ($className1 !== "") {
        echo "Class name: '$className1'\n";
    } else {
        echo "Failed to get class name for '$windowText1'.\n";
    }
} else {
    echo "Window with text '$windowText1' not found.\n";
}

// step 2: Get the main window by number 0
$windowNumber = 0;
$visibleOnly = true; // Assuming true for visible, false for all
echo "Step 2: Get main window by number: $windowNumber (visible only: " . ($visibleOnly ? 'true' : 'false') . ")\n";
$windowByNumberInterfaces = WINDOW::$window->get_all_by_number($windowNumber, $visibleOnly);
if ($windowByNumberInterfaces->count() > 0) {
    $windowByNumber = $windowByNumberInterfaces[0];
    echo "Window number $windowNumber found.\n";

    // Example get_class_name 2: Get class name of the window by number
    echo "Example get_class_name 2: Get class name of window number $windowNumber: ";
    $className2 = $windowByNumber->get_class_name();
    if ($className2 !== "") {
        echo "Class name: '$className2'\n";
    } else {
        echo "Failed to get class name for window number $windowNumber.\n";
    }
} else {
    echo "Window number $windowNumber not found.\n";
}

// step 3: Get the main window by number 0, including non-visible
$visibleOnlyAll = false;
echo "Step 3: Get main window by number: $windowNumber (visible only: " . ($visibleOnlyAll ? 'true' : 'false') . ")\n";
$windowByNumberAllInterfaces = WINDOW::$window->get_all_by_number($windowNumber, $visibleOnlyAll);
if ($windowByNumberAllInterfaces->count() > 0) {
    $windowByNumberAll = $windowByNumberAllInterfaces[0];
    echo "Window number $windowNumber (including non-visible) found.\n";

    // Example get_class_name 3: Get class name of the window by number (including non-visible)
    echo "Example get_class_name 3: Get class name of window number $windowNumber (including non-visible): ";
    $className3 = $windowByNumberAll->get_class_name();
    if ($className3 !== "") {
        echo "Class name: '$className3'\n";
    } else {
        echo "Failed to get class name for window number $windowNumber (including non-visible).\n";
    }
} else {
    echo "Window number $windowNumber (including non-visible) not found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>