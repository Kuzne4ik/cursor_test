<?php
// Scenario: Copy text from address bar to clipboard
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

// Example 1: Copy text from address bar to clipboard
echo "Example 1: Copy text from address bar to clipboard\n";
$copyResult = $addressBar->copy();
if ($copyResult) {
    echo "Text copied successfully from address bar\n";
    // Step: Get copied text from clipboard
    $copiedText = SYSTEM::$clipboard->get_text();
    echo "Copied text: " . $copiedText . "\n";
} else {
    echo "Failed to copy text from address bar\n";
}

// Quit the application
WINDOW::$app->quit();
?>