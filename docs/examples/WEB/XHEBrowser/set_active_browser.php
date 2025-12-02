<?php
// Scenario: Set browser count to 3, then set active browser to browser number 1 to demonstrate set_active_browser function
// Path to the init.php file for connecting to the XHE API
$path = "../../../../../../Templates/init.php";
// Including init.php grants access to all classes and functionality for working with the XHE API
require($path);

// The following code demonstrates the usage of the set_active_browser function

// First, set browser count to 3 to have multiple browsers
WEB::$browser->set_count(3);

// Set active browser to browser number 1 (0-based index)
$browser_num = 1;
$result = WEB::$browser->set_active_browser($browser_num);

// Display the result
if ($result) {
    echo "Successfully set active browser to: " . $browser_num;
} else {
    echo "Failed to set active browser";
}

// Get the current active browser to verify
$active_browser = WEB::$browser->get_active_browser();
echo "\nCurrent active browser: " . $active_browser;

// Remove all tabs except first
$result = WEB::$browser->close_all_tabs();

// Остановить работу
WINDOW::$app->quit();
?>