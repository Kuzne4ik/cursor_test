<?php

// Scenario: For the current page, get a DOM element using JavaScript code
// Description: For the current page, get a DOM element using JavaScript code
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

// Example 1: Get an element by ID using JavaScript

// Get an element by ID using JavaScript
$findedElement = DOM::$element->get_by_js("document.getElementById('id')");

// Check that the DOM element is received
if ($findedElement->inner_number != -1) {
    echo "Element found by ID using JavaScript\n";
    echo "Element tag: " . $findedElement->get_tag() . "\n";
    echo "Element inner text: " . $findedElement->get_inner_text() . "\n";
} else {
    echo "Element not found by ID using JavaScript\n";
}

// Example 2: Get an element by tag name using JavaScript

// Get an element by tag name using JavaScript
$findedElement = DOM::$element->get_by_js("document.getElementsByTagName('div')[0]");

// Check that the DOM element is received
if ($findedElement->inner_number != -1) {
    echo "\nFirst DIV element found using JavaScript\n";
    echo "Element tag: " . $findedElement->get_tag() . "\n";
    echo "Element inner text: " . $findedElement->get_inner_text() . "\n";
} else {
    echo "\nFirst DIV element not found using JavaScript\n";
}

// Example 3: Get an element by class name using JavaScript

// Get an element by class name using JavaScript
$findedElement = DOM::$element->get_by_js("document.getElementsByClassName('some_class')[0]");

// Check that the DOM element is received
if ($findedElement->inner_number != -1) {
    echo "\nFirst element with class 'some_class' found using JavaScript\n";
    echo "Element tag: " . $findedElement->get_tag() . "\n";
    echo "Element inner text: " . $findedElement->get_inner_text() . "\n";
} else {
    echo "\nFirst element with class 'some_class' not found using JavaScript\n";
}

// Example 4: Get an element by query selector using JavaScript

// Get an element by query selector using JavaScript
$findedElement = DOM::$element->get_by_js("document.querySelector('a[href=\"https://example.com\"]')");

// Check that the DOM element is received
if ($findedElement->inner_number != -1) {
    echo "\nElement with specific href found using JavaScript\n";
    echo "Element tag: " . $findedElement->get_tag() . "\n";
    echo "Element href: " . $findedElement->get_href() . "\n";
} else {
    echo "\nElement with specific href not found using JavaScript\n";
}

// Example 5: Get an element using complex JavaScript

// Get an element using complex JavaScript
$findedElement = DOM::$element->get_by_js(
    "var elements = document.querySelectorAll('div.container > p'); " .
    "for (var i = 0; i < elements.length; i++) { " .
    "  if (elements[i].textContent.includes('specific text')) { " .
    "    return elements[i]; " .
    "  } " .
    "} " .
    "return null;"
);

// Check that the DOM element is received
if ($findedElement->inner_number != -1) {
    echo "\nElement with specific text found using complex JavaScript\n";
    echo "Element tag: " . $findedElement->get_tag() . "\n";
    echo "Element inner text: " . $findedElement->get_inner_text() . "\n";
} else {
    echo "\nElement with specific text not found using complex JavaScript\n";
}

// Stop the application
WINDOW::$app->quit();
?>