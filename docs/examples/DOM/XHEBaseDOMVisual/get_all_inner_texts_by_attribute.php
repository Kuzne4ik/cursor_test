<?php
// Scenario: Example of getting all inner texts of elements by attribute

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get all inner texts of elements by attribute
$attrName = "class";
$attrValue = "link";

// Get all inner texts of elements with class="link"
$inner_texts = DOM::$anchor->get_all_inner_texts_by_attribute($attrName, $attrValue, true);

echo "All inner texts of elements with attribute $attrName='$attrValue':\n";
if (is_array($inner_texts) && count($inner_texts) > 0) {
    foreach ($inner_texts as $index => $text) {
        echo ($index + 1) . ". '$text'\n";
    }
} else {
    echo "No inner texts found for elements with attribute $attrName='$attrValue'\n";
}
echo "\n";

// Example 2: Get all inner texts of elements by another attribute
$attrName = "data-action";
$attrValue = "click";

// Get all inner texts of elements with data-action="click"
$inner_texts = DOM::$anchor->get_all_inner_texts_by_attribute($attrName, $attrValue, true);

echo "All inner texts of elements with attribute $attrName='$attrValue':\n";
if (count($inner_texts) > 0) {
    foreach ($inner_texts as $index => $text) {
        echo ($index + 1) . ". '$text'\n";
    }
} else {
    echo "No inner texts found for elements with attribute $attrName='$attrValue'\n";
}
echo "\n";

// Example 2: Use the retrieved inner texts to interact with the elements
$attrName = "data-action";
$attrValue = "click";

// Get all inner texts of elements with data-action="click"
$inner_texts = DOM::$anchor->get_all_inner_texts_by_attribute($attrName, $attrValue, true);

echo "Interacting with elements that have attribute $attrName='$attrValue':\n";
if (count($inner_texts) > 0) {
    // Get all numbers of elements with the same attribute
    $numbers = DOM::$anchor->get_all_numbers_by_attribute($attrName, $attrValue, true);
    
    if (count($numbers) > 0) {
        foreach ($numbers as $index => $number) {
            // Get the element by number
            $element = DOM::$anchor->get_by_number($number);
            
            if ($element->is_exist()) {
                echo "- Element number $number exists. ";
                
                // Get the inner text to verify
                $elementInnerText = DOM::$anchor->get_inner_text_by_number($number);
                echo "Inner text: '$elementInnerText'\n";
            }
        }
    } else {
        echo "No elements found with attribute $attrName='$attrValue'\n";
    }
} else {
    echo "No inner texts found for elements with attribute $attrName='$attrValue'\n";
}
echo "\n";

// Quit the application
WINDOW::$app->quit();