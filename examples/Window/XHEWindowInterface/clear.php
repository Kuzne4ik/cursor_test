<?php
// Scenario: Clear the address bar text content
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Step: Get the address bar element
$addressBarText = WEB::$webpage->get_url();
$addressBar = WINDOW::$window->get_by_text($addressBarText, true, false, true);

// Step: Set focus to the address bar
$addressBar->focus();

// Example 1: Clear the address bar content
echo "Example 1: Clear the address bar content\n";
$clearResult = $addressBar->clear();
if ($clearResult) {
    echo "Address bar cleared successfully\n";
} else {
    echo "Failed to clear address bar\n";
}

// Quit the application
WINDOW::$app->quit();
?>