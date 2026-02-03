<?php
// Scenario: Check if DOM element exists by src attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements that have src attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");
WEB::$browser->wait_for();

// Example 1: Check if element exists by src attribute
$elementSrc = "./screenshots/01.jpg";
$exists = DOM::$image->is_exist_by_src($elementSrc, true);

if ($exists) {
    echo "\nElement with src '$elementSrc' exists on the page";
} else {
    echo "\nElement with src '$elementSrc' does not exist on the page";
}

// Example 2: Check if element exists by partial src attribute
$partialSrc = "./screenshots/0";
$exists = DOM::$image->is_exist_by_src($partialSrc, false);

if ($exists) {
    echo "\nElement with partial src '$partialSrc' exists on the page";
} else {
    echo "\nElement with partial src '$partialSrc' does not exist on the page";
}

// Example 3: Check if element exists by src attribute in frame (frame=0)
$frameNumber = 0;
$elementSrc = "./screenshots/01.jpg";
$exists = DOM::$image->is_exist_by_src($elementSrc, true, $frameNumber);

if ($exists) {
    echo "\nElement with src '$elementSrc' exists in frame $frameNumber";
} else {
    echo "\nElement with src '$elementSrc' does not exist in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();