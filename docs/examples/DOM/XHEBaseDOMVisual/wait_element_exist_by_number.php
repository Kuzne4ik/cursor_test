<?php
// Scenario: Example of waiting for a DOM element to exist by its number

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// Navigate to a webpage with anchor elements
$pageUrl = TEST_POLYGON_URL . "anchor.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Wait for the first anchor element on the page to exist
$anchorNumber = 0;
echo("\n\nExample 1: Wait for anchor element by number\n");
echo("Waiting for anchor element with number: $anchorNumber\n");
$anchorExists = DOM::$anchor->wait_element_exist_by_number($anchorNumber);

if ($anchorExists) {
    echo("Anchor element with number $anchorNumber exists on the page\n");
    
    // Get the anchor element to perform additional operations
    $findedAnchor = DOM::$anchor->get_by_number($anchorNumber);
    
    if ($findedAnchor->is_exist()) {
        echo("Successfully retrieved anchor element with number $anchorNumber\n");
    } else {
        echo("Failed to retrieve anchor element with number $anchorNumber\n");
    }
} else {
    echo("Anchor element with number $anchorNumber does not exist on the page\n");
}

// Example 2: Wait for an anchor element in frame 0
$frameNumber = 0;
echo("\n\nExample 2: Wait for anchor element in frame\n");
echo("Frame $frameNumber exists on the page\n");
    
// Wait for the first anchor element in frame 0 to exist
$anchorInFrameNumber = 0;
echo("Waiting for anchor element with number $anchorInFrameNumber in frame $frameNumber\n");
$anchorInFrameExists = DOM::$anchor->wait_element_exist_by_number($anchorInFrameNumber, $frameNumber);
    
if ($anchorInFrameExists) {
    echo("Anchor element with number $anchorInFrameNumber exists in frame $frameNumber\n");
     
    // Get the anchor element from frame 0
    $anchorInFrame = DOM::$anchor->get_by_number($anchorInFrameNumber, $frameNumber);
        
    if ($anchorInFrame->is_exist()) {
        echo("Successfully retrieved anchor element with number $anchorInFrameNumber from frame $frameNumber\n");
    } else {
        echo("Failed to retrieve anchor element with number $anchorInFrameNumber from frame $frameNumber\n");
    }
} else {
    echo("Anchor element with number $anchorInFrameNumber does not exist in frame $frameNumber\n");
}

// Quit the application
WINDOW::$app->quit();