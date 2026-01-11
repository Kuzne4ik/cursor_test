<?php
// Scenario: Example of getting all inner HTMLs of elements by inner text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with various elements
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Basic usage - get all inner HTMLs of elements by inner text
$innerText = "Блог";

// Get all inner HTMLs of elements with inner text "`id_mouseover1`"
$inner_htmls = DOM::$anchor->get_all_inner_htmls_by_inner_text($innerText, true);

echo "All inner HTMLs of elements with inner text '$innerText':\n";
if (count($inner_htmls) > 0) {
    foreach ($inner_htmls as $index => $html) {
        echo ($index + 1) . ". '$html'\n";
    }
} else {
    echo "No inner HTMLs found for elements with inner text '$innerText'\n";
}
echo "\n";

// Example 2: Get all inner HTMLs of elements by another inner text
$innerText = "Hello";

// Get all inner HTMLs of elements with inner text "`id_onclick1`"
$inner_htmls = DOM::$anchor->get_all_inner_htmls_by_inner_text($innerText, true);

echo "All inner HTMLs of elements with inner text '$innerText':\n";
if (count($inner_htmls) > 0) {
    foreach ($inner_htmls as $index => $html) {
        echo ($index + 1) . ". '$html'\n";
    }
} else {
    echo "No inner HTMLs found for elements with inner text '$innerText'\n";
}
echo "\n";


echo "\n";

// Quit the application
WINDOW::$app->quit();