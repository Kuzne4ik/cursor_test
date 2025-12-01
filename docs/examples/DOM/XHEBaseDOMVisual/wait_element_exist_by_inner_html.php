<?php
// Scenario: Example of waiting for a DOM element to exist by its inner HTML

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with DOM elements
$pageUrl = TEST_POLYGON_URL . "anchor.html";
echo("Example 1: Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Wait for an element with inner HTML containing "<span>Button</span>" to exist
$innerHtml1 = "Блог";
$exactMatch1 = true;
echo("Example 1: Wait for element anchor with inner HTML containing '$innerHtml1' to exist\n");
$elementExists = DOM::$anchor->wait_element_exist_by_inner_html($innerHtml1, $exactMatch1);

if ($elementExists) {
    echo("Example 1: Element with inner HTML containing '$innerHtml1' exists on the page\n");
    
    // Get the element to perform additional operations
    $findedElement = DOM::$anchor->get_by_inner_html($innerHtml1);
    
    if ($findedElement->is_exist()) {
        echo("Example 1: Successfully retrieved element anchor with inner HTML containing '$innerHtml1'\n");
    } else {
        echo("Example 1: Failed to retrieve element with inner HTML containing '$innerHtml1'\n");
    }
} else {
    echo("Example 1: Element with inner HTML containing '$innerHtml1' does not exist on the page\n");
}


// Quit the application
WINDOW::$app->quit();