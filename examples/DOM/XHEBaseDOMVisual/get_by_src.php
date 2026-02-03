<?php
// Scenario: Example of getting an element by its src attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Basic usage - get an element by its src attribute
$elementSrc = "./screenshots/01.jpg"; // Src attribute of an image that exists in image.html (line 23)

// Get the element by its src attribute (exact match)
$findedElement = DOM::$image->get_by_src($elementSrc, true);

// Check if the element exists
if ($findedElement->is_exist()) {
    echo "Element with src '$elementSrc' exists.\n";
} else {
    echo "Element with src '$elementSrc' does not exist.\n";
}
echo "\n";

// Example 2: Get an element by partial src match
$partialSrc = "screenshots"; // Partial src that exists in multiple elements

// Get the element by partial src match
$findedElement = DOM::$image->get_by_src($partialSrc, false);

// Check if the element exists
if ($findedElement->is_exist()) {
    echo "Element with src containing '$partialSrc' exists.\n";
} else {
    echo "Element with src containing '$partialSrc' does not exist.\n";
}
echo "\n";

// Example 3: Get an element by src within a frame
// This example gets an element from frame 0 (iframe on the page)
$frameElementSrc = "./screenshots/01.jpg"; // Src that exists in frame (image_fr.html line 29)

// Get the element by its src within a frame
$findedElement = DOM::$image->get_by_src($frameElementSrc, true, "0");

// Check if the element exists
if ($findedElement->is_exist()) {
    echo "Element with src '$frameElementSrc' in frame 0 exists.\n";
    
    // Get element information
    $attributes = $findedElement->get_all_attributes();
    $tagName = $findedElement->get_tag();
    
    // replace delimeter to `;`
    $attributes = str_replace('<br>', ';', $attributes);
    
    // attributes
    echo "Element attributes:  $attributes";
}
echo "\n";

// Quit the application
WINDOW::$app->quit();