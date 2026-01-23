<?php
// Scenario: Example of getting all attributes of an element by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with elements having attributes
$navigateResult = WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Check if navigation was successful
if ($navigateResult) {
    echo "Successfully navigated to anchor.html\n";


    // Example 1: Basic usage - get all attributes of an element by its number
    $anchorNumber = 0;

    // Get all attributes of the first anchor (index 0)
    $attributes = DOM::$anchor->get_all_attributes_by_number($anchorNumber);

    // Check if the operation was successful
    if ($attributes) {
        echo "Successfully retrieved attributes for anchor #$anchorNumber\n";
        echo "All attributes of anchor #$anchorNumber: $attributes\n\n";
    } else {
        echo "Failed to get attributes of anchor #$anchorNumber\n\n";
    }

    // Example 2: Get all attributes of another anchor by its number
    $anchorNumber = 1;

    // Get all attributes of the second anchor (index 1)
    $attributes = DOM::$anchor->get_all_attributes_by_number($anchorNumber);

    // Check if the operation was successful
    if ($attributes) {
        echo "Successfully retrieved attributes for anchor #$anchorNumber\n";
        echo "All attributes of anchor #$anchorNumber: $attributes\n\n";
    } else {
        echo "Failed to get attributes of anchor #$anchorNumber\n\n";
    }

    // Example 3: Get all attributes of a non-existent anchor
    $anchorNumber = 9999;

    // Try to get all attributes of a non-existent anchor
    $attributes = DOM::$anchor->get_all_attributes_by_number($anchorNumber);

    // Check if the operation was successful
    if ($attributes) {
        echo "Unexpectedly retrieved attributes for non-existent anchor #$anchorNumber\n";
        echo "All attributes of anchor #$anchorNumber: $attributes\n\n";
    } else {
        echo "As expected, anchor #$anchorNumber not found or has no attributes\n\n";
    }

    // Example 4: Get all attributes of an anchor within a specific frame
    // This example assumes there is a frame with index 0 on the page
    $anchorNumber = 0;

    // Check if frame exists first
    $frameExists = DOM::$frame->is_exist_by_number(0);

    if ($frameExists) {
        echo "Frame 0 exists\n";

        // Get all attributes of an anchor within the first frame
        $attributes = DOM::$anchor->get_all_attributes_by_number($anchorNumber, 0);

        // Check if the operation was successful
        if ($attributes) {
            echo "Successfully retrieved attributes for anchor #$anchorNumber in frame 0\n";
            echo "All attributes of anchor #$anchorNumber in frame 0: $attributes\n\n";
        } else {
            echo "anchor #$anchorNumber not found in frame 0 or has no attributes\n\n";
        }
    } else {
        echo "Frame 0 does not exist\n";
    }
} else {
    echo "Failed to navigate to anchor.html\n";
}

// Quit the application
WINDOW::$app->quit();