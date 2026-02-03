<?php
// Scenario: Examples of working with input elements within frames
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with frames and input elements
WEB::$browser->navigate(TEST_POLYGON_URL . "frames_with_inputs.html");

// Wait for page to load
WEB::$browser->wait_for();

// Example 1: Click on an input element in frame 0
echo "Clicking on an input element in frame 0...\n";
$result = DOM::$input->click_by_number(0, "0");
if ($result) {
    echo "Successfully clicked on the input element in frame 0.\n";
} else {
    echo "Failed to click on the input element in frame 0.\n";
}

// Example 2: Get an input element in frame 0 and check its properties
echo "\nGetting input element in frame 0 and checking its properties...\n";
$inputElement = DOM::$input->get_by_number(0, "0");
if ($inputElement->inner_number > -1) {
    echo "Successfully got the input element in frame 0.\n";
    echo "Element tag: " . $inputElement->get_tag() . "\n";
    echo "Element name: " . $inputElement->get_name() . "\n";
    echo "Element id: " . $inputElement->get_id() . "\n";
    echo "Element type: " . $inputElement->get_attribute("type") . "\n";
} else {
    echo "Failed to get the input element in frame 0.\n";
}

// Example 3: Set value of an input element in frame 0
echo "\nSetting value of input element in frame 0...\n";
$result = DOM::$input->set_value_by_number(0, "text in frame 0", "0");
if ($result) {
    echo "Successfully set value of the input element in frame 0.\n";
    // Verify the value was set
    $value = DOM::$input->get_value_by_number(0, "0");
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of the input element in frame 0.\n";
}

// Example 4: Click on an input element by name in frame 0
echo "\nClicking on input element by name in frame 0...\n";
$result = DOM::$input->click_by_name("frame_input", "0");
if ($result) {
    echo "Successfully clicked on input element with name='frame_input' in frame 0.\n";
} else {
    echo "Failed to click on input element with name='frame_input' in frame 0.\n";
}

// Example 5: Get value of an input element by attribute in frame 0
echo "\nGetting value of input element by attribute in frame 0...\n";
$value = DOM::$input->get_value_by_attribute("id", "frame_input_id", true, "0");
if ($value !== "") {
    echo "Successfully got value of input element with id='frame_input_id' in frame 0.\n";
    echo "Value: " . $value . "\n";
} else {
    echo "Failed to get value of input element with id='frame_input_id' in frame 0 or element has no value.\n";
}

// Example 6: Set value of an input element by attribute in frame 0
echo "\nSetting value of input element by attribute in frame 0...\n";
$result = DOM::$input->set_value_by_attribute("id", "frame_input_id", true, "new value in frame", "0");
if ($result) {
    echo "Successfully set value of input element with id='frame_input_id' in frame 0.\n";
    // Verify the value was set
    $value = DOM::$input->get_value_by_attribute("id", "frame_input_id", true, "0");
    echo "Current value: " . $value . "\n";
} else {
    echo "Failed to set value of input element with id='frame_input_id' in frame 0.\n";
}

// Quit the application
WINDOW::$app->quit();
?>