<?php
// Scenario: Demonstrates how to set focus to a DOM element by its inner text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with anchors
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Wait for the page to load
WEB::$browser->wait(1);

// Example 1: Set focus to a anchor element by its inner text
$innerText = "Блог";
$focusResult = DOM::$anchor->set_focus_by_inner_text($innerText);
if ($focusResult) {
    echo "Example 1: Successfully set focus to anchor element with inner text '$innerText '\n";
} else {
    echo "Example 1: Failed to set focus to anchor element with inner text '$innerText '\n";
}

// Set focus to a anchor element by its inner text in frame 0
$innerText2 = "Frame0: Блог";
$exactlyMatch2 = true;
$frameName = "0";
$focusResultFrame = DOM::$anchor->set_focus_by_inner_text($innerText2, $exactlyMatch2, $frameName);
if ($focusResultFrame) {
    echo "\nExample 2: Successfully set focus to anchor element with inner text '$innerText2' in frame '$frameName'\n";
} else {
    echo "\nExample 2: Failed to set focus to anchor element with inner text '$innerText2' in frame '$frameName'\n";
}


// Quit the application
WINDOW::$app->quit();