<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The example demonstrates using the check_by_name function to check a checkbox by its name attribute
// Navigate to a test page with checkboxes
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_checkbox");

// Wait for the page to fully load
WEB::$browser->wait_for();

// Check a checkbox with name "vehicle1"
DOM::$checkbox->check_by_name("vehicle1", true);

// Uncheck the checkbox with name "vehicle1"
DOM::$checkbox->check_by_name("vehicle1", false);

// Stop the application
WINDOW::$app->quit();