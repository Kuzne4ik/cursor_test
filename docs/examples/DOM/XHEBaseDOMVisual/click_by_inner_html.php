<?php
// Scenario: Click on a DOM element by its inner HTML content
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Click on an h2 by inner HTML (partial match)
$clickResult = DOM::$h2->click_by_inner_html("Greetings", false);
echo "Click result (partial match): " . ($clickResult ? "Success" : "Failed") . "\n";

// Example 2: Click on an anchor by inner HTML (exact match)
$clickResult = DOM::$anchor->click_by_inner_html("Greetings", true);
echo "Click result (exact match): " . ($clickResult ? "Success" : "Failed") . "\n";

// Example 3: Click on an h2 by inner HTML within a specific frame
// First, let's check if we have frames on the page
$framesCount = DOM::$frame->get_count();
if ($framesCount > 0) {
    // Click on an h3 by inner HTML within the first frame (frame=0)
    $clickResult = DOM::$h3->click_by_inner_html("Frame 0", false, 0);
    echo "Click result in frame 0: " . ($clickResult ? "Success" : "Failed") . "\n";
} else {
    echo "No frames found on the page\n";
}

// Quit the application
WINDOW::$app->quit();