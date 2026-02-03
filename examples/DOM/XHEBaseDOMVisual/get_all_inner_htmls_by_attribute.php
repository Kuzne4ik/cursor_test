<?php
// Scenario: Example of getting all inner HTMLs of elements by attribute
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get all inner HTMLs of elements by attribute
$attrName = "class";
$attrValue = "container";

// Get all inner HTMLs of elements with class="container"
$inner_htmls = DOM::$div->get_all_inner_htmls_by_attribute($attrName, $attrValue, true);

echo "All inner HTMLs of elements with attribute $attrName='$attrValue':\n";
if ($inner_htmls) {
    foreach ($inner_htmls as $index => $html) {
        echo ($index + 1) . ". '$html'\n";
    }
} else {
    echo "No inner HTMLs found for elements with attribute $attrName='$attrValue'\n";
}
echo "\n";

// Quit the application
WINDOW::$app->quit();