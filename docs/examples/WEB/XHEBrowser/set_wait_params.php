<?php
// Scenario: Demonstrates how to configure custom wait parameters for page navigation operations
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_wait_params function

// Set custom wait parameters for any navigation
$try_navigate_second = 20; // Wait up to 20 seconds for navigation
$try_navigate_count = 3;   // Try navigation up to 3 times

$result = WEB::$browser->set_wait_params($try_navigate_second, $try_navigate_count);

// Display the result
if ($result) {
    echo "Successfully set wait parameters:";
    echo "\nTry Navigate Second: " . $try_navigate_second;
    echo "\nTry Navigate Count: " . $try_navigate_count;
} else {
    echo "Failed to set wait parameters";
}

// Quit the application
WINDOW::$app->quit();
?>