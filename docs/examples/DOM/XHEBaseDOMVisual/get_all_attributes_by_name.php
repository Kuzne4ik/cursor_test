<?php
// Scenario: Example of getting all attributes of an element by its name attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with elements having attributes
$navigateResult = WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Check if navigation was successful
if ($navigateResult) {
    echo "Successfully navigated to input.html\n";

    // Example 1: Basic usage - get all attributes of an element by its name attribute
    $elementName = "id0";

    // Get all attributes of the element with name="Name"
    $attributes = DOM::$input->get_all_attributes_by_name($elementName);

    // Check if the operation was successful
    if ($attributes) {
        echo "Successfully retrieved attributes for element with name '$elementName'\n";
        echo "All attributes of element with name '$elementName': $attributes\n\n";
    } else {
        echo "Failed to get attributes of element with name '$elementName'\n\n";
    }

    // Example 2: Get all attributes of an element within a specific frame
    // This example assumes there is a frame with index 0 on the page
    $elementName = "fr_id0";

    // Check if frame exists first
    $frameExists = DOM::$frame->is_exist_by_number(0);

    if ($frameExists) {
        echo "Frame 0 exists\n";

        // Get all attributes of an input within the first frame
        $attributes = DOM::$input->get_all_attributes_by_name($elementName, 0);

        // Check if the operation was successful
        if ($attributes) {
            echo "Successfully retrieved attributes for input with name '$elementName' in frame 0\n";
            echo "All attributes of input with name '$elementName' in frame 0: $attributes\n\n";
        } else {
            echo "Input with name '$elementName' not found in frame 0 or has no attributes\n\n";
        }
    } else {
        echo "Frame 0 does not exist\n";
    }

} else {
    echo "Failed to navigate to input.html\n";
}

// Quit the application
WINDOW::$app->quit();