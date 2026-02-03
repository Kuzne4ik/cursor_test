<?php

// Scenario: Set inner HTML of a DOM element
// Description: For current page, find an anchor element and set its inner HTML
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

// Example 1: Set inner HTML of an anchor element

// Navigate to test site
echo WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html") . "\n";

// Get DOM element <a> by attribute "name" equal to "igvard"
$targetAnchor = DOM::$anchor->get_by_attribute("name", "igvard", true);

// Check that DOM element was found
if ($targetAnchor->inner_number != -1) {
    // Set HTML text for the element
    echo "2. Set html text for element with name equal to igvard: ";
    echo $targetAnchor->set_inner_html("<b>NEW HTML</b>") . "\n";
}

// Stop application
WINDOW::$app->quit();
?>