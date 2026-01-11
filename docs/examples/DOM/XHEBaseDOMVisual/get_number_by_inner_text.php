<?php
// Scenario: Get element number by its inner text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements containing text
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get number of element by exact inner text
$innerText = "Блог";
$number = DOM::$anchor->get_number_by_inner_text($innerText, true);

if ($number >= 0) {
    echo "\nElement with inner text '$innerText' has number: $number";
} else {
    echo "\nElement with inner text '$innerText' not found";
}

// Quit the application
WINDOW::$app->quit();