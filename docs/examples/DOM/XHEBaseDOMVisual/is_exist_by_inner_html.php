<?php
// Scenario: Check if DOM element exists by inner HTML
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchors that have inner HTML
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Check if anchor exists by exact inner HTML
$innerHtml = "Блог";
$exists = DOM::$anchor->is_exist_by_inner_html($innerHtml, true);

if ($exists) {
    echo "\nanchor with inner HTML '$innerHtml' exists on the page";
} else {
    echo "\nanchor with inner HTML '$innerHtml' does not exist on the page";
}

// Example 4: Check if anchor exists by inner HTML in frame (frame=0)
$frameNumber = 0;
$frameInnerHtml = "Блог";
$exists = DOM::$anchor->is_exist_by_inner_html($frameInnerHtml, true, $frameNumber);

if ($exists) {
    echo "\nanchor with inner HTML '$frameInnerHtml' exists in frame $frameNumber";
} else {
    echo "\nanchor with inner HTML '$frameInnerHtml' does not exist in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();