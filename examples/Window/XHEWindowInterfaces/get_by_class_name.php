<?php
// Scenario: Getting a window by its class name from a collection of all windows and retrieving its text.
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// step 1: Get all available windows
echo "Step 1: Get collection of all windows.\n";
$allWindows = WINDOW::$window->get_all();

// step 2: Define the class name to search for
$targetClassName = "b";
echo "Step 2: Define target class name: $targetClassName\n";

// Example get_by_class_name: Get the main visible window containing 'b' in its class name
echo "Example get_by_class_name: Get text of main visible window with class name containing '$targetClassName': ";
$windowByClassName = $allWindows->get_by_class_name($targetClassName);
if ($windowByClassName->is_exist()) {
    $windowText = $windowByClassName->get_text();
    echo "Window text: '$windowText'\n";
} else {
    echo "No window found with class name containing '$targetClassName'.\n";
}

// Quit the application
WINDOW::$app->quit();
?>