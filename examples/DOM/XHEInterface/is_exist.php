<?php

// Scenario: Check if a DOM element exists on a page
// Description: For current page, find a DOM element and check if it exists
// Classes used: XHEButton, XHEDiv, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to a test page
WEB::$browser->navigate("http://wordstat.yandex.ru");

// Example 1: Check if button with number 0 exists

// Get DOM element <button> by number 0
$targetButton = DOM::$button->get_by_number(0);

// Check if element exists
if ($targetButton->is_exist()) {
    echo("Button exists\n");
} else {
    echo("Button does not exist\n");
}

echo("\n");

// Example 2: Check if test-region div exists

// Get DOM element <div> by name
$targetDiv = DOM::$div->get_by_name("test-region");

// Check if element exists
if (!$targetDiv->is_exist()) {
    echo("Test region does not exist\n");
}



// Stop the application
WINDOW::$app->quit();
?>