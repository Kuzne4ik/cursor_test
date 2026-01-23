<?php

// Scenario: Set attribute value for a DOM element
// Description: For current page, find an element by inner text and set its attribute value
// Classes used: XHEElement, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Example 1: Set attribute value for a DOM element

// Navigate to test site
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Get DOM element by inner text "onclick"
$targetElement = DOM::$element->get_by_inner_text("onclick", false);

// Check that DOM element was found
if ($targetElement->inner_number != -1) {
    // Get all attributes of the element
    echo("\nGet all attributes of the element: ");
    echo $targetElement->get_all_attributes_values() . "\n\n";

    // Set attribute "target" with value "12345"
    echo("\nSet attribute 'target' with value '12345': ");
    echo $targetElement->set_attribute("target", "12345") . "\n\n";

    // Get all attributes again to verify the change
    echo("\nGet all attributes of the element: ");
    echo $targetElement->get_all_attributes_values() . "\n\n";
}

// Stop the application
WINDOW::$app->quit();
?>