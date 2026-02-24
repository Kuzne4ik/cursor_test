<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get style information of a window
echo "\n";

// Step: Get the Skype window interface
$windowText = "Skype";
$skypeWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Get style information of the Skype window
echo "Example 1: Get style information of the Skype window\n";
$styleEx = $skypeWindow->get_style();
$styleExWithChildren = $skypeWindow->get_style(true);
echo "Style (extended): " . $styleEx . "\n";
echo "Style (extended with children): " . $styleExWithChildren . "\n";

// Quit the application
WINDOW::$app->quit();
?>