<?php
// Scenario: Check if DOM element exists by XPath
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "children.html");
WEB::$browser->wait_for();

// Example 1: Check if element exists by XPath (by ID)
$xpath = "//div[@id='parent_main']";
$exists = DOM::$element->is_exist_by_xpath($xpath);

if ($exists) {
    echo "\nElement with XPath '$xpath' exists on the page";
} else {
    echo "\nElement with XPath '$xpath' does not exist on the page";
}

// Example 2: Check if element exists by XPath (by class)
$xpath = "//div[@class='child']";
$exists = DOM::$element->is_exist_by_xpath($xpath);

if ($exists) {
    echo "\nElement with XPath '$xpath' exists on the page";
} else {
    echo "\nElement with XPath '$xpath' does not exist on the page";
}

// Quit the application
WINDOW::$app->quit();