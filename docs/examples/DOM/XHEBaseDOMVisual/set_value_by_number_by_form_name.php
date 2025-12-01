<?php
// Scenario: Demonstrates how to set value to a DOM element by its number within a specific form by form name
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with forms containing input fields
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();


// Example 1: Set value to an input element by its number within form with name "Form1"
$elementNumber1 = 0;
$elementValue1 = "john_doe";
$formName1 = "Form1";

echo("\n\nExample 1: Set value to element by number within form by form name\n");
$setValueResult = DOM::$input->set_value_by_number_by_form_name($elementNumber1, $elementValue1, $formName1);
if ($setValueResult) {
    echo "Example 1: Successfully set value '$elementValue1' to element with number $elementNumber1 in form with name '$formName1'\n";
} else {
    echo "Example 1: Failed to set value '$elementValue1' to element with number $elementNumber1 in form with name '$formName1'\n";
}

// Get the value to verify it was set correctly
$getValue = DOM::$input->get_value_by_number($elementNumber1, $formName1);
echo "Example 1: Value of element with number $elementNumber1 in form with name '$formName1': " . $getValue . "\n";

// Example 2: Set value with a different element number and form name
$elementNumber2 = 0;
$elementValue2 = "jane_doe";
$formName2 = "Form2";

echo("\n\nExample 2: Set value to element by number within different form by form name\n");
$setValueResultNext = DOM::$input->set_value_by_number_by_form_name($elementNumber2, $elementValue2, $formName2);
if ($setValueResultNext) {
    echo "Example 2: Successfully set value '$elementValue2' to element with number $elementNumber2 in form with name '$formName2'\n";
} else {
    echo "Example 2: Failed to set value '$elementValue2' to element with number $elementNumber2 in form with name '$formName2'\n";
}

// Get the value to verify it was set correctly
$getValueNext = DOM::$input->get_value_by_number($elementNumber2, $formName2);
echo "Example 2: Value of element with number $elementNumber2 in form with name '$formName2': " . $getValueNext . "\n";

// Example 3: Set value with frame parameter
$elementNumber3 = 0;
$elementValue3 = "frame_test_value";
$formName3 = "Form1";
$frameNumber3 = 0;

echo("\n\nExample 3: Set value to element by number within form by form name in frame\n");
$setValueResultFrame = DOM::$input->set_value_by_number_by_form_name($elementNumber3, $elementValue3, $formName3, $frameNumber3);
if ($setValueResultFrame) {
    echo "Example 3: Successfully set value '$elementValue3' to element with number $elementNumber3 in form with name '$formName3' in frame $frameNumber3\n";
} else {
    echo "Example 3: Failed to set value '$elementValue3' to element with number $elementNumber3 in form with name '$formName3' in frame $frameNumber3\n";
}

// Get the value to verify it was set correctly
$getValueFrame = DOM::$input->get_value_by_number($elementNumber3, $frameNumber3);
echo "Example 3: Value of element with number $elementNumber3 in form with name '$formName3' in frame $frameNumber3: " . $getValueFrame . "\n";

// Quit the application
WINDOW::$app->quit();