<?php
// Scenario: Demonstrates how to set value to a DOM element by its name attribute
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

// Example 1: Set value to an input element by its name
$elementName1 = "username";
$valueToSet1 = "john_doe";

echo("\n\nExample 1: Set value by name\n");
$setValueResult = DOM::$input->set_value_by_name($elementName1, $valueToSet1);
if ($setValueResult) {
    echo "Example 1: Successfully set value '$valueToSet1' to element with name '$elementName1'\n";
} else {
    echo "Example 1: Failed to set value '$valueToSet1' to element with name '$elementName1'\n";
}

// Get the value to verify it was set correctly
$getValue = DOM::$input->get_value_by_name($elementName1);
echo "Example 1: Value of element with name '$elementName1': " . $getValue . "\n";

// Example 2: Set value to an input element by its name with different element
$elementName2 = "passwd";
$valueToSet2 = "test_password";

echo("\n\nExample 2: Set value by name with different element\n");
$setValueResultNext = DOM::$input->set_value_by_name($elementName2, $valueToSet2);
if ($setValueResultNext) {
    echo "Example 2: Successfully set value '$valueToSet2' to element with name '$elementName2'\n";
} else {
    echo "Example 2: Failed to set value '$valueToSet2' to element with name '$elementName2'\n";
}

// Get the value to verify it was set correctly
$getValueNext = DOM::$input->get_value_by_name($elementName2);
echo "Example 2: Value of element with name '$elementName2': " . $getValueNext . "\n";

// Example 3: Set value to an input element by its name in frame
$elementName3 = "username";
$valueToSet3 = "frame_test_value";
$frameNumber3 = "0";

echo("\n\nExample 3: Set value by name in frame\n");
$setValueResultFrame = DOM::$input->set_value_by_name($elementName3, $valueToSet3, $frameNumber3);
if ($setValueResultFrame) {
    echo "Example 3: Successfully set value '$valueToSet3' to element with name '$elementName3' in frame $frameNumber3\n";
} else {
    echo "Example 3: Failed to set value '$valueToSet3' to element with name '$elementName3' in frame $frameNumber3\n";
}

// Get the value to verify it was set correctly
$getValueFrame = DOM::$input->get_value_by_name($elementName3, $frameNumber3);
echo "Example 3: Value of element with name '$elementName3' in frame $frameNumber3: " . $getValueFrame . "\n";

// Quit the application
WINDOW::$app->quit();