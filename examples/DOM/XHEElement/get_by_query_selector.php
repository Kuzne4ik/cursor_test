<?php

// Scenario: For the current page, get a DOM element using CSS query selector
// Description: For the current page, get a DOM element using CSS query selector (document.querySelector)
// Classes used: XHEElement, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting to init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get an element by ID using query selector

// Get an element by ID using query selector
$findedElement = DOM::$element->get_by_query_selector("#some_id");

// Check that the DOM element is received
if ($findedElement->inner_number != -1) {
    echo "Element found by ID selector #some_id\n";
    echo "Element tag: " . $findedElement->get_tag() . "\n";
    echo "Element inner text: " . $findedElement->get_inner_text() . "\n";
} else {
    echo "Element not found by ID selector #some_id\n";
}

// Example 2: Get an element by class name using query selector

// Get an element by class name using query selector
$findedElement = DOM::$element->get_by_query_selector(".some_class");

// Check that the DOM element is received
if ($findedElement->inner_number != -1) {
    echo "\nElement found by class selector .some_class\n";
    echo "Element tag: " . $findedElement->get_tag() . "\n";
    echo "Element inner text: " . $findedElement->get_inner_text() . "\n";
} else {
    echo "\nElement not found by class selector .some_class\n";
}

// Example 3: Get an element by attribute using query selector

// Get an element by attribute using query selector
$findedElement = DOM::$element->get_by_query_selector("a[href='https://example.com']");

// Check that the DOM element is received
if ($findedElement->inner_number != -1) {
    echo "\nElement found by attribute selector a[href='https://example.com']\n";
    echo "Element tag: " . $findedElement->get_tag() . "\n";
    echo "Element href: " . $findedElement->get_href() . "\n";
} else {
    echo "\nElement not found by attribute selector a[href='https://example.com']\n";
}

// Example 4: Get an element by complex selector

// Get an element by complex selector
$findedElement = DOM::$element->get_by_query_selector("div.container > p:first-child");

// Check that the DOM element is received
if ($findedElement->inner_number != -1) {
    echo "\nElement found by complex selector div.container > p:first-child\n";
    echo "Element tag: " . $findedElement->get_tag() . "\n";
    echo "Element inner text: " . $findedElement->get_inner_text() . "\n";
} else {
    echo "\nElement not found by complex selector div.container > p:first-child\n";
}

// Stop the application
WINDOW::$app->quit();
?>