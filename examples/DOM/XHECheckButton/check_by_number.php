<?php
// Scenario: Check or uncheck a checkbox by its number
// Description: Demonstrates how to check or uncheck a checkbox based on its numerical order on the page
// Classes used: DOM, XHECheckButton, XHEBrowser, XHEApplication
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The example demonstrates using the check_by_number function to check a checkbox by its number
// Navigate to a test page with checkboxes
WEB::$browser->navigate(TEST_POLYGON_URL . "checkbox.html");

// Wait for the page to fully load
WEB::$browser->wait_js();

// Check the first checkbox (number 0) on the page
DOM::$checkbox->check_by_number(0, true);

// Uncheck the first checkbox
DOM::$checkbox->check_by_number(0, false);

// Stop the application
WINDOW::$app->quit();