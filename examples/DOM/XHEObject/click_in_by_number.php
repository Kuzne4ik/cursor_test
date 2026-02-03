<?php
// Scenario: Demonstrates clicking on a DOM element by number at specific coordinates
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with object elements
$pageUrl = TEST_POLYGON_URL . "object.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Click on object by number at center
$objectNumber = 0;
echo("Example 1: Click on object by number at center\n");
echo("object number: $objectNumber\n");
$result = DOM::$object->click_in_by_number($objectNumber);
echo("Click result: " . ($result ? "true" : "false") . "\n");

// Quit the application
WINDOW::$app->quit();