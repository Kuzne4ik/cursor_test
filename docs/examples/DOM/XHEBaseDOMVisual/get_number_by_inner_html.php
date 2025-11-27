<?php
// Scenario: Get element number by its inner HTML
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with various elements containing HTML content
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for(60, 1000);

// Example 1: Get number of element by exact inner HTML
$innerHtml = "<span class='button-text'>Submit</span>";
$number = DOM::$anchor->get_number_by_inner_html($innerHtml, true);

if ($number >= 0) {
    echo "\nElement with inner HTML '$innerHtml' has number: $number";
} else {
    echo "\nElement with inner HTML '$innerHtml' not found";
}

// Example 2: Get number of element by partial inner HTML
$partialInnerHtml = "<span class='button-text'>";
$number = DOM::$anchor->get_number_by_inner_html($partialInnerHtml, false);

if ($number >= 0) {
    echo "\nElement with partial inner HTML '$partialInnerHtml' has number: $number";
} else {
    echo "\nElement with partial inner HTML '$partialInnerHtml' not found";
}

// Example 3: Get number of non-existent element
$nonExistentHtml = "<div class='nonexistent'>Content</div>";
$number = DOM::$anchor->get_number_by_inner_html($nonExistentHtml, true);

if ($number >= 0) {
    echo "\nElement with inner HTML '$nonExistentHtml' has number: $number";
} else {
    echo "\nElement with inner HTML '$nonExistentHtml' not found";
}

// Example 4: Get number of element by inner HTML in frame (frame=0)
$frameNumber = 0;
$frameInnerHtml = "<div class='frame-content'>Frame Content</div>";
$number = DOM::$anchor->get_number_by_inner_html($frameInnerHtml, true, $frameNumber);

if ($number >= 0) {
    echo "\nElement with inner HTML '$frameInnerHtml' in frame $frameNumber has number: $number";
} else {
    echo "\nElement with inner HTML '$frameInnerHtml' not found in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();