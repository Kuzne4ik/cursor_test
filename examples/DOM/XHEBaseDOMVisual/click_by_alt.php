<?php
// Scenario: Click on a DOM element by its alt attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements that have alt attributes (typically images)
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Basic example - click on an image by its alt attribute
$clickResult = DOM::$image->click_by_alt("screenshot", false);
if ($clickResult) {
    echo "\nSuccessfully clicked on image with alt 'screenshot'";
} else {
    echo "\nFailed to click on image with alt 'screenshot'";
}

// Example with frame parameter - click on an image inside a frame by its alt attribute
$clickResultInFrame = DOM::$image->click_by_alt("screenshot", false, 0);
if ($clickResultInFrame) {
    echo "\nSuccessfully clicked on image with alt 'screenshot' in frame 0";
} else {
    echo "\nFailed to click on image with alt 'Frame Image' in frame 0";
}

echo("\n");

// Quit the application
WINDOW::$app->quit();