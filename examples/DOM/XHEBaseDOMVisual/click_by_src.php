<?php
// Scenario: Click on a DOM element by its src attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements that have src attributes (typically images or scripts)
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");
WEB::$browser->wait_for();

// Basic example - click on an image by its src attribute
$clickResult = DOM::$image->click_by_src("./screenshots/01.jpg", true);
if ($clickResult) {
    echo "\nSuccessfully clicked on image with src './screenshots/01.jpg'";
} else {
    echo "\nFailed to click on image with src './screenshots/01.jpg'";
}

// Example with frame parameter - click on an image inside a frame by its src attribute
$clickResultInFrame = DOM::$image->click_by_src("./screenshots/01.jpg", 0);
if ($clickResultInFrame) {
    echo "\nSuccessfully clicked on image with src './screenshots/01.jpg' in frame 0";
} else {
    echo "\nFailed to click on image with src './screenshots/01.jpg' in frame 0";
}

// Quit the application
WINDOW::$app->quit();