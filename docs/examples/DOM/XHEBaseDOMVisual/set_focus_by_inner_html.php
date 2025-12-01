<?php
// Scenario: Demonstrates how to set focus to a DOM element by its inner HTML
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Wait for the page to load
WEB::$browser->wait(1);

// Example 1: Set focus to an anchor element by its inner HTML
$innerHtml = "Блог";
$focusResult = DOM::$anchor->set_focus_by_inner_html($innerHtml);
if ($focusResult) {
    echo "Example 1: Successfully set focus to anchor element with inner HTML 'mouseover1'\n";
} else {
    echo "Example 1: Failed to set focus to anchor element with inner HTML 'mouseover1'\n";
}

// Example 2: Set focus to another anchor element by its inner HTML
$innerHtml2 = "Блог";
$exactlyMatch2 = false;
$focusResultNext = DOM::$anchor->set_focus_by_inner_html($innerHtml2, $exactlyMatch2);
if ($focusResultNext) {
    echo "\nExample 2: Successfully set focus to anchor element with inner HTML 'mouseup1'\n";
} else {
    echo "\nExample 2: Failed to set focus to anchor element with inner HTML 'mouseup1'\n";
}


// Quit the application
WINDOW::$app->quit();