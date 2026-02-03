<?php
// Scenario: Demonstrates clicking on a DOM element by attribute at specific coordinates
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// Navigate to a webpage with button elements
$pageUrl = TEST_POLYGON_URL . "object.html";
echo("Navigate to HTML page: $pageUrl\n");
WEB::$browser->navigate($pageUrl);
WEB::$browser->wait_js();

// Example 1: Click on object by attribute at center
$attrName = "name";
$attrValue = "video1";
echo("Example 1: Click on object by attribute at center\n");
echo("Attribute name: $attrName\n");
echo("Attribute value: $attrValue\n");
$result = DOM::$object->click_in_by_attribute($attrName, $attrValue);
echo("Click result: " . ($result ? "true" : "false") . "\n");

// Quit the application
WINDOW::$app->quit();