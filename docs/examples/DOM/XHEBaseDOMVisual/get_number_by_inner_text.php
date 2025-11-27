<?php
// Scenario: Get element number by its inner text
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with various elements containing text
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");
WEB::$browser->wait_for(60, 1000);

// Example 1: Get number of element by exact inner text
$innerText = "Submit Form";
$number = DOM::$anchor->get_number_by_inner_text($innerText, true);

if ($number >= 0) {
    echo "\nElement with inner text '$innerText' has number: $number";
} else {
    echo "\nElement with inner text '$innerText' not found";
}

// Example 2: Get number of element by partial inner text
$partialInnerText = "Submit";
$number = DOM::$anchor->get_number_by_inner_text($partialInnerText, false);

if ($number >= 0) {
    echo "\nElement with partial inner text '$partialInnerText' has number: $number";
} else {
    echo "\nElement with partial inner text '$partialInnerText' not found";
}

// Example 3: Get number of non-existent element
$nonExistentText = "Nonexistent Text";
$number = DOM::$anchor->get_number_by_inner_text($nonExistentText, true);

if ($number >= 0) {
    echo "\nElement with inner text '$nonExistentText' has number: $number";
} else {
    echo "\nElement with inner text '$nonExistentText' not found";
}

// Example 4: Get number of element by inner text in frame (frame=0)
$frameNumber = 0;
$frameInnerText = "Frame Button";
$number = DOM::$anchor->get_number_by_inner_text($frameInnerText, true, $frameNumber);

if ($number >= 0) {
    echo "\nElement with inner text '$frameInnerText' in frame $frameNumber has number: $number";
} else {
    echo "\nElement with inner text '$frameInnerText' not found in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();