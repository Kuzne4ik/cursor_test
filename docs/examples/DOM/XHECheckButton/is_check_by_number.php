<?php
$xhe_host = "127.0.0.1:7010";
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The example demonstrates using the is_check_by_number function to check if a checkbox is checked by its number
// Navigate to a test page with checkboxes
WEB::$browser->navigate("https://www.w3schools.com/html/tryit.asp?filename=tryhtml_checkbox");

// Wait for the page to fully load
WEB::$browser->wait_for();

// Check if the first checkbox (number 0) is checked
$isChecked = DOM::$checkbox->is_check_by_number(0);

if ($isChecked) {
    echo "First checkbox (number 0) is checked<br>";
} else {
    echo "First checkbox (number 0) is not checked<br>";
}

// Check the first checkbox
DOM::$checkbox->check_by_number(0, true);


// Check again if the first checkbox is checked
$isChecked = DOM::$checkbox->is_check_by_number(0);

if ($isChecked) {
    echo "First checkbox (number 0) is now checked<br>";
} else {
    echo "First checkbox (number 0) is still not checked<br>";
}

// Stop the application
WINDOW::$app->quit();