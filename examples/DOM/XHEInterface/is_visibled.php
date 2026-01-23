<?php

// Scenario: Check if a DOM element is visible
// Description: For current page, find a DOM element and check if it is visible
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

// Example 1: Check if a button is visible

// Navigate to the test site
echo WEB::$browser->navigate("http://www.wordstat.yandex.ru");

// Get DOM element <button> by number 0
$targetButton = DOM::$button->get_by_number(0);

// Check that the DOM element was found
if ($targetButton->inner_number != -1) {
    // Check if the button is visible
    echo $targetButton->is_visibled();
}

echo("\n\n");

// Example 2: Check if a div is visible

// Get DOM element <div> by name
$targetDiv = DOM::$div->get_by_name("ukraine-region");

// Check that the DOM element was found
if ($targetDiv->inner_number != -1) {
    // Check if the div is visible
    if (!$targetDiv->is_visibled()) {
        echo "not visible";
    }
}

// Stop the application
WINDOW::$app->quit();
?>