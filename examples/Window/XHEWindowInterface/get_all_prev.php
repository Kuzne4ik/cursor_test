<?php
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Scenario: Get text of all windows before a specific window
echo "\n";

// Step: Get the reference window interface
$windowText = "Skype";
$referenceWindow = WINDOW::$window->get_by_text($windowText);

// Example 1: Get text of all windows before the reference window
echo "Example 1: Get text of all windows before '" . $windowText . "' window\n";
$prevWindows = $referenceWindow->get_all_prev();
$prevWindowTexts = $prevWindows->get_text();
print_r($prevWindowTexts);

// Quit the application
WINDOW::$app->quit();
?>