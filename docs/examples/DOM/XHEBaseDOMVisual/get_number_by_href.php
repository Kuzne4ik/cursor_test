<?php
// Scenario: Get element number by its href attribute
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for(60, 1000);

// Example 1: Get number of element by exact href
$elementHref = "https://example.com/mouseover1";
$number = DOM::$anchor->get_number_by_href($elementHref, true);

if ($number >= 0) {
    echo "\nElement with href '$elementHref' has number: $number";
} else {
    echo "\nElement with href '$elementHref' not found";
}

// Example 2: Get number of element by exact href
$elementHref = "https://example.com/onclick1";
$number = DOM::$anchor->get_number_by_href($elementHref, true);

if ($number >= 0) {
    echo "\nElement with href '$elementHref' has number: $number";
} else {
    echo "\nElement with href '$elementHref' not found";
}

// Example 3: Get number of element by href in frame (frame=0)
$frameNumber = 0;
$frameElementHref = "example";
$number = DOM::$anchor->get_number_by_href($frameElementHref, false, $frameNumber);

if ($number >= 0) {
    echo "\nElement with href '$frameElementHref' in frame $frameNumber has number: $number";
} else {
    echo "\nElement with href '$frameElementHref' not found in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();