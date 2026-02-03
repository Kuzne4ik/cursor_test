<?php
// Scenario: Example of waiting for a DOM element to exist by its XPath
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with DOM elements
WEB::$browser->navigate(TEST_POLYGON_URL . "form.html");
WEB::$browser->wait_js();

// Example 1: Wait for a form element by XPath
$xpath1 = "//form[@id='frm1']";
echo("Example 1: Wait for form element with XPath: $xpath1\n");
$elementExists = DOM::$form->wait_element_exist_by_xpath($xpath1);

if ($elementExists) {
    echo "Element with XPath '$xpath1' exists on page\n";
    
    // Get the element to perform additional operations
    $findedElement = DOM::$form->get_by_xpath($xpath1);
    
    if ($findedElement->is_exist()) {
        echo "Successfully retrieved element with XPath '$xpath1'\n";
        echo "Element tag name: " . $findedElement->get_name() . "\n";
    } else {
        echo "Failed to retrieve element with XPath '$xpath1'\n";
    }
} else {
    echo "Element with XPath '$xpath1' does not exist on page\n";
}

// Example 2: Wait for an input element with complex XPath
$xpath2 = "//input[@type='submit' and @value='Отправить']";
echo("\nExample 2: Wait for input element with complex XPath: $xpath2\n");
$elementExistsComplex = DOM::$input->wait_element_exist_by_xpath($xpath2);

if ($elementExistsComplex) {
    echo "Element with complex XPath '$xpath2' exists on page\n";
} else {
    echo "Element with complex XPath '$xpath2' does not exist on page\n";
}

// Quit the application
WINDOW::$app->quit();