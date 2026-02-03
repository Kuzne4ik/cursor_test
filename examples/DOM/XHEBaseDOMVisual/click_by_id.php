<?php
// Scenario: Click on a DOM element by its id attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with images that have id attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Basic example - click on an image by its id
$clickResult = DOM::$image->click_by_id("screen1", true);
if ($clickResult) {
    echo "\nSuccessfully clicked on image with id 'screen1'";
} else {
    echo "\nFailed to click on image with id 'screen1'";
}

// Example with frame parameter - click on an image inside a frame by its id
$clickResultInFrame = DOM::$image->click_by_id("screen2", true, 0);
if ($clickResultInFrame) {
    echo "\nSuccessfully clicked on image with id 'screen2' in frame 0";
} else {
    echo "\nFailed to click on image with id 'screen2' in frame 0";
}

// Quit the application
WINDOW::$app->quit();