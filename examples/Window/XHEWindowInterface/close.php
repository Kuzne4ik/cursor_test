<?php
// Scenario: Close a window application
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get the window interface by text
$windowText = "Far";
$farWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Close the FAR application window
echo "Example 1: Close the FAR application window\n";
$closeResult = $farWindow->close();
if ($closeResult) {
    echo "FAR window closed successfully\n";
} else {
    echo "Failed to close FAR window\n";
}

// Quit the application
WINDOW::$app->quit();
?>