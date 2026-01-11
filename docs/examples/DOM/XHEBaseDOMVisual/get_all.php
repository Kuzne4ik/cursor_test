<?php
// Scenario: Examples of using get_all function to retrieve all DOM elements
// Path to init.php file for connecting to XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

echo "\n\n=== Examples of using get_all function ===\n\n";

// Example 1: Get all elements on the page
$elements = DOM::$element->get_all();

// Get count of all elements
$count = $elements->get_count();
echo "\n\nTotal elements found on the page: {$count}";

// Example 2: Iterate through all elements and display their tag names
echo "\n\nIterating through all elements:";
for ($k = 0; $k < $count; $k++) {
    $findedElement = $elements->get($k);
    if ($findedElement->is_exist()) {
        echo "\nElement #{$k}: " . $findedElement->get_tag();
    }
}

// Example 3: Get all inputs
echo "\n\nGet all elements by tag 'input':";
$inputElements = $elements = DOM::$input->get_all();;
echo "\n\nTotal input elements found: " . count($inputElements);

// Example 4: Get all elements and perform actions on specific types
echo "\n\nFinding and interacting with all inputs:";
$inputElements = $elements = DOM::$input->get_all();
$inputElementsCount = count($inputElements);
for ($k = 0; $k < $inputElementsCount; $k++) {
    $currentInput = $inputElements->get($k);
    if ($currentInput->is_exist()) {
        $val = $currentInput->get_value();
        if ($val) {
            $linkElements[] = $findedElement;
            echo "\nInput #{$k}: value=" . $val;
        }
        else{
        echo "\nInput #{$k}: value= ''";
        }
    }
}

// Example 5: Get all inputs in a specific frame (frame=0)
echo "\n\nGetting all inputs in frame 0:";
$frameInputs = DOM::$input->get_all("0");

// Get count of all elements in frame
$frameInputsCount = $frameInputs->get_count();
echo "\n\nTotal inputs found in frame 0: {$frameInputsCount}";

// Quit the application
WINDOW::$app->quit();
?>