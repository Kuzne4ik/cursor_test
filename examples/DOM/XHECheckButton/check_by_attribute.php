<?php
// Scenario: Check or uncheck a checkbox by any attribute
// Description: Demonstrates how to check or uncheck a checkbox based on any attribute value with exact or partial match options
// Classes used: DOM, XHECheckButton, XHEBrowser, XHEApplication
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The example demonstrates using the check_by_attribute function to check a checkbox by any attribute
// Navigate to a test page with checkboxes
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_checkbox");

// Wait for the page to fully load
WEB::$browser->wait_js();

// Check a checkbox with id attribute "vehicle1" (exact match)
DOM::$checkbox->check_by_attribute("id", "vehicle1", true, true);

// Uncheck the checkbox with id attribute "vehicle1" (exact match)
DOM::$checkbox->check_by_attribute("id", "vehicle1", true, false);

// Check a checkbox with class attribute containing "vehicle" (partial match)
DOM::$checkbox->check_by_attribute("class", "vehicle", false, true);

// Stop the application
WINDOW::$app->quit();