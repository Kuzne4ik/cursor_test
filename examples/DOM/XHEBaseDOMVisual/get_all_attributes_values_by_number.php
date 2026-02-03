<?php
// Scenario: Example of getting all attribute values of an element by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements having attributes
$navigateResult = WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Check if navigation was successful
if ($navigateResult) {
    echo "Successfully navigated to anchor.html\n";
    
    // Wait for the page to load
    $waitResult = WEB::$browser->wait_for();
    
    if ($waitResult) {
        echo "Page loaded successfully\n";
        
        // Example 1: Basic usage - get all attribute values of an element by its number
        $elementNumber = 0;
        
        // Get all attribute values of the first element (index 0) on the page
        // This will be the html element (root element of the document)
        $attributeValues = DOM::$element->get_all_attributes_values_by_number($elementNumber);
        
        // Check if the operation was successful
        if ($attributeValues) {
            echo "Successfully retrieved attribute values for element #$elementNumber\n";
            echo "All attribute values of element #$elementNumber: $attributeValues\n\n";
        } else {
            echo "Failed to get attribute values of element #$elementNumber\n\n";
        }
        
        // Example 2: Get all attribute values of an anchor element by its number
        $elementNumber = 0;
        
        // Get all attribute values of the first anchor element (index 0) on the page
        // This will be the anchor element with id="id_mouseover1" in the first form
        $attributeValues = DOM::$anchor->get_all_attributes_values_by_number($elementNumber);
        
        // Check if the operation was successful
        if ($attributeValues) {
            echo "Successfully retrieved attribute values for element #$elementNumber\n";
            echo "All attribute values of element #$elementNumber: $attributeValues\n\n";
        } else {
            echo "Failed to get attribute values of element #$elementNumber\n\n";
        }
        
        // Example 3: Get all attribute values of an form element by its number
        $elementNumber = 0;
        
        // Get all attribute values of the first form element (index 0) on the page
        // This will be the form element with id="screen1"
        $attributeValues = DOM::$form->get_all_attributes_values_by_number($elementNumber);
        
        // Check if the operation was successful
        if ($attributeValues) {
            echo "Successfully retrieved attribute values for form element #$elementNumber\n";
            echo "All attribute values of form element #$elementNumber: $attributeValues\n\n";
        } else {
            echo "Failed to get attribute values of form element #$elementNumber\n\n";
        }
        
        // Example 4: Get all attribute values of an input element within a specific frame
        // This example gets the first input element (index 0) from the first frame (index 0)
        // The page anchor.html contains iframes, and the first frame (frm1) loads anchor_fr.html
        $elementNumber = 0;
        
        // Check if frame exists first
        $frameExists = DOM::$frame->is_exist_by_number(0);
        
        if ($frameExists) {
            echo "Frame 0 exists\n";
            
            // Get all attribute values of the first input element (index 0) within the first frame (index 0)
            // In anchor_fr.html, this will be the input element with id="result"
            $attributeValues = DOM::$input->get_all_attributes_values_by_number($elementNumber, 0);
            
            // Check if the operation was successful
            if ($attributeValues) {
                echo "Successfully retrieved attribute values for input element #$elementNumber in frame 0\n";
                echo "All attribute values of input element #$elementNumber in frame 0: $attributeValues\n\n";
            } else {
                echo "Input element #$elementNumber not found in frame 0 or has no attribute values\n\n";
            }
        } else {
            echo "Frame 0 does not exist\n";
        }
    } else {
        echo "Failed to wait for page to load\n";
    }
} else {
    echo "Failed to navigate to anchor.html\n";
}

// Quit the application
WINDOW::$app->quit();