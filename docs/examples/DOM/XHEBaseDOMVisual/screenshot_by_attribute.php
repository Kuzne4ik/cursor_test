<?php
// Scenario: Demonstrate the screenshot_by_attribute function for capturing screenshots of DOM elements by their attributes

// Connection settings to XHE server
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements that have various attributes
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");
WEB::$browser->wait_for();

// Define the path to save screenshots
$savePath = "output/element_screenshot.png";

// Example 1: Take a screenshot of an element by its exact attribute value
echo "Example 1: Taking a screenshot of an element by exact attribute value<br>\n";
$attrName = "id";
$attrValue = "screen1";
$exactly = true; // Exact match

// Take screenshot
$screenshotResult = DOM::$image->screenshot_by_attribute($savePath, $attrName, $attrValue, $exactly);

// Check the result
if ($screenshotResult) {
    echo "Screenshot saved successfully to: " . $savePath . "<br>\n";
} else {
    echo "Failed to take screenshot. Element may not exist or error occurred.<br>\n";
}

// Example 2: Take a screenshot of an element by partial attribute value
echo "\n\nExample 2: Taking a screenshot of an element by partial attribute value<br>\n";
$attrName = "alt";
$attrValue = "screenshot"; // Partial match
$exactly = false; // Partial match
$savePath2 = "output/element_screenshot_partial.png";

// Take screenshot
$screenshotResult = DOM::$image->screenshot_by_attribute($savePath2, $attrName, $attrValue, $exactly);

// Check the result
if ($screenshotResult) {
    echo "Screenshot saved successfully to: " . $savePath2 . "<br>\n";
} else {
    echo "Failed to take screenshot. Element may not exist or error occurred.<br>\n";
}

// Example 3: Take a screenshot of an element by attribute in a specific frame
echo "\n\nExample 3: Taking a screenshot of an element by attribute in a specific frame<br>\n";
$attrName = "name";
$attrValue = "screen1";
$exactly = true;
$frameNumber = 0; // First frame
$savePath3 = "output/element_screenshot_frame.png";

// Take screenshot
$screenshotResult = DOM::$image->screenshot_by_attribute($savePath3, $attrName, $attrValue, $exactly, $frameNumber);

// Check the result
if ($screenshotResult) {
    echo "Screenshot saved successfully to: " . $savePath3 . "<br>\n";
} else {
    echo "Failed to take screenshot. Element may not exist in the specified frame or error occurred.<br>\n";
}

// Quit the application
WINDOW::$app->quit();
?>