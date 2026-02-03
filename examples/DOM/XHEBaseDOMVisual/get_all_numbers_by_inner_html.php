<?php
// Scenario: Example of getting all numbers of elements by inner HTML
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get all numbers of elements by inner HTML
$innerHtml = "Блог";

// Get all numbers of elements with inner HTML "Кнопка 1"
$numbers = DOM::$anchor->get_all_numbers_by_inner_html($innerHtml, true);

echo "Numbers of elements with inner HTML '$innerHtml':\n";
if ( count($numbers) > 0) {
    foreach ($numbers as $number) {
        echo "- Element number: $number\n";
    }
} else {
    echo "No elements found with inner HTML '$innerHtml'\n";
}
echo "\n";

// Quit the application
WINDOW::$app->quit();