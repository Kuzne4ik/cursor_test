<?php
// Scenario: Example of getting all inner texts of elements on a page
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "button.html");

// Example 1: Basic usage - get all inner texts of elements on the page
$inner_texts_str = DOM::$h3->get_all_inner_texts(";");

$inner_texts = explode(";", $inner_texts_str);

echo "All inner texts found on the page:\n";
if (count($inner_texts) > 0) {
    foreach ($inner_texts as $index => $text) {
        echo ($index + 1) . ". '$text'\n";
    }
} else {
    echo "No inner texts found on the page.\n";
}

echo "\n";

// Quit the application
WINDOW::$app->quit();