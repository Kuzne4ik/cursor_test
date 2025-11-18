<?php
// Scenario: Example of getting all numbers of elements by attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "button.html");

// Example 1: Basic usage - get all numbers of elements by attribute
$attrName = "name";
$attrValue = "btn1";

// Get all numbers of elements with name="btn1f" for input type `button`
$numbers = DOM::$button->get_all_numbers_by_attribute($attrName, $attrValue, true);

echo "Numbers of elements with attribute $attrName='$attrValue':\n";
if (count($numbers) > 0) {
    foreach ($numbers as $number) {
        echo "- Element number: $number\n";
    }
} else {
    echo "No elements found with attribute $attrName='$attrValue'\n";
}
echo "\n";

// Example 2: Get all numbers of elements by attribute for input type `submit`
$attrName = "name";
$attrValue = "form1";

// Get all numbers of elements with name="btn1f"
$numbers = DOM::$form->get_all_numbers_by_attribute($attrName, $attrValue, true);

echo "Numbers of elements with attribute $attrName='$attrValue':\n";
if (count($numbers) > 0) {
    foreach ($numbers as $number) {
        echo "- Element number: $number\n";
    }
} else {
    echo "No elements found with attribute $attrName='$attrValue'\n";
}
echo "\n";

// Quit the application
WINDOW::$app->quit();