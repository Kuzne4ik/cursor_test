<?php
// Scenario: Examples of using the get_by_xpath function to find DOM elements by XPath

// Path to the init.php file for connecting to the XHE API
$xhe_host = "127.0.0.1:7010";
$path = "../../../../../../Templates/init.php";

// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

echo "\n\n=== Examples of using get_by_xpath function ===\n\n";

// Example 1: Get element by class name using XPath
$xpath = "//div[contains(@class, 'container')]";
$findedElement = DOM::$element->get_by_xpath($xpath);

// Check if element exists
if ($findedElement->is_exist()) {
    echo "\n\nElement with XPath '{$xpath}' found successfully";
    // Get and display element details
    echo "\nElement tag: " . $findedElement->get_tag();
    echo "\nElement class: " . $findedElement->get_attribute("class");
    echo "\nElement inner text: " . $findedElement->get_inner_text();
} else {
    echo "\n\nElement with XPath '{$xpath}' not found";
}

// Example 3: Get element by text content using XPath
$xpath = "//a[contains(text(), 'Автомобильный сайт')]";
$findedElement = DOM::$element->get_by_xpath($xpath);

// Check if element exists
if ($findedElement->is_exist()) {
    echo "\n\nElement with XPath '{$xpath}' found successfully";
    // Get and display element details
    echo "\nElement tag: " . $findedElement->get_tag();
    echo "\nElement href: " . $findedElement->get_href();
    echo "\nElement inner text: " . $findedElement->get_inner_text();
} else {
    echo "\n\nElement with XPath '{$xpath}' not found";
}

// Quit the application
WINDOW::$app->quit();
?>