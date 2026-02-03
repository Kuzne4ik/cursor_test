<?php
// Scenario: Demonstrates how to click on a random DOM element on the page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with multiple clickable elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Click on a random label on the page
$clickResult = DOM::$label->click_random();
if ($clickResult != -1) {
    echo "Successfully clicked on a random label on the page\n";
} else {
    echo "Failed to click on a random label on the page\n";
}

// Click on a random label in frame 0
$clickResultFrame = DOM::$label->click_random(0);
if ($clickResultFrame != -1) {
    echo "\nSuccessfully clicked on a random label in frame 0\n";
} else {
    echo "\nFailed to click on a random label in frame 0\n";
}

// Quit the application
WINDOW::$app->quit();