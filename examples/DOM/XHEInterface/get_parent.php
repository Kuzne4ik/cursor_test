<?php

// Scenario: For current page, find a DOM element and get its parent element
// Description: For the current page, find a DOM element and get its parent element in the DOM tree
// Classes used: XHEAnchor, XHEInterface, XHEBrowser, XHEApplication

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

// Example 1: Get tags and numbers of parent elements

// Get the anchor object by 'name' attribute, as XHEInterface
$targetAnchor = DOM::$anchor->get_by_name("seonote");

// Check that the DOM element is received
if ($targetAnchor->inner_number != -1)
{
    // Get the first parent element
    $parent1 = $targetAnchor->get_parent();
    
    // Get the second parent element
    $parent2 = $parent1->get_parent();
    
    // Get the third parent element
    $parent3 = $parent2->get_parent();
    
    // Check that the parent elements are received
    if ($parent1->inner_number != -1 && $parent2->inner_number != -1 && $parent3->inner_number != -1)
    {
        // Get tags and numbers of parent elements
        echo($parent1->get_tag() . " " . $parent1->get_number() . " ");
        echo($parent2->get_tag() . " " . $parent2->get_number() . " ");
        echo($parent3->get_tag() . " " . $parent3->get_number() . "\n");
    }
}

// Example 2: Get tag and number of parent element with level 3

// Get the anchor object by 'name' attribute, as XHEInterface
$targetAnchor = DOM::$anchor->get_by_name("seonote");

// Check that the DOM element is received
if ($targetAnchor->inner_number != -1)
{
    // Get the parent element at level 3
    $parentLevel3 = $targetAnchor->get_parent(3);
    
    // Check that the parent element is received
    if ($parentLevel3->inner_number != -1)
    {
        // Get tag and number of parent element
        echo($parentLevel3->get_tag() . " " . $parentLevel3->get_number() . "\n");
    }
}

// Stop the application
WINDOW::$app->quit();
?>