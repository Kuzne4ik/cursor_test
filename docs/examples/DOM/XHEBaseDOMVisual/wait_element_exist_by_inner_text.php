<?php
// Scenario: Example of waiting for a DOM element to exist by its inner text
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with DOM elements
$pageUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Wait for an element with inner text "Submit" to exist
$innerText1 = "Блог";
$exactMatch1 = true;
echo("\n\nExample 1: Wait for element with inner text '$innerText1' to exist\n");
$elementExists = DOM::$element->wait_element_exist_by_inner_text($innerText1, $exactMatch1);

if ($elementExists) {
    echo "Element anchor with inner text '$innerText1' exists on the page\n";
    
    // Get the element to perform additional operations
    $findedElement = DOM::$anchor->get_by_inner_text($innerText1);
    
    if ($findedElement->is_exist()) {
        echo "Successfully retrieved element anchor with inner text '$innerText1'\n";
    } else {
        echo "Failed to retrieve element with inner text '$innerText1'\n";
    }
} else {
    echo "Element with inner text '$innerText1' does not exist on the page\n";
}


// Quit the application
WINDOW::$app->quit();