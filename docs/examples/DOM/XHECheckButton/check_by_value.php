<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The example demonstrates using the check_by_value function to check a checkbox by its value attribute
// Navigate to a test page with checkboxes
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_checkbox");

// Wait for the page to fully load
WEB::$browser->wait_for();

// Check a checkbox with value "Bike" (exact match)
DOM::$checkbox->check_by_value("Bike", true, true);

// Uncheck the checkbox with value "Bike" (exact match)
DOM::$checkbox->check_by_value("Bike", true, false);

// Check a checkbox with value containing "Car" (partial match)
DOM::$checkbox->check_by_value("Car", false, true);

// Stop the application
WINDOW::$app->quit();