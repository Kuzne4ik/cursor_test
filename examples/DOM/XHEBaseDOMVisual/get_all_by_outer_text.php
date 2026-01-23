<?php
// Scenario: Examples of using get_all_by_outer_text function to retrieve multiple DOM elements by their outer text
// Path to init.php file for connecting to XHE API
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

echo "\n\n=== Examples of using get_all_by_outer_text function ===\n\n";

// Example 1: Get elements by exact outer text match
$outer_text = "Hello";
$elements = DOM::$div->get_all_by_outer_text($outer_text, true);

// Get count of elements
$count = $elements->get_count();
echo "\n\nTotal elements found with exact outer text '{$outer_text}': {$count}";

// Example 2: Iterate through retrieved elements and display their details
echo "\n\nIterating through elements with exact outer text '{$outer_text}':";
for ($i = 0; $i < $count; $i++) {
    $currentElement = $elements->get($i);
    if ($currentElement->is_exist()) {
        echo "\nElement #{$i}:";
        echo "\n  Tag: " . $currentElement->get_tag();
        echo "\n  Name: " . $currentElement->get_name();
        echo "\n  ID: " . $currentElement->get_id();
        echo "\n  Attribute class: " . $currentElement->get_attribute('class');
    }
}

// Quit the application
WINDOW::$app->quit();
?>