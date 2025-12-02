<?php
// Scenario: Check if a checkbox is checked by its value
// Description: Demonstrates how to determine if a checkbox is checked based on its value attribute with exact or partial match options
// Classes used: DOM, XHECheckButton, XHEBrowser, XHEApplication

$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The example demonstrates using the is_check_by_value function to check if a checkbox is checked by its value
// Navigate to a test page with checkboxes
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_checkbox");

// Wait for the page to fully load
WEB::$browser->wait_js();

// Check if a checkbox with value "Bike" is checked (Inexact match)
$isChecked = DOM::$checkbox->is_check_by_value("Bike", exactly: false);

if ($isChecked) {
    echo "Checkbox with value 'Bike' is checked\n";
} else {
    echo "Checkbox with value 'Bike' is not checked\n";
}

// Check the checkbox with value "Bike"
DOM::$checkbox->check_by_value("Bike", true, true);


// Check again if the checkbox is checked
$isChecked = DOM::$checkbox->is_check_by_value("Bike", true);

if ($isChecked) {
    echo "Checkbox with value 'Bike' is now checked\n";
} else {
    echo "Checkbox with value 'Bike' is still not checked\n";
}

// Stop the application
WINDOW::$app->quit();