<?php
// Scenario: Examples of using get_all_by_number function to retrieve multiple DOM elements by their numbers
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

echo "\n\n=== Examples of using get_all_by_number function ===\n\n";

// Example 1: Get elements by specific numbers
$numbers = "0;1;4";
$elements = DOM::$form->get_all_by_number($numbers);

// Get count of elements
$count = $elements->get_count();
echo "\n\nTotal elements found with numbers {$numbers}: {$count}";

// Example 2: Iterate through retrieved elements and display their details
echo "\n\nIterating through elements retrieved by numbers:";
for ($i = 0; $i < $count; $i++) {
    $findedElement = $elements->get($i);
    if ($findedElement->is_exist()) {
        echo "\nElement #{$i}:";
        echo "\n  Tag: " . $findedElement->get_tag();
        echo "\n  Name: " . $findedElement->get_name();
        echo "\n  ID: " . $findedElement->get_id();
        echo "\n  Inner text: " . $findedElement->get_inner_text();
    }
}

// Quit the application
WINDOW::$app->quit();
?>