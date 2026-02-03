<?php

// Scenario: Remove an attribute from a DOM element
// Description: For current page, find a DOM element and remove an attribute from it
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Remove an attribute from an anchor element

// Navigate to polygon page
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Get DOM element <a> by name
$targetAnchor = DOM::$anchor->get_by_name("igvard");

// Check that DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Get all attributes of the element
    echo "All attributes of element with name 'igvard':\n\n";
    echo $targetAnchor->get_all_attributes();
    
    echo("\n\n");
    
    // Remove attribute with name 'target' from the element
    echo "Remove attribute with name 'target' from element:\n\n";
    echo $targetAnchor->remove_attribute("target");
    
    echo("\n\n");
    
    // Get all attributes of the element again
    echo "All attributes of element with name 'igvard' after removal:\n\n";
    echo $targetAnchor->get_all_attributes();
}

// Stop the application
WINDOW::$app->quit();
?>