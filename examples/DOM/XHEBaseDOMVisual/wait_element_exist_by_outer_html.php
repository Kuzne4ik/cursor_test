<?php
// Scenario: Example of waiting for a DOM element to exist by its outer HTML
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with DOM elements
$pageUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Wait for an element with outer HTML containing "Блог" to exist
$outerHtml1 = "<div class=\"inner\">Hello</div>";
$exactMatch1 = true;
echo("Example 1: Wait for element anchor with outer HTML containing '$outerHtml1' to exist\n");
$elementExists = DOM::$anchor->wait_element_exist_by_outer_html($outerHtml1, $exactMatch1);

if ($elementExists) {
    echo "Element with outer HTML containing '$outerHtml1' exists on the page\n";
    
    // Get the element to perform additional operations
    echo("Example 1: Get element by outer HTML\n");
    $findedElement = DOM::$element->get_by_outer_html($outerHtml1);
    
    if ($findedElement->is_exist()) {
        echo "Example 1: Successfully retrieved element with outer HTML containing '$outerHtml1'\n";
    } else {
        echo "Example 1: Failed to retrieve element with outer HTML containing '$outerHtml1'\n";
    }
} else {
    echo "Example 1: Element with outer HTML containing '$outerHtml1' does not exist on the page\n";
}


// Quit the application
WINDOW::$app->quit();