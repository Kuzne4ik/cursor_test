<?php
// Scenario: Examples of using get_all_by_xpath function to retrieve multiple DOM elements by XPath expressions

// Path to init.php file for connecting to XHE API
$xhe_host = "127.0.0.1:7010";
$path = "../../../../../../Templates/init.php";

// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");

echo "\n\n=== Examples of using get_all_by_xpath function ===\n\n";

// Example 1: Get all input elements by XPath
$xpath = "//input";
$elements = DOM::$input->get_all_by_xpath($xpath);

// Get count of elements
$count = $elements->get_count();
echo "\n\nTotal input elements found: {$count}";

// Example 2: Iterate through retrieved elements and display their details
echo "\n\nIterating through all input elements:";
for ($i = 0; $i < $count; $i++) {
    $element = $elements->get($i);
    if ($element->is_exist()) {
        echo "\nInput element #{$i}:";
        echo "\n  Type: " . $element->get_attribute("type");
        echo "\n  Name: " . $element->get_name();
        echo "\n  ID: " . $element->get_id();
        echo "\n  Value: " . $element->get_value();
    }
}

// Quit the application
WINDOW::$app->quit();
?>