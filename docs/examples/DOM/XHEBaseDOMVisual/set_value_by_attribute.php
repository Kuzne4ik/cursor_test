<?php
// Scenario: Demonstrates how to set value to a DOM element by its attribute
$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with form elements
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Set value to an input element by its attribute
$attributeName = "id";
$attributeValue = "form1_username";
$exactMatch = true;
$valueToSet = "test_user";

$setValueResult = DOM::$input->set_value_by_attribute($attributeName, $attributeValue, $exactMatch, $valueToSet);
if ($setValueResult) {
    echo "Successfully set value 'test_user' to element with attribute 'id=form1_username'\n";
    
    // Verify the value was set correctly
    $findedElement = DOM::$input->get_by_attribute($attributeName, $attributeValue, $exactMatch);
    if ($findedElement && $findedElement->is_exist()) {
        $value = $findedElement->get_value();
        echo "Current value: " . $value . "\n";
    }
} else {
    echo "Failed to set value 'test_user' to element with attribute 'id=form1_username'\n";
}

// Get the value to verify it was set correctly
$getValue = DOM::$input->get_value_by_attribute($attributeName, $attributeValue, $exactMatch);
echo "Value of element with attribute 'id=form1_username': " . $getValue . "\n";

// Example 2: Set value to an input element by its name attribute
$attributeName2 = "name";
$attributeValue2 = "passwd";
$exactMatch2 = true;
$valueToSet2 = "test_password";

$setValueResultNext = DOM::$input->set_value_by_attribute($attributeName2, $attributeValue2, $exactMatch2, $valueToSet2);
if ($setValueResultNext) {
    echo "\nSuccessfully set value 'test_password' to element with attribute 'name=passwd'\n";
    
    // Verify the value was set correctly
    $findedElementNext = DOM::$input->get_by_attribute($attributeName2, $attributeValue2, $exactMatch2);
    if ($findedElementNext && $findedElementNext->is_exist()) {
        $valueNext = $findedElementNext->get_value();
        echo "Current value: " . $valueNext . "\n";
    }
} else {
    echo "\nFailed to set value 'test_password' to element with attribute 'name=passwd'\n";
}

// Get the value to verify it was set correctly
$getValueNext = DOM::$input->get_value_by_attribute($attributeName2, $attributeValue2, $exactMatch2);
echo "Value of element with attribute 'name=passwd': " . $getValueNext . "\n";

// Example 3: Set value to an element with exact attribute matching
$attributeNameExact = "name";
$attributeValueExact = "username";
$exactMatchExact = true;
$valueToSetExact = "exact_match_value";

$setValueResultExact = DOM::$input->set_value_by_attribute($attributeNameExact, $attributeValueExact, $exactMatchExact, $valueToSetExact);
if ($setValueResultExact) {
    echo "\nSuccessfully set value 'exact_match_value' to element with exact attribute 'name=username'\n";
    
    // Verify the value was set correctly
    $findedElementExact = DOM::$input->get_by_attribute($attributeNameExact, $attributeValueExact, $exactMatchExact);
    if ($findedElementExact && $findedElementExact->is_exist()) {
        $valueExact = $findedElementExact->get_value();
        echo "Current value with exact match: " . $valueExact . "\n";
    }
} else {
    echo "\nFailed to set value 'exact_match_value' to element with exact attribute 'name=username'\n";
}

// Get the value to verify it was set correctly
$getValueExact = DOM::$input->get_value_by_attribute($attributeNameExact, $attributeValueExact, $exactMatchExact);
echo "Value of element with exact attribute 'name=username': " . $getValueExact . "\n";

// Example 4: Set value to an input element by its attribute in frame
// Navigate to frame page with forms
$pageUrlFrame = TEST_POLYGON_URL . "form_fr.html";
echo("\nNavigate to frame page: $pageUrlFrame\n");
WEB::$browser->navigate($pageUrlFrame);
WEB::$browser->wait_js();

// Set value to an input element by its attribute in frame 0
$attributeNameFrame = "id";
$attributeValueFrame = "form1_username";
$exactMatchFrame = true;
$valueToSetFrame = "frame_test_value";
$frameNumber = "0";

$setValueResultFrame = DOM::$input->set_value_by_attribute($attributeNameFrame, $attributeValueFrame, $exactMatchFrame, $valueToSetFrame, $frameNumber);
if ($setValueResultFrame) {
    echo "\nSuccessfully set value 'frame_test_value' to element with attribute 'id=form1_username' in frame 0\n";
    
    // Verify the value was set correctly
    $findedElementFrame = DOM::$input->get_by_attribute($attributeNameFrame, $attributeValueFrame, $exactMatchFrame, $frameNumber);
    if ($findedElementFrame && $findedElementFrame->is_exist()) {
        $valueFrame = $findedElementFrame->get_value();
        echo "Current value in frame: " . $valueFrame . "\n";
    }
} else {
    echo "\nFailed to set value 'frame_test_value' to element with attribute 'id=form1_username' in frame 0\n";
}

// Get the value to verify it was set correctly
$getValueFrame = DOM::$input->get_value_by_attribute($attributeNameFrame, $attributeValueFrame, $exactMatchFrame, $frameNumber);
echo "Value of element with attribute 'id=form1_username' in frame 0: " . $getValueFrame . "\n";

// Quit the application
WINDOW::$app->quit();