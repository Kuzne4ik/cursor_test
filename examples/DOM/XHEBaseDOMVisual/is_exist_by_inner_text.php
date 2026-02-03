<?php
// Scenario: Check if DOM element exists by inner text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements that have inner text
WEB::$browser->navigate(TEST_POLYGON_URL . "textarea.html");
WEB::$browser->wait_for(60, 1000);

// Example 1: Check if element exists by exact inner text
$innerText = "тут вот текст а может и нет";
$exists = DOM::$textarea->is_exist_by_inner_text($innerText, true);

if ($exists) {
    echo "\nElement with inner text '$innerText' exists on the page";
} else {
    echo "\nElement with inner text '$innerText' does not exist on the page";
}

// Example 2: Check if element exists by partial inner text
$partialInnerText = "тут";
$exists = DOM::$textarea->is_exist_by_inner_text($partialInnerText, false);

if ($exists) {
    echo "\nElement with partial inner text '$partialInnerText' exists on the page";
} else {
    echo "\nElement with partial inner text '$partialInnerText' does not exist on the page";
}

// Example 3: Check if element exists by inner text in frame (frame=0)
$frameNumber = 0;
$frameInnerText = "тут вот текст а может и нет";
$exists = DOM::$textarea->is_exist_by_inner_text($frameInnerText, true, $frameNumber);

if ($exists) {
    echo "\nElement with inner text '$frameInnerText' exists in frame $frameNumber";
} else {
    echo "\nElement with inner text '$frameInnerText' does not exist in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();