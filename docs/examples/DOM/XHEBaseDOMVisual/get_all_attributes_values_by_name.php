<?php
// Scenario: Example of getting all attribute values of an element by its name attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with elements having attributes
$navigateResult = WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Check if navigation was successful
if ($navigateResult) {
    echo "Successfully navigated to input.html\n";

    // Example 1: Basic usage - get all attribute values of an element by its name attribute
    $inputName = "id0";

    // Get all attribute values of the input with name="Name"
    $attributeValues = DOM::$input->get_all_attributes_values_by_name($inputName);

    // Check if the operation was successful
    if ($attributeValues) {
        echo "Successfully retrieved attribute values for input with name '$inputName'\n";
        echo "All attribute values of input with name '$inputName': $attributeValues\n\n";
    } else {
        echo "Failed to get attribute values of input with name '$inputName'\n\n";
    }

    // Example 2: Get all attribute values of another input by its name attribute
    $inputName = "id3";

    // Get all attribute values of the input with name="frm1"
    $attributeValues = DOM::$input->get_all_attributes_values_by_name($inputName);

    // Check if the operation was successful
    if ($attributeValues) {
        echo "Successfully retrieved attribute values for input with name '$inputName'\n";
        echo "All attribute values of input with name '$inputName': $attributeValues\n\n";
    } else {
        echo "Failed to get attribute values of input with name '$inputName'\n\n";
    }

    // Example 3: Get all attribute values of an input within a specific frame
    // This example assumes there is a frame with index 0 on the page
    $inputName = "frame_input";

    // Check if frame exists first
    $frameExists = DOM::$frame->is_exist_by_number(0);

    if ($frameExists) {
        echo "Frame 0 exists\n";

        // Get all attribute values of an input within the first frame
        $attributeValues = DOM::$input->get_all_attributes_values_by_name($inputName, 0);

        // Check if the operation was successful
        if ($attributeValues) {
            echo "Successfully retrieved attribute values for input with name '$inputName' in frame 0\n";
            echo "All attribute values of input with name '$inputName' in frame 0: $attributeValues\n\n";
        } else {
            echo "input with name '$inputName' not found in frame 0 or has no attribute values\n\n";
        }
    } else {
        echo "Frame 0 does not exist\n";
    }
} else {
    echo "Failed to navigate to input.html\n";
}

// Quit the application
WINDOW::$app->quit();