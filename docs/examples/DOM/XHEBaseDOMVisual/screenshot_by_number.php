<?php
// Scenario: Take a screenshot of a DOM element by number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with HTML elements
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Take a screenshot of an element by number
$elementNumber = 0; // First element on the page
$savePath = "output/element_screenshot.png";

// First, let's check if the element exists
$findedElement = DOM::$image->get_by_number($elementNumber);
if ($findedElement->is_exist()) {
    echo "Element with number {$elementNumber} exists\n";
    
    // Take a screenshot of the element
    $screenshotResult = DOM::$image->screenshot_by_number($savePath, $elementNumber);
    if ($screenshotResult) {
        echo "Successfully taken screenshot of element with number {$elementNumber} and saved to '{$savePath}'\n";
        
        // Check if the screenshot file was created
        if (file_exists($savePath)) {
            $fileSize = filesize($savePath);
            echo "Screenshot file exists with size: {$fileSize} bytes\n";
        } else {
            echo "Warning: Screenshot file '{$savePath}' was not found\n";
        }
    } else {
        echo "Failed to take screenshot of element with number {$elementNumber}\n";
    }
} else {
    echo "Element with number {$elementNumber} does not exist\n";
}

// Example 2: Take a screenshot of an element within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$frameElementNumber = 0; // First element in the frame
$savePath3 = "output/frame_element_screenshot.png";

echo "\nFrame with number {$frameNumber} exists\n";
    
// Take a screenshot of the element in the frame
$screenshotResult3 = DOM::$image->screenshot_by_number($savePath3,$frameElementNumber, $frameNumber);
if ($screenshotResult3) {
    echo "Successfully taken screenshot of element with number {$frameElementNumber} in frame {$frameNumber} and saved to '{$savePath3}'\n";
            
    // Check if the screenshot file was created
    if (file_exists($savePath3)) {
        $fileSize3 = filesize($savePath3);
        echo "Screenshot file exists with size: {$fileSize3} bytes\n";
    } else {
        echo "Warning: Screenshot file '{$savePath3}' was not found\n";
    }
} else {
    echo "Failed to take screenshot of element with number {$frameElementNumber} in frame {$frameNumber}\n";
}
    
// Quit the application
WINDOW::$app->quit();