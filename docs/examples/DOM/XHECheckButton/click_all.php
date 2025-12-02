<?php
// Scenario: Click all checkboxes on a webpage
// Description: Demonstrates how to click all checkboxes on a webpage at once
// Classes used: DOM, XHECheckButton, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The example demonstrates using the click_all function to click all checkboxes on the page
// Navigate to a test page with checkboxes
WEB::$browser->navigate(TEST_POLYGON_URL . "checkbox.html");

// Wait for the page to fully load
WEB::$browser->wait_js();

// Click all checkboxes on the page
DOM::$checkbox->click_all();

// Stop the application
WINDOW::$app->quit();