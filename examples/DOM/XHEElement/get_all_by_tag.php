<?php

// Scenario: For the current page, get all DOM elements with a specific tag
// Description: For the current page, get all DOM elements with a specific tag as XHEInterfaces collection
// Classes used: XHEElement, XHEInterfaces, XHEBrowser, XHEApplication

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

// Example 1: Get all DIV elements on the page

// Get all DIV elements on the page
$divElements = DOM::$element->get_all_by_tag("DIV");

// Get the count of DIV elements
$divCount = $divElements->get_count();

// Display the count
echo "Number of DIV elements on the page: " . $divCount . "\n";

// If there are any DIV elements, display information about the first one
if ($divCount > 0) {
    $firstDiv = $divElements->get(0);
    if ($firstDiv->inner_number != -1) {
        echo "First DIV element tag: " . $firstDiv->get_tag() . "\n";
        echo "First DIV element inner text: " . $firstDiv->get_inner_text() . "\n";
    }
}

// Example 2: Get all A elements on the page

// Get all A elements on the page
$aElements = DOM::$element->get_all_by_tag("A");

// Get the count of A elements
$aCount = $aElements->get_count();

// Display the count
echo "\nNumber of A elements on the page: " . $aCount . "\n";

// If there are any A elements, display information about the first one
if ($aCount > 0) {
    $firstA = $aElements->get(0);
    if ($firstA->inner_number != -1) {
        echo "First A element tag: " . $firstA->get_tag() . "\n";
        echo "First A element href: " . $firstA->get_href() . "\n";
    }
}

// Stop the application
WINDOW::$app->quit();
?>