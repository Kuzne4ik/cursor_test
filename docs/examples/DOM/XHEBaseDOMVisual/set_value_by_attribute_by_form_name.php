<?php
// Scenario: Set value to element by attribute within form by form name
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with form elements
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate to HTML page: `$pageUrl`\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();


// Example 1: Set value by attribute within form by form name
// Set value to input element with id="form1_username" within form named "Form1"
$attributeName1 = "id";
$attributeValue1 = "form1_username";
$exactMatch1 = true;
$valueToSet1 = "john_doe";
$formName1 = "Form1";

$setValueResult = DOM::$input->set_value_by_attribute_by_form_name($attributeName1, $attributeValue1, $exactMatch1, $valueToSet1, $formName1);
if ($setValueResult) {
    echo "Successfully set value by attribute within form by form name\n";
    
    // Verify the value was set correctly
    $findedElement = DOM::$input->get_by_attribute($attributeName1, $attributeValue1, $exactMatch1);
    if ($findedElement && $findedElement->is_exist()) {
        $value = $findedElement->get_value();
        echo "Current value: " . $value . "\n";
    }
} else {
    echo "Failed to set value by attribute within form by form name\n";
}

// Example 2: Set value by attribute within form by form name with frame parameter
// Set value to input element with name="passwd" within form named "Form1" in frame 0
$attributeName2 = "name";
$attributeValue2 = "passwd";
$exactMatch2 = true;
$valueToSet2 = "secure_password";
$formName2 = "Form1";
$frameNumber2 = "0";

$setValueResult = DOM::$input->set_value_by_attribute_by_form_name($attributeName2, $attributeValue2, $exactMatch2, $valueToSet2, $formName2, $frameNumber2);
if ($setValueResult) {
    echo "Successfully set value by attribute within form by form name in frame 0\n";
    
    // Verify the value was set correctly
    $findedElement = DOM::$input->get_by_attribute($attributeName2, $attributeValue2, $exactMatch2, $frameNumber2);
    if ($findedElement && $findedElement->is_exist()) {
        $value = $findedElement->get_value();
        echo "Current value in frame: " . $value . "\n";
    }
} else {
    echo "Failed to set value by attribute within form by form name in frame 0\n";
}

// Example 3: Set value to input element with id="form2_username" within form named "Form2"
$attributeName3 = "id";
$attributeValue3 = "form2_username";
$exactMatch3 = true;
$valueToSet3 = "jane_doe";
$formName3 = "Form2";

$setValueResult = DOM::$input->set_value_by_attribute_by_form_name($attributeName3, $attributeValue3, $exactMatch3, $valueToSet3, $formName3);
if ($setValueResult) {
    echo "Successfully set value to form2_username within Form2\n";
    
    // Verify the value was set correctly
    $findedElement = DOM::$input->get_by_attribute($attributeName3, $attributeValue3, $exactMatch3);
    if ($findedElement && $findedElement->is_exist()) {
        $value = $findedElement->get_value();
        echo "Current value in Form2: " . $value . "\n";
    }
} else {
    echo "Failed to set value to form2_username within Form2\n";
}

// Quit the application
WINDOW::$app->quit();