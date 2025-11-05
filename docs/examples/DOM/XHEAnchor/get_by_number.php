<?php

// Scenario: For the current page find DOM element anchor <a> by number
// Description: For the current page find DOM element <a> by number as XHEInterface
// Classes used: DOM, XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to the init.php file
if (!isset($path))
{
    // Path to the init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting the init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: Get DOM element anchor by serial number 1 among input of this type and perform click.

// Get anchor object by serial number 1 among DOM elements of this input type and get it as XHEInterface
$targetAnchor = DOM::$anchor->get_by_number(1);

// Check that the DOM element is received
if ($targetAnchor->inner_number != -1)
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