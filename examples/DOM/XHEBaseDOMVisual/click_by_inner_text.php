<?php
// Scenario: Click on a DOM element by its inner text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements that have inner text
//WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Basic example - click on an h2 by its inner text
$clickResult = DOM::$h2->click_by_inner_text("Greetings", false);
if ($clickResult) {
    echo "\nSuccessfully clicked on h2 with inner text 'Greetings'";
} else {
    echo "\nFailed to click on h2 with inner text 'Greetings'";
}

// Example with exact match parameter - click on an h2 with exact inner text match
$clickResultExact = DOM::$h2->click_by_inner_text("Greetings", true);
if ($clickResultExact) {
    echo "\nSuccessfully clicked on h2 with exact inner text 'Greetings'";
} else {
    echo "\nFailed to click on h2 with exact inner text 'Greetings'";
}

// Example with frame parameter - click on an h3 inside a frame by its inner text
$clickResultInFrame = DOM::$h3->click_by_inner_text("Frame 0", false, 0);
if ($clickResultInFrame) {
    echo "\nSuccessfully clicked on h3 with inner text 'Frame 0' in frame 0";
} else {
    echo "\nFailed to click on h3 with inner text 'Frame 0' in frame 0";
}

// Quit the application
WINDOW::$app->quit();