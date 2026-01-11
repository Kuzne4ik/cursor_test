<?php
// Scenario: Demonstrates how to set value to a DOM element by its name within a specific form by form name
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with form elements
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Example 1: Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
// Wait for the page to load
WEB::$browser->wait_js();

// Example 1: Set value to an input element by its name within form with name "Form1"
$elementName1 = "username";
$elementValue1 = "john_doe";
$formName1 = "Form1";
$setValueResult = DOM::$input->set_value_by_name_by_form_name($elementName1, $elementValue1, $formName1);
if ($setValueResult) {
    echo "Example 1: Successfully set value '$elementValue1' to element with name '$elementName1' in form with name '$formName1'\n";
} else {
    echo "Example 1: Failed to set value '$elementValue1' to element with name '$elementName1' in form with name '$formName1'\n";
}

// Get the value to verify it was set correctly
$getValue = DOM::$input->get_value_by_name($elementName1, $formName1);
echo "Example 1: Value of element with name '$elementName1' in form with name '$formName1': " . $getValue . "\n";

// Example 2: Set value to an input element by its name within form with name "Form2"
$elementName2 = "username";
$elementValue2 = "jane_doe";
$formName2 = "Form2";
$setValueResultNext = DOM::$input->set_value_by_name_by_form_name($elementName2, $elementValue2, $formName2);
if ($setValueResultNext) {
    echo "\nExample 2: Successfully set value '$elementValue2' to element with name '$elementName2' in form with name '$formName2'\n";
} else {
    echo "\nExample 2: Failed to set value '$elementValue2' to element with name '$elementName2' in form with name '$formName2'\n";
}

// Get the value to verify it was set correctly
$getValueNext = DOM::$input->get_value_by_name($elementName2, $formName2);
echo "Example 2: Value of element with name '$elementName2' in form with name '$formName2': " . $getValueNext . "\n";

// Example 3: Set value to an input element by its name within form with name "Form1" in frame 0
$elementName3 = "username";
$elementValue3 = "frame_test_value";
$formName3 = "Form1";
$frameNumber = 0;
$setValueResultFrame = DOM::$input->set_value_by_name_by_form_name($elementName3, $elementValue3, $formName3, $frameNumber);
if ($setValueResultFrame) {
    echo "Example 3: Successfully set value '$elementValue3' to element with name '$elementName3' in form with name '$formName3' in frame $frameNumber\n";
} else {
    echo "Example 3: Failed to set value '$elementValue3' to element with name '$elementName3' in form with name '$formName3' in frame $frameNumber\n";
}

// Get the value to verify it was set correctly
$getValueFrame = DOM::$input->get_value_by_name($elementName3, $frameNumber);
echo "Example 3: Value of element with name '$elementName3' in form with name '$formName3' in frame $frameNumber: " . $getValueFrame . "\n";

// Quit the application
WINDOW::$app->quit();