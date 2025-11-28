<?php
// Scenario: Check if DOM element exists by attribute within a form by form number
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with forms containing elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Example 1: Check if element exists by exact attribute in form by form number
$formNumber = 0; // First form on the page
$attributeName = "type";
$attributeValue = "submit";
$exists = DOM::$button->is_exist_by_attribute_by_form_number($attributeName, $attributeValue, true, $formNumber);

if ($exists) {
    echo "\nElement with attribute '$attributeName'='$attributeValue' exists in form $formNumber";
} else {
    echo "\nElement with attribute '$attributeName'='$attributeValue' does not exist in form $formNumber";
}

// Example 2: Check if element exists by partial attribute in form by form number
$formNumber = 1; // Second form on the page
$attributeName = "name";
$partialAttributeValue = "user";
$exists = DOM::$input->is_exist_by_attribute_by_form_number($attributeName, $partialAttributeValue, false, $formNumber);

if ($exists) {
    echo "\nElement with partial attribute '$attributeName'='$partialAttributeValue' exists in form $formNumber";
} else {
    echo "\nElement with partial attribute '$attributeName'='$partialAttributeValue' does not exist in form $formNumber";
}

// Example 3: Check if element exists by attribute in form by form number in frame (frame=0)
$frameNumber = 0;
$formNumber = 0;
$attributeName = "type";
$frameAttributeValue = "submit";
$exists = DOM::$button->is_exist_by_attribute_by_form_number($attributeName, $frameAttributeValue, true, $formNumber, $frameNumber);

if ($exists) {
    echo "\nElement with attribute '$attributeName'='$frameAttributeValue' exists in form $formNumber in frame $frameNumber";
} else {
    echo "\nElement with attribute '$attributeName'='$frameAttributeValue' does not exist in form $formNumber in frame $frameNumber";
}

// Quit the application
WINDOW::$app->quit();