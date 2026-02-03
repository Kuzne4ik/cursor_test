<?php
// Scenario: Example of waiting for a DOM element to exist by its attribute within a specific form by name
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with DOM elements and forms
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Wait for an input element with attribute "name" equal to "username" within form named "Form1" to exist
$attributeName1 = "name";
$attributeValue1 = "username";
$exactMatch1 = false;
$formName1 = "Form1";

echo("\n\nExample 1: Wait for input element to exist by attribute within form by form name\n");
$elementExists = DOM::$input->wait_element_exist_by_attribute_by_form_name($attributeName1, $attributeValue1, $exactMatch1, $formName1);

if ($elementExists) {
    echo "Example 1: Input element with attribute '$attributeName1' equal to '$attributeValue1' exists in form '$formName1'\n";
    
    // Get the input element to perform additional operations
    echo("Example 1: Get input element by attribute\n");
    $findedElement = DOM::$input->get_by_attribute($attributeName1, $attributeValue1);
    
    if ($findedElement->is_exist()) {
        echo "Example 1: Successfully retrieved input element with attribute '$attributeName1' equal to '$attributeValue1' from form '$formName1'\n";
        echo "Example 1: Element tag name: " . $findedElement->get_name() . "\n";
    } else {
        echo "Example 1: Failed to retrieve input element with attribute '$attributeName1' equal to '$attributeValue1' from form '$formName1'\n";
    }
} else {
    echo "Example 1: Input element with attribute '$attributeName1' equal to '$attributeValue1' does not exist in form '$formName1'\n";
}

// Example 2: Wait for submit button element with exact match parameter in Form1
$attributeName2 = "type";
$attributeValue2 = "submit";
$formName2 = "Form1";
$exactMatch2 = true;

echo("\n\nExample 2: Wait for button element to exist by attribute with exact match\n");
$elementExistsExact = DOM::$button->wait_element_exist_by_attribute_by_form_name($attributeName2, $attributeValue2, $exactMatch2, $formName2);

if ($elementExistsExact) {
    echo "Example 2: Button element with exact attribute '$attributeName2' equal to '$attributeValue2' exists in form '$formName2'\n";
} else {
    echo "Example 2: Button element with exact attribute '$attributeName2' equal to '$attributeValue2' does not exist in form '$formName2'\n";
}

// Example 3: Wait for password input element in Form2
$attributeName3 = "name";
$attributeValue3 = "passwd";
$formName3 = "Form2";
$exactMatch3 = false;

echo("\n\nExample 3: Wait for password input element to exist by attribute within form by form name\n");
$elementExists3 = DOM::$input->wait_element_exist_by_attribute_by_form_name($attributeName3, $attributeValue3, $exactMatch3, $formName3);

if ($elementExists3) {
    echo "Example 3: Password input element with attribute '$attributeName3' equal to '$attributeValue3' exists in form '$formName3'\n";
    
    // Get the password input element
    echo("Example 3: Get password input element by attribute\n");
    $element3 = DOM::$input->get_by_attribute($attributeName3, $attributeValue3, $exactMatch3);
    
    if ($element3->is_exist()) {
        echo "Example 3: Successfully retrieved password input element with attribute '$attributeName3' equal to '$attributeValue3' from form '$formName3'\n";
        echo "Example 3: Element tag name: " . $element3->get_name() . "\n";
    } else {
        echo "Example 3: Failed to retrieve password input element with attribute '$attributeName3' equal to '$attributeValue3' from form '$formName3'\n";
    }
} else {
    echo "Example 3: Password input element with attribute '$attributeName3' equal to '$attributeValue3' does not exist in form '$formName3'\n";
}

// Quit the application
WINDOW::$app->quit();