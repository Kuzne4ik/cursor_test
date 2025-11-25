<?php
// Scenario: Example of getting an element's alt attribute by its name attribute

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with image elements
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Basic usage - get alt attribute of element by its name attribute
$elementName = "screen1";

// Get alt attribute of image element with name="screen1"
$altValue = DOM::$image->get_alt_by_name($elementName);

if ($altValue !== "") {
    echo "Alt attribute of element with name '$elementName': $altValue\n\n";
} else {
    echo "Failed to get alt attribute of element with name '$elementName'\n\n";
}

// Example 2: Get alt attribute of another element by its name attribute
$elementName = "captcha1";

// Get alt attribute of image element with name="captcha1"
$altValue = DOM::$image->get_alt_by_name($elementName);

if ($altValue !== "") {
    echo "Alt attribute of element with name '$elementName': $altValue\n\n";
} else {
    echo "Failed to get alt attribute of element with name '$elementName'\n\n";
}

// Example 3: Get alt attribute of element within a specific frame
// This example assumes there is a frame with index 0 on the page
$elementName = "screen1";

// Get alt attribute of an image element within the first frame
$altValue = DOM::$image->get_alt_by_name($elementName, 0);

if ($altValue !== "") {
    echo "Alt attribute of element with name '$elementName' in frame 0: $altValue\n\n";
} else {
    echo "Element with name '$elementName' not found in frame 0 or does not have an alt attribute\n\n";
}

// Quit the application
WINDOW::$app->quit();