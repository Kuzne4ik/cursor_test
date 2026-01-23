<?php

// Scenario: For the current page find DOM element anchor <a>
// Description: For the current page find DOM element <a> by `name` attribute value as XHEInterface
// Classes used: DOM, XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get anchor object by `name` attribute as XHEInterface

// Get anchor object by `name` attribute with value `list`
$targetAnchorInterface = DOM::$anchor->get_by_name("list");

// Check that the DOM element is received
if ($targetAnchorInterface->inner_number != -1)
{
    // Anchor object received as XHEInterface
     echo("\nThe anchor found!");
}
else
{
    // Anchor object not found on the page
     echo("\nThe anchor not found!");
}

// Stop work
WINDOW::$app->quit();
?>
