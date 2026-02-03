<?php
// Scenario: Demonstrates how to set value to a DOM element by its attribute within a specific form by form number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with form elements
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Set value to an input element by its attribute within form number 0
// Example 1: Set value by attribute within form by form number
// Set value to input element with id="form1_username" within form number 0
$attributeName = "id";
$attributeValue = "form1_username";
$exactMatch = true;
$valueToSet = "john_doe";
$formNumber = 0;

echo("\n\nExample 1: Set value by attribute within form by form number\n");
$setValueResult = DOM::$input->set_value_by_attribute_by_form_number($attributeName, $attributeValue, $exactMatch, $valueToSet, $formNumber);
if ($setValueResult) {
    echo "Example 1: Successfully set value by attribute within form by form number\n";
    
    // Verify the value was set correctly
    $findedElement = DOM::$input->get_by_attribute($attributeName, $attributeValue, $exactMatch);
    if ($findedElement && $findedElement->is_exist()) {
        $value = $findedElement->get_value();
        echo "Example 1: Current value: " . $value . "\n";
    }
} else {
    echo "Example 1: Failed to set value by attribute within form by form number\n";
}

// Get the value to verify it was set correctly
$getValue = DOM::$input->get_value_by_attribute($attributeName, $attributeValue, $exactMatch);
echo "Example 1: Value of element with attribute 'id=form1_username' in form number 0: " . $getValue . "\n";

// Example 2: Set value by attribute within form by form number with different form
$attributeNameNext = "id";
$attributeValueNext = "form2_username";
$exactMatchNext = true;
$valueToSetNext = "jane_doe";
$formNumberNext = 1;

echo("\n\nExample 2: Set value by attribute within form by form number with different form\n");
$setValueResultNext = DOM::$input->set_value_by_attribute_by_form_number($attributeNameNext, $attributeValueNext, $exactMatchNext, $valueToSetNext, $formNumberNext);
if ($setValueResultNext) {
    echo "Example 2: Successfully set value by attribute within form by form number\n";
    
    // Verify the value was set correctly
    $findedElementNext = DOM::$input->get_by_attribute($attributeNameNext, $attributeValueNext, $exactMatchNext);
    if ($findedElementNext && $findedElementNext->is_exist()) {
        $valueNext = $findedElementNext->get_value();
        echo "Example 2: Current value: " . $valueNext . "\n";
    }
} else {
    echo "Example 2: Failed to set value by attribute within form by form number\n";
}

// Get the value to verify it was set correctly
$getValueNext = DOM::$input->get_value_by_attribute($attributeNameNext, $attributeValueNext, $exactMatchNext);
echo "Example 2: Value of element with attribute 'id=form2_username' in form number 1: " . $getValueNext . "\n";

// Example 3: Set value by attribute within form by form number with exact attribute matching
$attributeNameExact = "name";
$attributeValueExact = "username";
$exactMatchExact = true;
$valueToSetExact = "exact_match_value";
$formNumberExact = 0;

echo("\n\nExample 3: Set value by attribute within form by form number with exact attribute matching\n");
$setValueResultExact = DOM::$input->set_value_by_attribute_by_form_number($attributeNameExact, $attributeValueExact, $exactMatchExact, $valueToSetExact, $formNumberExact);
if ($setValueResultExact) {
    echo "Example 3: Successfully set value 'exact_match_value' to element with exact attribute 'name=username' in form number 0\n";
} else {
    echo "Example 3: Failed to set value 'exact_match_value' to element with exact attribute 'name=username' in form number 0\n";
}

// Get the value to verify it was set correctly
$getValueExact = DOM::$input->get_value_by_attribute("name", "username", true);
echo "Example 3: Value of element with exact attribute 'name=username' in form number 0: " . $getValueExact . "\n";

// Example 4: Set value by attribute within form by form number in frame
$attributeNameFrame = "id";
$attributeValueFrame = "form1_username";
$exactMatchFrame = true;
$valueToSetFrame = "frame_test_value";
$formNumberFrame = 0;
$frameNumber = "0";

echo("\n\nExample 4: Set value by attribute within form by form number in frame\n");
$setValueResultFrame = DOM::$input->set_value_by_attribute_by_form_number($attributeNameFrame, $attributeValueFrame, $exactMatchFrame, $valueToSetFrame, $formNumberFrame, $frameNumber);
if ($setValueResultFrame) {
    echo "Example 4: Successfully set value 'frame_test_value' to element with attribute 'id=form1_username' in form number 0 in frame 0\n";
} else {
    echo "Example 4: Failed to set value 'frame_test_value' to element with attribute 'id=form1_username' in form number 0 in frame 0\n";
}

// Get the value to verify it was set correctly
$getValueFrame = DOM::$input->get_value_by_attribute("id", "form1_username", true, 0);
echo "Example 4: Value of element with attribute 'id=form1_username' in form number 0 in frame 0: " . $getValueFrame . "\n";

// Quit the application
WINDOW::$app->quit();