<?php
// Scenario: Demonstrates how to set value to a DOM element by its number
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with input fields
$pageUrl = TEST_POLYGON_URL . "form.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Set value to an input element by its number
$elementNumber1 = 0;
$valueToSet1 = "test_value";

echo("\n\nExample 1: Set value by number\n");
$setValueResult = DOM::$input->set_value_by_number($elementNumber1, $valueToSet1);
if ($setValueResult) {
    echo "Example 1: Successfully set value '$valueToSet1' to element with number $elementNumber1\n";
} else {
    echo "Example 1: Failed to set value '$valueToSet1' to element with number $elementNumber1\n";
}

// Get the value to verify it was set correctly
$getValue = DOM::$input->get_value_by_number($elementNumber1);
echo "Example 1: Value of element with number $elementNumber1: " . $getValue . "\n";

// Example 2: Set value to an input element by its number with different element
$elementNumber2 = 1;
$valueToSet2 = "another_value";

echo("\n\nExample 2: Set value by number with different element\n");
$setValueResultNext = DOM::$input->set_value_by_number($elementNumber2, $valueToSet2);
if ($setValueResultNext) {
    echo "Example 2: Successfully set value '$valueToSet2' to element with number $elementNumber2\n";
} else {
    echo "Example 2: Failed to set value '$valueToSet2' to element with number $elementNumber2\n";
}

// Get the value to verify it was set correctly
$getValueNext = DOM::$input->get_value_by_number($elementNumber2);
echo "Example 2: Value of element with number $elementNumber2: " . $getValueNext . "\n";

// Example 3: Set value to an input element by its number in frame
$elementNumber3 = 0;
$valueToSet3 = "frame_value";
$frameNumber3 = "0";

echo("\n\nExample 3: Set value by number in frame\n");
$setValueResultFrame = DOM::$input->set_value_by_number($elementNumber3, $valueToSet3, $frameNumber3);
if ($setValueResultFrame) {
    echo "Example 3: Successfully set value '$valueToSet3' to element with number $elementNumber3 in frame $frameNumber3\n";
} else {
    echo "Example 3: Failed to set value '$valueToSet3' to element with number $elementNumber3 in frame $frameNumber3\n";
}

// Get the value to verify it was set correctly
$getValueFrame = DOM::$input->get_value_by_number($elementNumber3, $frameNumber3);
echo "Example 3: Value of element with number $elementNumber3 in frame $frameNumber3: " . $getValueFrame . "\n";

// Quit the application
WINDOW::$app->quit();