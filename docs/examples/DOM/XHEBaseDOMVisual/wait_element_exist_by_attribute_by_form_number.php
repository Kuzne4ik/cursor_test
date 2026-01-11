<?php
// Scenario: Example of waiting for a DOM element to exist by its attribute within a specific form by number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with DOM elements and forms
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Wait for an element with attribute "name" equal to "username" within form number 0 to exist
$attributeName1 = "name";
$attributeValue1 = "username";
$exactMatch1 = true;
$formNumber1 = 0;

echo("\n\nExample 1: Wait for element to exist by attribute within form by form number\n");
$elementExists = DOM::$input->wait_element_exist_by_attribute_by_form_number($attributeName1, $attributeValue1, $exactMatch1, $formNumber1);

if ($elementExists) {
    echo "Example 1: Element with attribute '$attributeName1' equal to '$attributeValue1' exists in form number $formNumber1\n";
    
    // Get the element to perform additional operations
    $findedElement = DOM::$input->get_by_attribute($attributeName1, $attributeValue1);
    
    if ($findedElement->is_exist()) {
        echo "Example 1: Successfully retrieved element with attribute '$attributeName1' equal to '$attributeValue1' from form number $formNumber1\n";
        echo "Example 1: Element tag name: " . $findedElement->get_name() . "\n";
    } else {
        echo "Example 1: Failed to retrieve element with attribute '$attributeName1' equal to '$attributeValue1' from form number $formNumber1\n";
    }
} else {
    echo "Example 1: Element with attribute '$attributeName1' equal to '$attributeValue1' does not exist in form number $formNumber1\n";
}

// Example 2: Wait for button element with exact match parameter
$attributeName2 = "type";
$attributeValue2 = "submit";
$exactMatch2 = true;
$formNumber2 = 0;

echo("\n\nExample 2: Wait for button element to exist by attribute with exact match\n");
$elementExistsExact = DOM::$button->wait_element_exist_by_attribute_by_form_number($attributeName2, $attributeValue2, $exactMatch2, $formNumber2);

if ($elementExistsExact) {
    echo "Example 2: Button element with exact attribute '$attributeName2' equal to '$attributeValue2' exists in form number $formNumber2\n";
} else {
    echo "Example 2: Button element with exact attribute '$attributeName2' equal to '$attributeValue2' does not exist in form number $formNumber2\n";
}

// Example 3: Wait for radio button element in form number 1
$attributeName3 = "name";
$attributeValue3 = "sex";
$exactMatch3 = false;
$formNumber3 = 1;

echo("\n\nExample 3: Wait for radio button element to exist by attribute within different form number\n");
$elementExistsByClass = DOM::$radiobox->wait_element_exist_by_attribute_by_form_number($attributeName3, $attributeValue3, $exactMatch3, $formNumber3);

if ($elementExistsByClass) {
    echo "Example 4: Radio button element with attribute '$attributeName3' equal to '$attributeValue3' exists in form number $formNumber3\n";
} else {
    echo "Example 4: Radio button element with attribute '$attributeName3' equal to '$attributeValue3' does not exist in form number $formNumber3\n";
}

// Quit the application
WINDOW::$app->quit();