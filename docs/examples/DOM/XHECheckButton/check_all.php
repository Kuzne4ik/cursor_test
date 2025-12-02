<?php
// Scenario: Check or uncheck all checkboxes on a webpage
// Description: Demonstrates how to check or uncheck all checkboxes on a webpage at once
// Classes used: DOM, XHECheckButton, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The example demonstrates using the check_all function to check or uncheck all checkboxes on the page
// Navigate to a test page with checkboxes
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_checkbox");

// Wait for the page to fully load
WEB::$browser->wait_js();

// Check all checkboxes on the page
DOM::$checkbox->check_all(true);

// Uncheck all checkboxes on the page
DOM::$checkbox->check_all(false);

// Stop the application
WINDOW::$app->quit();