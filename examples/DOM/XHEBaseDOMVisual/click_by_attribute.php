<?php
// Scenario: Click on a DOM element by its attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Click on an image by attribute (partial match)
$clickResult = DOM::$image->click_by_attribute("alt", "screenshot", false);
echo "Click result (partial match): " . ($clickResult ? "Success" : "Failed") . "\n";

// Example 2: Click on an image by attribute (exact match)
$clickResult = DOM::$image->click_by_attribute("alt", "screenshot1", true);
echo "Click result (exact match): " . ($clickResult ? "Success" : "Failed") . "\n";

// Example 3: Click on an image by attribute within a specific frame
// First, let's check if we have frames on the page
$framesCount = DOM::$frame->get_count();
if ($framesCount > 0) {
    // Click on an image by attribute within the first frame (frame=0)
    $clickResult = DOM::$image->click_by_attribute("alt", "screenshot", false, 0);
    echo "Click result in frame 0: " . ($clickResult ? "Success" : "Failed") . "\n";
} else {
    echo "No frames found on the page\n";
}

// Quit the application
WINDOW::$app->quit();