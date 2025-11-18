<?php
// Scenario: Example of using add_attribute_by_number function to add/set attribute to DOM element by number

// Connect to XHE
$xhe_host = "127.0.0.1:7010";
$path = "../../../../../../Templates/init.php";
require($path);

// Navigate to a webpage with elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Wait for page to load
DOM::$anchor->wait_element_exist_by_number(0);

// Example 1: Add a new attribute to the first anchor
$attrName = "data-custom";
$attrValue = "custom-value-1";
$addResult = DOM::$anchor->add_attribute_by_number(0, $attrName, $attrValue);

if ($addResult) {
    echo "Successfully added attribute '{$attrName}' with value '{$attrValue}' to anchor #0\n";
    
    // Verify the attribute was added by getting its value
    $retrievedValue = DOM::$anchor->get_attribute_by_number(0, $attrName);
    if ($retrievedValue === $attrValue) {
        echo "Verification successful: Attribute value is '{$retrievedValue}'\n";
    } else {
        echo "Verification failed: Retrieved value is '{$retrievedValue}'\n";
    }
} else {
    echo "Failed to add attribute to anchor #0\n";
}


// Quit the application
WINDOW::$app->quit();
?>