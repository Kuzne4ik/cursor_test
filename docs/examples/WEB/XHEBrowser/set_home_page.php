<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_home_page function

// Set a custom home page
$home_page = "https://www.google.com";
$result = WEB::$browser->set_home_page($home_page);

// Display the result
if ($result) {
    echo "Successfully set home page to: " . $home_page;
} else {
    echo "Failed to set home page";
}

// Navigate to the home page
WEB::$browser->navigate_to_home_page();
WEB::$browser->wait_js(3);

echo "\n\nNavigated to home page";

// Get current URL to verify
$current_url = WEB::$webpage->get_url();
echo "\n\nCurrent URL: " . $current_url;

// Quit the application
WINDOW::$app->quit();
?>