<?php
// Scenario: Demonstrates how to set focus to a DOM element by its href attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with links
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Wait for the page to load
WEB::$browser->wait(1);

// Example 1: Set focus to an anchor element by its href attribute
$hrefValue = "https://example.com/mouseover1";
$focusResult = DOM::$anchor->set_focus_by_href($hrefValue);
if ($focusResult) {
    echo "Example 1: Successfully set focus to anchor element with href='https://example.com/mouseover1'\n";
} else {
    echo "Example 1: Failed to set focus to anchor element with href='https://example.com/mouseover1'\n";
}

// Example 2: Setting focus to an anchor element with the partial match href attribute
$hrefValue2 = "example.com/mouseup1";
$exactlyMatch = false;
$focusResultRelative = DOM::$anchor->set_focus_by_href($hrefValue2, $exactlyMatch);
if ($focusResultRelative) {
    echo "\nExample 2: Successfully set focus to anchor element with partial match href='example.com/mouseup1'\n";
} else {
    echo "\nExample 2: Failed to set focus to anchor element with partial match href='example.com/mouseup1'\n";
}

// Example 3: Set focus to an anchor element by its href attribute in frame 0
$hrefValue3 = "https://example.com/frame0/mouseover1";
$exactlyMatch3 = true;
$frameNumber = 0;
$focusResultFrame = DOM::$anchor->set_focus_by_href($hrefValue3, $exactlyMatch3, $frameNumber);
if ($focusResultFrame) {
    echo "\nExample 3: Successfully set focus to anchor element with href='https://example.com/frame0/mouseover1' in frame '0'\n";
} else {
    echo "\nExample 3: Failed to set focus to anchor element with href='https://example.com/frame0/mouseover1' in frame '0'\n";
}

// Quit the application
WINDOW::$app->quit();
