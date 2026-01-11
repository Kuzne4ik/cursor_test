<?php
// Scenario: Check if DOM element exists by attribute within a form by form name
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with forms containing elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Check if element exists by exact attribute in form by form name
$formName = "Form1";
$attributeName = "type";
$attributeValue = "submit";
$exists = DOM::$button->is_exist_by_attribute_by_form_name($attributeName, $attributeValue, true, $formName);

if ($exists) {
    echo "\nElement with attribute '$attributeName'='$attributeValue' exists in form '$formName'";
} else {
    echo "\nElement with attribute '$attributeName'='$attributeValue' does not exist in form '$formName'";
}

// Example 2: Check if element exists by partial attribute in form by form name
$formName = "Form2";
$attributeName = "name";
$partialAttributeValue = "user";
$exists = DOM::$input->is_exist_by_attribute_by_form_name($attributeName, $partialAttributeValue, false, $formName);

if ($exists) {
    echo "\nElement with partial attribute '$attributeName'='$partialAttributeValue' exists in form '$formName'";
} else {
    echo "\nElement with partial attribute '$attributeName'='$partialAttributeValue' does not exist in form '$formName'";
}

// Example 3: Check if element exists by attribute in form by form name in frame (frame=0)
$frameNumber = 0;
$formName = "Form1";
$attributeName = "type";
$frameAttributeValue = "submit";
$exists = DOM::$button->is_exist_by_attribute_by_form_name($attributeName, $frameAttributeValue, true, $formName, $frameNumber);

if ($exists) {
    echo "\nElement with attribute '$attributeName'='$frameAttributeValue' exists in form '$formName' in frame $frameNumber";
} else {
    echo "\nElement with attribute '$attributeName'='$frameAttributeValue' does not exist in form '$formName' in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();