<?php

// Scenario: Set inner text of a DOM element
// Description: For current page, find an element and set its inner text
// Classes used: XHEElement, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{  
    // Path to init.php file for connecting to XHE API
    $path = "../../../Templates/init.php";
    // When connecting init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Example 1: Set inner text of an element

// Navigate to test site
WEB::$browser->navigate(TEST_POLYGON_URL . "input.html");

// Get DOM element by attribute "name" equal to "ist"
$targetElement = DOM::$element->get_by_attribute("name", "ist", false);

// Check that DOM element was found
if ($targetElement->inner_number != -1) {
    // Set inner text for element with attribute 'name' equal to 'ist'
    echo "2. Set inner text for element with attribute 'name' equal to 'ist': ";
    echo $targetElement->set_inner_text("NEW INNER TEXT") . "\n";
}

// Stop application
WINDOW::$app->quit();
?>