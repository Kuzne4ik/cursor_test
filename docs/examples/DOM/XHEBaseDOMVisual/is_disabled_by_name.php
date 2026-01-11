<?php
// Scenario: Example of checking if an element is disabled by its name attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with form elements
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Example 1: Basic usage - check if an element is disabled by its name attribute
$elementName = "username";

// Check if the element with name="username" is disabled
$isDisabled = DOM::$button->is_disabled_by_name($elementName);

if ($isDisabled) {
    echo "Element with name '$elementName' is disabled\n\n";
} else {
    echo "Element with name '$elementName' is not disabled\n\n";
}

// Example 2: Check if another element is disabled by its name attribute
$elementName = "password";

// Check if the element with name="password" is disabled
$isDisabled = DOM::$button->is_disabled_by_name($elementName);

if ($isDisabled) {
    echo "Element with name '$elementName' is disabled\n\n";
} else {
    echo "Element with name '$elementName' is not disabled\n\n";
}

// Example 3: Check if an element within a specific frame is disabled
// This example assumes there is a frame with index 0 on the page
$elementName = "frame_input";

// Check if an element within the first frame is disabled
$isDisabled = DOM::$button->is_disabled_by_name($elementName, 0);

if ($isDisabled) {
    echo "Element with name '$elementName' in frame 0 is disabled\n\n";
} else {
    echo "Element with name '$elementName' in frame 0 not found or is not disabled\n\n";
}

// Quit the application
WINDOW::$app->quit();