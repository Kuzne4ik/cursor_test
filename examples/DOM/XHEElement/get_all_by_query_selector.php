<?php

// Scenario: For the current page, get all DOM elements using CSS query selector
// Description: For the current page, get all DOM elements using CSS query selector (document.querySelectorAll)
// Classes used: XHEElement, XHEInterfaces, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting to init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get all elements by class name using query selector

// Get all elements by class name using query selector
$elements = DOM::$element->get_all_by_query_selector("div");

// Get the count of elements
$count = $elements->get_count();

// Display the count
echo "Number of elements with class 'some_class': " . $count . "\n";

// If there are any elements, display information about the first one
if ($count > 0) {
    $firstElement = $elements->get(0);
    if ($firstElement->inner_number != -1) {
        echo "First element tag: " . $firstElement->get_tag() . "\n";
        echo "First element inner text: " . $firstElement->get_inner_text() . "\n";
    }
}

// Example 2: Get all links using query selector

// Get all links using query selector
$links = DOM::$element->get_all_by_query_selector("a[href]");

// Get the count of links
$linkCount = $links->get_count();

// Display the count
echo "\nNumber of links with href attribute: " . $linkCount . "\n";

// If there are any links, display information about the first three
for ($k = 0; $k < min(3, $linkCount); $k++) {
    $link = $links->get($k);
    if ($link->inner_number != -1) {
        echo "Link " . ($k + 1) . " href: " . $link->get_href() . "\n";
        echo "Link " . ($k + 1) . " text: " . $link->get_inner_text() . "\n";
    }
}

// Example 3: Get all input elements of type text using query selector

// Get all input elements of type text using query selector
$textInputs = DOM::$element->get_all_by_query_selector("input[type='text']");

// Get the count of text inputs
$inputCount = $textInputs->get_count();

// Display the count
echo "\nNumber of text input elements: " . $inputCount . "\n";

// If there are any text inputs, display information about the first one
if ($inputCount > 0) {
    $firstInput = $textInputs->get(0);
    if ($firstInput->inner_number != -1) {
        echo "First text input name: " . $firstInput->get_name() . "\n";
        echo "First text input value: " . $firstInput->get_value() . "\n";
    }
}

// Example 4: Get all elements with complex selector

// Get all elements with complex selector
$complexElements = DOM::$element->get_all_by_query_selector("div.container > p");

// Get the count of elements
$complexCount = $complexElements->get_count();

// Display the count
echo "\nNumber of p elements inside div.container: " . $complexCount . "\n";

// Stop the application
WINDOW::$app->quit();
?>