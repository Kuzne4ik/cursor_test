<?php
// Scenario: Set popup type to 0 (default) to demonstrate set_popup_type function
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_popup_type function

// Set popup type to 0 (default)
$result = WEB::$browser->set_popup_type(0);

// Display the result
if ($result) {
    echo "Successfully set popup type to 0 (default)";
} else {
    echo "Failed to set popup type";
}

// Quit the application
WINDOW::$app->quit();
?>