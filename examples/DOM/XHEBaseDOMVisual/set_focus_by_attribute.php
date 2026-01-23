<?php
// Scenario: Demonstrates how to set focus to a DOM element by its attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with form elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

// Wait for the page to load
WEB::$browser->wait(1);

// Example 1: Set focus to an input element by its attribute
$attributeName = "id";
$attributeValue = "form1_username";
$focusResult = DOM::$input->set_focus_by_attribute($attributeName, $attributeValue);
if ($focusResult) {
    echo "Example 1: Successfully set focus to input element with attribute 'id' and value 'form1_username'\n";
} else {
    echo "Example 1: Failed to set focus to input element with attribute 'id' and value 'form1_username'\n";
}

// Example 2: Set focus to an input element with exact attribute matching
$attributeName2 = "name";
$attributeValue2 = "username";
$exactlyMatch = true;
$focusResultExact = DOM::$input->set_focus_by_attribute($attributeName2, $attributeValue2, $exactlyMatch);
if ($focusResultExact) {
    echo "\nExample 2: Successfully set focus to input element with exact attribute 'name' and value 'username'\n";
} else {
    echo "\nExample 2: Failed to set focus to input element with exact attribute 'name' and value 'username'\n";
}

// Example 3: Set focus to an input element by its attribute in frame
$attributeName3 = "id";
$attributeValue3 = "form1_passwd";
$exactlyMatch3 = true;
$frameNumber = 0;
$focusResultFrame = DOM::$input->set_focus_by_attribute($attributeName3, $attributeValue3, $exactlyMatch3, $frameNumber);
if ($focusResultFrame) {
    echo "\nExample 3: Successfully set focus to input element with attribute 'id' and value 'bt1f' in frame '$frameNumber'\n";
} else {
    echo "\nExample 3: Failed to set focus to input element with attribute 'id' and value 'bt1f' in frame '$frameNumber'\n";
}


// Quit the application
WINDOW::$app->quit();