<?php
// Scenario: Example of getting all attribute values of an element by its src attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements having src attributes
$navigateResult = WEB::$browser->navigate(TEST_POLYGON_URL . "image.html");

// Check if navigation was successful
if ($navigateResult) {
    echo "Successfully navigated to image.html\n";
    
    // Wait for the page to load
    $waitResult = WEB::$browser->wait_for();
    
    if ($waitResult) {
        echo "Page loaded successfully\n";
        
        // Example 1: Basic usage - get all attribute values of an image by its src attribute
        $srcValue = "./screenshots/01.jpg";
        
        // Get all attribute values of the image with src="./screenshots/01.jpg"
        $attributeValues = DOM::$image->get_all_attributes_values_by_src($srcValue);
        
        // Check if the operation was successful
        if ($attributeValues) {
            echo "Successfully retrieved attribute values for image with src '$srcValue'\n";
            echo "All attribute values of image with src '$srcValue': $attributeValues\n\n";
        } else {
            echo "Failed to get attribute values of image with src '$srcValue'\n\n";
        }
        
        // Example 2: Get all attribute values of another image by its src attribute
        $srcValue = "./screenshots/02.jpg";
        
        // Get all attribute values of the image with src="./screenshots/02.jpg"
        $attributeValues = DOM::$image->get_all_attributes_values_by_src($srcValue);
        
        // Check if the operation was successful
        if ($attributeValues) {
            echo "Successfully retrieved attribute values for image with src '$srcValue'\n";
            echo "All attribute values of image with src '$srcValue': $attributeValues\n\n";
        } else {
            echo "Failed to get attribute values of image with src '$srcValue'\n\n";
        }
        
        // Example 3: Get all attribute values of a non-existent image image
        $srcValue = "https://non-existent-image.com/image.png";
        
        // Try to get all attribute values of a non-existent image image
        $attributeValues = DOM::$image->get_all_attributes_values_by_src($srcValue);
        
        // Check if the operation was successful
        if ($attributeValues) {
            echo "Unexpectedly retrieved attribute values for non-existent image with src '$srcValue'\n";
            echo "All attribute values of image with src '$srcValue': $attributeValues\n\n";
        } else {
            echo "As expected, element with src '$srcValue' not found or has no attribute values\n\n";
        }
        
        // Example 4: Get all attribute values of an image imag within a specific frame
        // This example gets an image element from the frame with index 0
        $srcValue = "./screenshots/01.jpg";
        
        // Check if frame exists first
        $frameExists = DOM::$frame->is_exist_by_number(0);
        
        if ($frameExists) {
            echo "Frame 0 exists\n";
            
            // Get all attribute values of an image element within the first frame
            $attributeValues = DOM::$image->get_all_attributes_values_by_src($srcValue, 0);
            
            // Check if the operation was successful
            if ($attributeValues) {
                echo "Successfully retrieved attribute values for image element with src '$srcValue' in frame 0\n";
                echo "All attribute values of image element with src '$srcValue' in frame 0: $attributeValues\n\n";
            } else {
                echo "Image element with src '$srcValue' not found in frame 0 or has no attribute values\n\n";
            }
        } else {
            echo "Frame 0 does not exist\n";
        }
    } else {
        echo "Failed to wait for page to load\n";
    }
} else {
    echo "Failed to navigate to image.html\n";
}

// Quit the application
WINDOW::$app->quit();