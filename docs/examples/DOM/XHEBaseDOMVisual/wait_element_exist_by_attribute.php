<?php
// Scenario: Example of waiting for a DOM element to exist by its attribute

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with DOM elements
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Wait for an input element with attribute "name" equal to "username" to exist
$attributeName1 = "name";
$attributeValue1 = "username";
$exactMatch1 = 10;

echo("\n\nExample 1: Wait for input element to exist by attribute\n");
$elementExists = DOM::$input->wait_element_exist_by_attribute($attributeName1, $attributeValue1, $exactMatch1);

if ($elementExists) {
    echo "Example 1: Input element with attribute '$attributeName1' equal to '$attributeValue1' exists on the page\n";
    
    // Get the element to perform additional operations
    $findedElement = DOM::$input->get_by_attribute($attributeName1, $attributeValue1);
    
    if ($findedElement->is_exist()) {
        echo "Example 1: Successfully retrieved input element with attribute '$attributeName1' equal to '$attributeValue1'\n";
        echo "Example 1: Element tag name: " . $findedElement->get_name() . "\n";
    } else {
        echo "Example 1: Failed to retrieve input element with attribute '$attributeName1' equal to '$attributeValue1'\n";
    }
} else {
    echo "Example 1: Input element with attribute '$attributeName1' equal to '$attributeValue1' does not exist on the page\n";
}

// Example 2: Wait for radio element with exact match parameter
$attributeName2 = "name";
$attributeValue2 = "sex";
$exactMatch2 = true;

echo("\n\nExample 2: Wait for radio element to exist by attribute with exact match\n");
$elementExistsExact = DOM::$radiobox->wait_element_exist_by_attribute($attributeName2, $attributeValue2, $exactMatch2, $exactMatch2);

if ($elementExistsExact) {
    echo "Example 2: Radio element with exact attribute '$attributeName2' equal to '$attributeValue2' exists on the page\n";
} else {
    echo "Example 2: Radio element with exact attribute '$attributeName2' equal to '$attributeValue2' does not exist on the page\n";
}

// Example 3: Wait for element in frame
$frameNumber3 = "0";
$frameExists = DOM::$frame->is_exist_by_number($frameNumber3);

if ($frameExists) {
    echo "Example 3: Frame $frameNumber3 exists on the page\n";
    
    $attributeName3 = "name";
    $attributeValue3 = "username";
    $exactMatch3 = false;
    
    echo("\n\nExample 3: Wait for input element to exist by attribute in frame\n");
    $elementInFrameExists = DOM::$input->wait_element_exist_by_attribute($attributeName3, $attributeValue3, $exactMatch3, $frameNumber3);
    
    if ($elementInFrameExists) {
        echo "Example 3: Input element with attribute '$attributeName3' equal to '$attributeValue3' exists in frame $frameNumber3\n";
        
        // Get the element from frame
        $elementInFrame = DOM::$input->get_by_attribute($attributeName3, $attributeValue3, $exactMatch3, $frameNumber3);
        
        if ($elementInFrame->is_exist()) {
            echo "Example 3: Successfully retrieved input element with attribute '$attributeName3' equal to '$attributeValue3' from frame $frameNumber3\n";
            echo "Example 3: Element tag name: " . $elementInFrame->get_name() . "\n";
        } else {
            echo "Example 3: Failed to retrieve input element with attribute '$attributeName3' equal to '$attributeValue3' from frame $frameNumber3\n";
        }
    } else {
        echo "Example 3: Input element with attribute '$attributeName3' equal to '$attributeValue3' does not exist in frame $frameNumber3\n";
    }
} else {
    echo "Example 3: Frame $frameNumber3 does not exist on the page\n";
}

// Example 4: Wait for input element with type attribute
$attributeName4 = "type";
$attributeValue4 = "password";
$exactMatch4 = false;

echo("\n\nExample 4: Wait for input element to exist by type attribute\n");
$elementExistsByType = DOM::$input->wait_element_exist_by_attribute($attributeName4, $attributeValue4, $exactMatch4);

if ($elementExistsByType) {
    echo "Example 4: Input element with attribute '$attributeName4' equal to '$attributeValue4' exists on the page\n";
} else {
    echo "Example 4: Input element with attribute '$attributeName4' equal to '$attributeValue4' does not exist on the page\n";
}

// Example 5: Wait for input element with id attribute
$attributeName5 = "id";
$attributeValue5 = "form1_username";
$exactMatch5 = false;

echo("\n\nExample 5: Wait for input element to exist by id attribute\n");
$elementExistsById = DOM::$input->wait_element_exist_by_attribute($attributeName5, $attributeValue5, $exactMatch5);

if ($elementExistsById) {
    echo "Example 5: Input element with attribute '$attributeName5' equal to '$attributeValue5' exists on the page\n";
} else {
    echo "Example 5: Input element with attribute '$attributeName5' equal to '$attributeValue5' does not exist on the page\n";
}

// Quit the application
WINDOW::$app->quit();