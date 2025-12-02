<?php
// Scenario: Demonstrates how to set the browser window width to simulate different screen sizes
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_width function

// First, get current page width
$current_width = WEB::$browser->get_page_width();
echo "Current page width: " . $current_width . "px";

// Set custom width
$custom_width = 1024;
$result = WEB::$browser->set_width($custom_width);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set page width to: " . $custom_width . "px";
} else {
    echo "\n\nFailed to set page width";
}

// Verify the change
$updated_width = WEB::$browser->get_page_width();
echo "\nUpdated page width: " . $updated_width . "px";

// Quit the application
WINDOW::$app->quit();
?>