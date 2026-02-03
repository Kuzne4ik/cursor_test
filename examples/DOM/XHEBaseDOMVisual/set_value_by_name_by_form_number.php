<?php
// Scenario: Demonstrates how to set value to a DOM element by its name within a specific form by form number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with forms containing input fields
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
// Wait for the page to load
WEB::$browser->wait_js();

// Example 1: Set value to an input element by its name within form number 0
$elementName1 = "username";
$valueToSet1 = "john_doe";
$formNumber1 = 0;

echo("\n\nExample 1: Set value by name within form by form number\n");
$setValueResult = DOM::$input->set_value_by_name_by_form_number($elementName1, $valueToSet1, $formNumber1);
if ($setValueResult) {
    echo "Example 1: Successfully set value '$valueToSet1' to element with name '$elementName1' in form number $formNumber1\n";
} else {
    echo "Example 1: Failed to set value '$valueToSet1' to element with name '$elementName1' in form number $formNumber1\n";
}

// Get the value to verify it was set correctly
$getValue = DOM::$input->get_value_by_name($elementName1, $formNumber1);
echo "Example 1: Value of element with name '$elementName1' in form number $formNumber1: " . $getValue . "\n";

// Example 2: Set value to an input element by its name within form number 1
$elementName2 = "username";
$valueToSet2 = "jane_doe";
$formNumber2 = 1;

echo("\n\nExample 2: Set value by name within form by form number with different form\n");
$setValueResultNext = DOM::$input->set_value_by_name_by_form_number($elementName2, $valueToSet2, $formNumber2);
if ($setValueResultNext) {
    echo "Example 2: Successfully set value '$valueToSet2' to element with name '$elementName2' in form number $formNumber2\n";
} else {
    echo "Example 2: Failed to set value '$valueToSet2' to element with name '$elementName2' in form number $formNumber2\n";
}

// Get the value to verify it was set correctly
$getValueNext = DOM::$input->get_value_by_name($elementName2, $formNumber2);
echo "Example 2: Value of element with name '$elementName2' in form number $formNumber2: " . $getValueNext . "\n";

// Example 3: Set value to an input element by its name within form number 0 in frame
$elementName3 = "username";
$valueToSet3 = "frame_test_value";
$formNumber3 = 0;
$frameNumber3 = "0";

echo("\n\nExample 3: Set value by name within form by form number in frame\n");
$setValueResultFrame = DOM::$input->set_value_by_name_by_form_number($elementName3, $valueToSet3, $formNumber3, $frameNumber3);
if ($setValueResultFrame) {
    echo "Example 3: Successfully set value '$valueToSet3' to element with name '$elementName3' in form number $formNumber3 in frame $frameNumber3\n";
} else {
    echo "Example 3: Failed to set value '$valueToSet3' to element with name '$elementName3' in form number $formNumber3 in frame $frameNumber3\n";
}

// Get the value to verify it was set correctly
$getValueFrame = DOM::$input->get_value_by_name($elementName3, $frameNumber3);
echo "Example 3: Value of element with name '$elementName3' in form number $formNumber3 in frame $frameNumber3: " . $getValueFrame . "\n";

// Quit the application
WINDOW::$app->quit();