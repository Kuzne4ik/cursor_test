<?php
// Scenario: Get element number by its src attribute
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with image elements
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");
WEB::$browser->wait_for(60, 1000);

// Example 1: Get number of element by exact src
$elementSrc = "images/logo.png";
$number = DOM::$image->get_number_by_src($elementSrc, true);

if ($number >= 0) {
    echo "\nElement with src '$elementSrc' has number: $number";
} else {
    echo "\nElement with src '$elementSrc' not found";
}

// Example 2: Get number of element by partial src
$partialElementSrc = "logo";
$number = DOM::$image->get_number_by_src($partialElementSrc, false);

if ($number >= 0) {
    echo "\nElement with partial src '$partialElementSrc' has number: $number";
} else {
    echo "\nElement with partial src '$partialElementSrc' not found";
}

// Example 3: Get number of non-existent element
$nonExistentSrc = "nonexistent-image.png";
$number = DOM::$image->get_number_by_src($nonExistentSrc, true);

if ($number >= 0) {
    echo "\nElement with src '$nonExistentSrc' has number: $number";
} else {
    echo "\nElement with src '$nonExistentSrc' not found";
}

// Example 4: Get number of element by src in frame (frame=0)
$frameNumber = 0;
$frameElementSrc = "frame-image.jpg";
$number = DOM::$image->get_number_by_src($frameElementSrc, true, $frameNumber);

if ($number >= 0) {
    echo "\nElement with src '$frameElementSrc' in frame $frameNumber has number: $number";
} else {
    echo "\nElement with src '$frameElementSrc' not found in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();