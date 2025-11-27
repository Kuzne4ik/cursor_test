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
$elementHref = "https://example.com";
$number = DOM::$anchor->get_number_by_href($elementHref, true);

if ($number >= 0) {
    echo "\nElement with href '$elementHref' has number: $number";
} else {
    echo "\nElement with href '$elementHref' not found";
}

// Example 2: Get number of element by partial href
$partialElementHref = "example";
$number = DOM::$anchor->get_number_by_href($partialElementHref, false);

if ($number >= 0) {
    echo "\nElement with partial href '$partialElementHref' has number: $number";
} else {
    echo "\nElement with partial href '$partialElementHref' not found";
}

// Example 3: Get number of non-existent element
$nonExistentHref = "https://nonexistent-link.com";
$number = DOM::$anchor->get_number_by_href($nonExistentHref, true);

if ($number >= 0) {
    echo "\nElement with href '$nonExistentHref' has number: $number";
} else {
    echo "\nElement with href '$nonExistentHref' not found";
}

// Example 4: Get number of element by href in frame (frame=0)
$frameNumber = 0;
$frameElementHref = "frame-link.html";
$number = DOM::$anchor->get_number_by_href($frameElementHref, true, $frameNumber);

if ($number >= 0) {
    echo "\nElement with href '$frameElementHref' in frame $frameNumber has number: $number";
} else {
    echo "\nElement with href '$frameElementHref' not found in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();