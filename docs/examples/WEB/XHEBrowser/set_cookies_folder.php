<?php
// Scenario: Get current cookies folder, set custom cookies folder, then verify the change to demonstrate set_cookies_folder function
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_cookies_folder function

// First, get current cookies folder
$current_folder = WEB::$browser->get_cookies_folder();
echo "Current cookies folder: " . $current_folder;

// Set custom cookies folder
$custom_folder = "./my_cookies";
$result = WEB::$browser->set_cookies_folder($custom_folder);

// Display the result
if ($result) {
    echo "\n\nSuccessfully set cookies folder to: " . $custom_folder;
} else {
    echo "\n\nFailed to set cookies folder";
}

// Verify the change
$updated_folder = WEB::$browser->get_cookies_folder();
echo "\nUpdated cookies folder: " . $updated_folder;

// Остановить работу
WINDOW::$app->quit();
?>