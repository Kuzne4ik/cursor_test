<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The example demonstrates using the is_check_by_name function to check if a checkbox is checked by its name
// Navigate to a test page with checkboxes
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_checkbox");

// Wait for the page to fully load
WEB::$browser->wait_for();

// Check if a checkbox with name "vehicle1" is checked
$isChecked = DOM::$checkbox->is_check_by_name("vehicle1");

if ($isChecked) {
    echo "Checkbox with name 'vehicle1' is checked<br>";
} else {
    echo "Checkbox with name 'vehicle1' is not checked<br>";
}

// Check the checkbox with name "vehicle1"
DOM::$checkbox->check_by_name("vehicle1", true);


// Check again if the checkbox is checked
$isChecked = DOM::$checkbox->is_check_by_name("vehicle1");

if ($isChecked) {
    echo "Checkbox with name 'vehicle1' is now checked<br>";
} else {
    echo "Checkbox with name 'vehicle1' is still not checked<br>";
}

// Stop the application
WINDOW::$app->quit();