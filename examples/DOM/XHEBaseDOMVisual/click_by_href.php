<?php
// Scenario: Click on a DOM element by its href attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchors that have href attributes (typically links)
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Basic example - click on an anchor by its href attribute
$clickResult = DOM::$anchor->click_by_href("https://example.com/onclick2", false);
if ($clickResult) {
    echo "\nSuccessfully clicked on anchor with href 'https://example.com/onclick2'";
} else {
    echo "\nFailed to click on anchor with href 'https://example.com/onclick2'";
}

// Example with frame parameter - click on an anchor inside a frame by its href attribute
$clickResultInFrame = DOM::$anchor->click_by_href("https://example.com/frame0/onclick1", true, 0);
if ($clickResultInFrame) {
    echo "\nSuccessfully clicked on anchor with href 'https://example.com/frame0/onclick1' in frame 0";
} else {
    echo "\nFailed to click on anchor with href 'https://example.com/frame0/onclick1' in frame 0";
}

// Quit the application
WINDOW::$app->quit();