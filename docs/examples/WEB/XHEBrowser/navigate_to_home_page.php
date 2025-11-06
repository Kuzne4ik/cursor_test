<?php
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the navigate_to_home_page function

// Navigate to the home page
$result = WEB::$browser->navigate_to_home_page();
// Wait for the navigation to complete
WEB::$browser->wait_js(3);

// Display the result
if ($result) {
    echo "\n\nSuccessfully navigated to home page";
} else {
    echo "\n\nFailed to navigate to home page";
}

// Quit the application
WINDOW::$app->quit();
?>