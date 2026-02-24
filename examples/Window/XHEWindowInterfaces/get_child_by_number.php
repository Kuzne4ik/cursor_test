<?php
// Scenario: Iterating through all child windows of a main window by their index number and getting their text.
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

    // step 2: Get the total number of child windows
    echo "Step 2: Get total number of child windows: ";
    $childCount = $mainWindow->get_child_count();
    echo $childCount . "\n";

    if ($childCount > 0) {
        echo "Iterating through child windows:\n";
        // Example get_child_by_number: Get each child window by its number and print its text
        for ($i = 0; $i < $childCount; $i++) {
            echo "Example get_child_by_number: Get child window number $i: ";
            $childWindow = $mainWindow->get_child_by_number($i);
            if ($childWindow->is_exist()) {
                $childText = $childWindow->get_text();
                echo "Text: '$childText'\n";
            } else {
                echo "Child window number $i does not exist.\n";
            }
        }
    } else {
        echo "The main window has no child windows.\n";
    }
} else {
    echo "Main window with text '$windowText' not found.\n";
}

// Quit the application
WINDOW::$app->quit();
?>