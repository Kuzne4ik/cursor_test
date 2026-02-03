<?php

// Scenario: For the current page, convert the number of a DOM element to the number of a specific object
// Description: For the current page, convert the number of a DOM element to the number of a specific object
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

// Example 1: Convert the number of a DOM element to the number of an anchor object

// Get the first element on the page as XHEInterface
$findedElement = DOM::$element->get_by_number(0);

// Check that the DOM element is received
if ($findedElement->inner_number != -1) {
    // Convert the number of the DOM element to the number of an anchor object
    $anchorNumber = DOM::$element->convert_number(0, "anchor");
    
    // Display the result
    if ($anchorNumber !== -1) {
        echo "Converted element number 0 to anchor number: " . $anchorNumber . "\n";
        
        // Get the anchor by the converted number
        $anchor = DOM::$anchor->get_by_number($anchorNumber);
        
        // Check that the anchor is received
        if ($anchor->inner_number != -1) {
            echo "Anchor href: " . $anchor->get_href() . "\n";
        } else {
            echo "Failed to get anchor by converted number.\n";
        }
    } else {
        echo "Failed to convert element number 0 to anchor number.\n";
    }
} else {
    echo "Failed to get element number 0.\n";
}

// Example 2: Convert the number of a DOM element to the number of an input object

// Get the second element on the page as XHEInterface
$findedElement = DOM::$element->get_by_number(1);

// Check that the DOM element is received
if ($findedElement->inner_number != -1) {
    // Convert the number of the DOM element to the number of an input object
    $inputNumber = DOM::$element->convert_number(1, "input");
    
    // Display the result
    if ($inputNumber !== -1) {
        echo "\nConverted element number 1 to input number: " . $inputNumber . "\n";
        
        // Get the input by the converted number
        $input = DOM::$input->get_by_number($inputNumber);
        
        // Check that the input is received
        if ($input->inner_number != -1) {
            echo "Input name: " . $input->get_name() . "\n";
            echo "Input type: " . $input->get_type() . "\n";
        } else {
            echo "Failed to get input by converted number.\n";
        }
    } else {
        echo "Failed to convert element number 1 to input number.\n";
    }
} else {
    echo "Failed to get element number 1.\n";
}

// Stop the application
WINDOW::$app->quit();
?>