<?php
// Scenario: Check or uncheck a checkbox by attribute within a specific form by name
// Description: Demonstrates how to check or uncheck a checkbox based on attribute values within a form identified by its name attribute
// Classes used: DOM, XHECheckButton, XHEBrowser, XHEApplication
$xhe_host = "127.0.0.1:7010";
if (!isset($path)){
    // Path to the init.php file for connecting to the XHE API
    $path = "../../../Templates/init.php";
    // Including init.php grants access to all classes and functionality for working with the XHE API
    require($path);
}

// The example demonstrates using the check_by_attribute_by_form_name function to check a checkbox by attribute within a specific form by name
// Navigate to a test page with forms containing checkboxes
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_form_checkbox");

// Wait for the page to fully load
WEB::$browser->wait_js();

// Check a checkbox with id attribute "vehicle1" in the form with name "form1"
DOM::$checkbox->check_by_attribute_by_form_name("id", "vehicle1", true, true, "form1");

// Uncheck the checkbox with id attribute "vehicle1" in the form with name "form1"
DOM::$checkbox->check_by_attribute_by_form_name("id", "vehicle1", true, false, "form1");

// Check a checkbox with name attribute containing "vehicle" in the form with name "form1"
DOM::$checkbox->check_by_attribute_by_form_name("name", "vehicle", false, true, "form1");

// Stop the application
WINDOW::$app->quit();