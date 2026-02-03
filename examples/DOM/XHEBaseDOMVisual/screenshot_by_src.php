<?php
// Scenario: Take a screenshot of a DOM element by src attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with image elements
WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Example 1: Take a screenshot of an element by exact src
$srcValue = "./screenshots/01.jpg";
$exactly = true;
$savePath = "output/element_screenshot_by_src.png";

    
    // Take a screenshot of the element
    $screenshotResult = DOM::$image->screenshot_by_src($savePath, $srcValue, $exactly);
    if ($screenshotResult) {
        echo "Successfully taken screenshot of element with src '{$srcValue}' and saved to '{$savePath}'\n";
        
        // Check if the screenshot file was created
        if (file_exists($savePath)) {
            $fileSize = filesize($savePath);
            echo "Screenshot file exists with size: {$fileSize} bytes\n";
        } else {
            echo "Warning: Screenshot file '{$savePath}' was not found\n";
        }
    } else {
        echo "Failed to take screenshot of element with src '{$srcValue}'\n";
    }

// Example 2: Take a screenshot of an element by partial src
$partialSrcValue = "01.jpg";
$exactly2 = false;
$savePath2 = "output/element2_screenshot_by_src.png";

    // Take a screenshot of the element
    $screenshotResult2 = DOM::$image->screenshot_by_src($savePath2, $partialSrcValue, $exactly2);
    if ($screenshotResult2) {
        echo "Successfully taken screenshot of element with partial src '{$partialSrcValue}' and saved to '{$savePath2}'\n";
        
        // Check if the screenshot file was created
        if (file_exists($savePath2)) {
            $fileSize2 = filesize($savePath2);
            echo "Screenshot file exists with size: {$fileSize2} bytes\n";
        } else {
            echo "Warning: Screenshot file '{$savePath2}' was not found\n";
        }
    } else {
        echo "Failed to take screenshot of element with partial src '{$partialSrcValue}'\n";
    }

// Example 3: Take a screenshot of an element within a frame (if frames are available)
$frameNumber = 0; // First frame on the page
$frameSrcValue = "./screenshots/01.jpg";
$exactly3 = true;
$savePath3 = "output/frame_element_screenshot_by_src.png";


        // Take a screenshot of the element in the frame
        $screenshotResult3 = DOM::$image->screenshot_by_src($savePath3, $frameSrcValue, $exactly3, $frameNumber);
        if ($screenshotResult3) {
            echo "Successfully taken screenshot of element with src '{$frameSrcValue}' in frame {$frameNumber} and saved to '{$savePath3}'\n";
            
            // Check if the screenshot file was created
            if (file_exists($savePath3)) {
                $fileSize3 = filesize($savePath3);
                echo "Screenshot file exists with size: {$fileSize3} bytes\n";
            } else {
                echo "Warning: Screenshot file '{$savePath3}' was not found\n";
            }
        } else {
            echo "Failed to take screenshot of element with src '{$frameSrcValue}' in frame {$frameNumber}\n";
        }

// Quit the application
WINDOW::$app->quit();