<?php
// Scenario: Example of getting all numbers of elements by inner text

$xhe_host = "127.0.0.1:7010";
// Path to init.php file for connecting to XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with XHE API
require($path);

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get all numbers of elements by inner text
$innerText = "Блог";

// Get all numbers of elements with inner text "Submit"
$numbers = DOM::$anchor->get_all_numbers_by_inner_text($innerText, true);

echo "Numbers of elements with inner text '$innerText':\n";
if (count($numbers) > 0) {
    foreach ($numbers as $number) {
        echo "- Element number: $number\n";
    }
} else {
    echo "No elements found with inner text '$innerText'\n";
}
echo "\n";

echo "\n";

// Quit the application
WINDOW::$app->quit();