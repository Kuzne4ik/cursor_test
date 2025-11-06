<?php

// Scenario: For the current page, find a DOM element and get its child DOM elements by XPath expression, and get the inner text of each child object
// Description: For the current page, find a DOM element as XHEInterface, and get its child DOM elements by XPath expression as XHEInterfaces, and get the inner text of each child object
// Classes used: XHEDiv, XHEBrowser, XHEApplication, XHEInterface, XHEInterfaces

// Connection string to XHE API
$xhe_host = "127.0.0.1:7010";

// Path to init.php file
if (!isset($path))
{
    // Path to init.php file for connecting to XHE API
    $path = "../../../../../../Templates/init.php";
    // When connecting the init.php file, all functionality of classes for working with XHE API will be available
    require($path);
}

// Navigate to the polygon page if the page was not loaded earlier
WEB::$browser->navigate(TEST_POLYGON_URL . "anchor.html");

// Example 1: For the current page, find a DOM element as XHEInterface, and get its child DOM elements by XPath expression as XHEInterfaces, and get the inner text of each child object as an array of strings

// Get the div object by 'name' attribute, as XHEInterface
$targetDiv = DOM::$div->get_by_attribute('name', 'Name', false);

// Get child DOM elements from the current div by XPath expression for searching child div elements, get the result as a collection object of type XHEInterfaces
$targetDivChilds = $targetDiv->get_all_child_by_xpath("/div");

// For the collection object of type XHEInterfaces, call the get_inner_text() method on each element of the collection to get its inner text.
// As a result of execution, an array of inner text strings for child elements of the current div DOM element will be returned.
$targetDivChildInnerTexts = $targetDivChilds->get_inner_text();

// Output all inner texts to the console one by one
foreach ($targetDivChildInnerTexts as $childInnerText)
    echo($childInnerText . "\n");

// Stop the application
WINDOW::$app->quit();
?>