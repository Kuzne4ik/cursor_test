<?php
// Scenario: Take a screenshot of a DOM element by name
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with HTML elements
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Take a screenshot of an element by name
$elementName = "screen1";
$savePath = "output/element_screenshot_by_name.png";

// First, let's check if the element exists
$findedElement = DOM::$image->get_by_name($elementName);
if ($findedElement->is_exist()) {
    echo "Element with name '{$elementName}' exists\n";
    
    // Get element details for reference
    $innerHtml = DOM::$image->get_inner_html_by_name($elementName);
    echo "Element inner HTML: " . substr($innerHtml, 0, 50) . "...\n";
    
    // Take a screenshot of the element
    $screenshotResult = DOM::$image->screenshot_by_name($savePath, $elementName);
    if ($screenshotResult) {
        echo "Successfully taken screenshot of element with name '{$elementName}' and saved to '{$savePath}'\n";
        
        // Check if the screenshot file was created
        if (file_exists($savePath)) {
            $fileSize = filesize($savePath);
            echo "Screenshot file exists with size: {$fileSize} bytes\n";
        } else {
            echo "Warning: Screenshot file '{$savePath}' was not found\n";
        }
    } else {
        echo "Failed to take screenshot of element with name '{$elementName}'\n";
    }
} else {
    echo "Element with name '{$elementName}' does not exist\n";
}

// Example 2: Take a screenshot of an element within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$frameElementName = "screen1";
$savePath3 = "output/frame_element_screenshot_by_name.png";

// Check if the element within the frame exists
$frameElement = DOM::$image->get_by_name($frameElementName, $frameNumber);
if ($frameElement->is_exist()) {
    echo "Element with name '{$frameElementName}' exists in frame {$frameNumber}\n";
        
    // Get element details for reference
    $innerHtml3 = DOM::$image->get_inner_html_by_name($frameElementName, $frameNumber);
    echo "Element inner HTML: " . substr($innerHtml3, 0, 50) . "...\n";
        
    // Take a screenshot of the element in the frame
    $screenshotResult3 = DOM::$image->screenshot_by_name($savePath3, $frameElementName, $frameNumber);
    if ($screenshotResult3) {
        echo "Successfully taken screenshot of element with name '{$frameElementName}' in frame {$frameNumber} and saved to '{$savePath3}'\n";
            
        // Check if the screenshot file was created
        if (file_exists($savePath3)) {
            $fileSize3 = filesize($savePath3);
            echo "Screenshot file exists with size: {$fileSize3} bytes\n";
        } else {
            echo "Warning: Screenshot file '{$savePath3}' was not found\n";
        }
    } else {
        echo "Failed to take screenshot of element with name '{$frameElementName}' in frame {$frameNumber}\n";
    }
} 
else {
    echo "Element with name '{$frameElementName}' does not exist in frame {$frameNumber}\n";
}

// Quit the application
WINDOW::$app->quit();